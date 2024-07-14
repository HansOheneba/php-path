<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main class="px-5">
    <div class="mx-auto max-w-3xl py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <form method="POST" action="/notes">
                <div class="mb-4">
                    <label for="body" class="block mb-2 font-semibold text-gray-900 text-lg">Body</label>
                    <textarea id="body" name="body" rows="4" class="w-full p-2 text-sm text-gray-900 bg-white border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Write down your thoughts..."><?= $_POST['body'] ?? '' ?></textarea>
                    <?php if (isset($errors['body'])) : ?>
                        <p class="text-red-500 text-sm mt-2"><?= $errors['body'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="inline-flex items-center py-2 px-6 text-md font-medium text-white bg-blue-700 rounded-md hover:bg-blue-800 transition duration-300">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/foot.php') ?>
</html>
