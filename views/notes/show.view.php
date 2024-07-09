<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main class="container mx-auto flex-grow py-8">
  <div class="bg-white shadow-lg rounded-lg p-6 relative">
    <div class="flex items-center justify-between">
      <a href="/notes" class="inline-flex items-center border border-black py-2 px-4 rounded-md text-black hover:bg-gray-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18">
          </path>
        </svg>
        <span class="ml-1 font-bold text-sm">Back</span>
      </a>

      <a href="/note/edit?id=<?= $note['id'] ?>">
        <button class="bg-blue-700 text-md text-white py-2 px-6 font-medium rounded-md hover:bg-blue-800 transition duration-300">Edit</button>
      </a>
    </div>
    <div class="py-10">
      <p class="text-gray-700"><?= htmlspecialchars($note['body']) ?></p>

    </div>
    <div>

    </div>
  </div>
</main>




<?php require base_path('views/partials/foot.php') ?>

</html>