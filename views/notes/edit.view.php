<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main class="px-5">
    <div class="mx-auto max-w-3xl py-6 sm:px-6 lg:px-8">
        <div class="w-full rounded-lg bg-white shadow-md relative">
            <form method="POST" action="/note" class="p-6 space-y-6">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <div>
                    <label for="body" class="block mb-2 font-semibold text-gray-900 text-lg">Note Body</label>
                    <textarea id="body" name="body" rows="6" class="w-full p-4 text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 transition" placeholder="Write down your thoughts..."><?= htmlspecialchars($note['body']) ?></textarea>
                    <?php if (isset($errors['body'])) : ?>
                        <p class="text-red-500 text-sm mt-2"><?= $errors['body'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="flex items-center justify-end gap-3">
                    <a href="/notes" class="inline-flex items-center py-2.5 px-5 text-sm font-medium text-blue-700 border border-blue-500 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-100 transition">Cancel</a>
                    <button type="submit" class="inline-flex items-center py-2.5 px-5 text-sm font-medium text-white bg-blue-600 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-700 transition">Update</button>
                </div>
            </form>
            <form action="/note" method="post" class="absolute top-4 right-4">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="bg-red-500 text-sm font-medium text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">Delete</button>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/foot.php') ?>
