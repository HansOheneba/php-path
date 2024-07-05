<?php
require('views/partials/head.php');
require('views/partials/nav.php');
require('views/partials/banner.php');
?>


<main class="px-5">
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <ul>
      <li>

        <dl class="max-w-md text-gray-900 divide-y divide-gray-300 ">
          <?php foreach ($notes as $note) : ?>
            <div class="flex flex-col py-3">

              <a href="/note?id=<?= $note['id'] ?>">
                <dd class="text-lg font-semibold hover:text-blue-500"><?= htmlspecialchars($note['body']) ?></dd>

              </a>

            </div>
          <?php endforeach ?>
        </dl>

      </li>
    </ul>



    <div class="mt-6">
      <a href="notes/create">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Create a note
        </button>
      </a>
    </div>
  </div>
</main>



<?php require('views/partials/foot.php'); ?>

</html>