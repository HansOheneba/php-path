<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>


<main class="px-5">
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1>You are now in the "Homepage"</h1>
  </div>
  <br>
  <br>
 


  <?php if ($_SESSION['flash'] ?? false) : ?>
    <?php
    $toast = $_SESSION['flash'];
    unset($_SESSION['flash']);
    ?>
    <div x-data="{ show: false }" x-init="setTimeout(() => { show = true; setTimeout(() => show = false, 3000); }, 500)">
      <div
      x-show="show" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform translate-y-4"
             x-transition:enter-end="opacity-100 transform translate-y-0"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform translate-y-0"
             x-transition:leave-end="opacity-0 transform translate-y-4"
      class="absolute bottom-10 md:right-16 flex items-center p-4 rounded-lg text-green-500 bg-white w-fit shadow-md">
      <i class="fa-solid fa-check"></i>
  <span class="sr-only">Info</span>
  <div class="ms-3 text-sm font-medium text-gray-800">
    <?= $toast ?>
  </div>
    </div>
  <?php endif ?>

</main>


<?php require('partials/foot.php'); ?>

</html>