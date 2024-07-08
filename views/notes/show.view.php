<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main class="container mx-auto flex-grow py-8">
  <div class="bg-white shadow-lg rounded-lg p-6 relative">
    <a href="/notes" class="inline-flex items-center border border-black px-2 py-1 rounded-md text-black hover:bg-gray-50 mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18">
        </path>
      </svg>
      <span class="ml-1 font-bold text-sm">Back</span>
    </a>
    <p class="text-gray-700"><?= htmlspecialchars($note['body']) ?></p>
<form action="" method="post">
  <input type="hidden" name="id" value="<?=$note['id']?>">
<button class="absolute top-4 right-4 bg-red-500 text-sm text-white px-2 py-1 rounded hover:bg-red-600 transition duration-300">Delete</button>
</form>
  </div>
</main>



<?php require base_path('views/partials/foot.php') ?>

</html>