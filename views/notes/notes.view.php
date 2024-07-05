<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>


<main class="px-5">
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach ($notes as $note) : ?>
      <ul>
        <li>
          <a class="text-blue-500 hover:underline" href="/note?id=<?= $note['id'] ?>">
            <?= htmlspecialchars($note['body']) ?>
          </a>
        </li>
      </ul>
    <?php endforeach ?>


    <div class="mt-6">
    <a href="notes/create">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Create a note
    </button>
    </a>
    </div>
  </div>
</main>



<?php require('partials/foot.php'); ?>

</html>