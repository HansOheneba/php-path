<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main class="px-5">
    <div class="mx-auto max-w-3xl py-6 sm:px-6 lg:px-8">
        <?php if(!empty($notes)): ?>
        <ul class="bg-white shadow-md rounded-lg p-6 divide-y divide-gray-300">
            <?php foreach ($notes as $note) : ?>
                <li class="py-3">
                    <a href="/note?id=<?= $note['id'] ?>" class="block text-md font-medium text-gray-900 hover:text-blue-500 transition">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        <?php else : ?>
            <div class="py-10">
                <div class="flex justify-center py-10">
                    <i class="fa-regular fa-pen-to-square text-6xl text-blue-600"></i>
                </div>
                <p class="text-center text-2xl font-bold text-gray-900 py-8">No notes available</p>
                <p class="text-center text-md text-gray-700 mb-6">Looks like you haven't created any notes yet... <br> Click the button below to get started!</p>
               
            </div>
        <?php endif ?>
        <div class="mt-6 flex justify-center">
            <a href="notes/create" class="inline-flex items-center bg-blue-700 text-md text-white py-2 px-6 font-medium rounded-md hover:bg-blue-800 transition duration-300">
                Create a note
            </a>
        </div>
    </div>
</main>

<?php require base_path('views/partials/foot.php') ?>
</html>
