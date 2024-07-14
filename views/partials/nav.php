<nav class="bg-gray-800" x-data="{ open: false, dropdownOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <a href="/notes"><img class="h-10 w-10" src="https://cdn-icons-png.flaticon.com/512/3075/3075770.png" alt="Notebook"></a>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="/" class="<?= activeUrl('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md  px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
            <a href="/about" class="<?= activeUrl('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md  px-3 py-2 text-sm font-medium">About</a>
            <a href="/contact" class="<?= activeUrl('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md  px-3 py-2 text-sm font-medium">Contact</a>
            <a href="/mission" class="<?= activeUrl('/mission') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md  px-3 py-2 text-sm font-medium">Mission</a>
            <?php if (isset($_SESSION['user'])) : ?>
              <a href="/notes" class="<?= activeUrl('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md  px-3 py-2 text-sm font-medium">Notes</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <div class="relative ml-3" x-data="{ dropdownOpen: false }">
            <div>
              <?php if ($_SESSION['user'] ?? false) : ?>
                <div class="flex gap-4">
                  <button @click="dropdownOpen = !dropdownOpen" type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png">
                  </button>


                  <style>
                    [x-cloak] {
                      display: none
                    }
                  </style>

                  <div x-data="{ modelOpen: false }">
                    <button @click="modelOpen =!modelOpen" @keydown.escape.window="modelOpen = false" type="submit" class="inline-flex w-20 justify-center items-center py-2.5 px-4 text-sm font-medium text-center text-white border-[1px] border-white rounded-lg focus:ring-2 focus:ring-white hover:bg-gray-700">
                      Logout
                    </button>

                    <div x-show="modelOpen" class="fixed flex justify-center items-center inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                      <div class="flex items-center justify-center px-4 text-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-black bg-opacity-60" aria-hidden="true"></div>

                        <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-fit max-w-md p-6 my-10 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl xl:max-w-xl">
                          <div class="flex items-center justify-between">
                            <h1 class="text-xl w-full text-center font-bold text-gray-800 ">
                              Logout</h1>


                          </div>
                          <p class="mt-2 text-md text-gray-800 text-center w-fit ">
                            Are you sure you want to logout of your account?
                          </p>
                          <form action="/sessions" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="flex justify-center mt-6">
                              <button for="show" @click="modelOpen = false" type="button" class="mr-2 w-1/2 py-2 text-sm tracking-wide capitalize transition-colors border border-gray-300 duration-200 transform bg-white hover:bg-gray-200 rounded-md">
                                Cancel
                              </button>

                              <button class="justify-center text-white text-md bg-red-500 hover:bg-red-600 border border-gray-200 focus:ring-4 focus:outline-none shadow-md focus:ring-gray-100 font-medium rounded-lg text-sm w-1/2 py-2.5 text-center inline-flex items-center">
                                <span>Logout</span>
                              </button>
                          </form>


                        </div>

                      </div>
                    </div>
                  </div>
                </div>
            </div>
          <?php else : ?>
            <div>
              <a href="/login" class="inline-flex w-20 justify-center items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-blue-600 border-[1px] border-blue-600 rounded-lg focus:ring-2 focus:ring-blue-600 hover:bg-blue-700">
                Log in
              </a>
              <a href="/register" class="inline-flex w-20 justify-center items-center py-2.5 px-4 text-sm font-medium text-center text-white border-[1px] border-white rounded-lg focus:ring-2 focus:ring-white hover:bg-gray-700">
                Register
              </a>
            </div>
          <?php endif ?>
          </div>
          <div x-show="dropdownOpen" @click.outside="dropdownOpen = false" x-cloak class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div>
        </div>
      </div>
    </div>
    <div class="-mr-2 flex md:hidden">
      <button @click="open = !open" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
        <span class="absolute -inset-0.5"></span>
        <span class="sr-only">Open main menu</span>
        <svg x-show="!open" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg x-show="open" class=" h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>
  </div>

  <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
      <a href="/" class=" <?= activeUrl('/') ? 'bg-gray-900' : 'bg-transparent' ?>  block rounded-md  px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
      <a href="/about" class=" <?= activeUrl('/about') ? 'bg-gray-900' : 'bg-transparent' ?>  block rounded-md px-3 py-2 text-base font-medium text-gray-300">About</a>
      <a href="/contact" class="<?= activeUrl('/contact') ? 'bg-gray-900' : 'bg-transparent' ?>  block rounded-md px-3 py-2 text-base font-medium text-gray-300">Contact</a>
      <a href="/mission" class="<?= activeUrl('/mission') ? 'bg-gray-900' : 'bg-transparent' ?>  block rounded-md px-3 py-2 text-base font-medium text-gray-300">Mission</a>
      <?php if (isset($_SESSION['user'])) : ?>
        <a href="/notes" class="<?= activeUrl('/notes') ? 'bg-gray-900' : 'bg-transparent' ?>  block rounded-md px-3 py-2 text-base font-medium text-gray-300">Notes</a>
      <?php endif; ?>
    </div>
    <div class="border-t border-gray-700 pb-3 pt-4">
      <div class="flex items-center px-5">
        <div class="flex-shrink-0">
          <img class="h-10 w-10 rounded-full" src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="">
        </div>
        <div class="ml-3">
          <div class="text-base font-medium leading-none text-white"><?= $_SESSION['user']['name'] ?? 'Guest' ?></div>
          <div class="text-sm font-medium leading-none text-gray-400"><?= $_SESSION['user']['email'] ?? 'guest@example.com' ?></div>
        </div>
      </div>
      <div class="mt-3 space-y-1 px-2">
        <?php if ($_SESSION['user'] ?? false) : ?>
              <div x-data="{ modelOpen: false }">
                    <button @click="modelOpen =!modelOpen" @keydown.escape.window="modelOpen = false" type="submit" class="iblock w-full rounded-md px-3 py-2 text-left text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
                      Logout
                    </button>

                    <div x-show="modelOpen" class="fixed flex justify-center items-center inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                      <div class="flex items-center justify-center px-4 text-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-black bg-opacity-60" aria-hidden="true"></div>

                        <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-fit max-w-md p-6 my-10 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl xl:max-w-xl">
                          <div class="flex items-center justify-between">
                            <h1 class="text-xl w-full text-center font-bold text-gray-800 ">
                              Logout</h1>


                          </div>
                          <p class="mt-2 text-md text-gray-800 text-center w-fit ">
                            Are you sure you want to logout of your account?
                          </p>
                          <form action="/sessions" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="flex justify-center mt-6">
                              <button for="show" @click="modelOpen = false" type="button" class="mr-2 w-1/2 py-2 text-sm tracking-wide capitalize transition-colors border border-gray-300 duration-200 transform bg-white hover:bg-gray-200 rounded-md">
                                Cancel
                              </button>

                              <button class="justify-center text-white text-md bg-red-500 hover:bg-red-600 border border-gray-200 focus:ring-4 focus:outline-none shadow-md focus:ring-gray-100 font-medium rounded-lg text-sm w-1/2 py-2.5 text-center inline-flex items-center">
                                <span>Logout</span>
                              </button>
                          </form>


                        </div>

                      </div>
                    </div>
                  </div>
        <?php else : ?>
          <a href="/login" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Log in</a>
          <a href="/register" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Register</a>
        <?php endif ?>
      </div>
    </div>
  </div>
</nav>