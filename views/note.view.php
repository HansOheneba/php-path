<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>


  
    <main class="px-5">
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 ">
      <a href="/notes"
        class="inline-flex items-center border border-black px-3 py-1.5 rounded-md text-black hover:bg-gray-50 mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18">
            </path>
        </svg>
        <span class="ml-1 font-bold text-lg">Back</span>
    </a>
       <p class="px-10"><?= $note['body'] ?></p>
      </div>
    </main>


    
<?php require('partials/foot.php'); ?>
</html>