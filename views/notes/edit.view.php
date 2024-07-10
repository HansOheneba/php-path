<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main class="px-5">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 ">
        <div class="w-full rounded-lg bg-gray-200 relative">
            <form method="POST" action="/note">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <div class="px-4 pt-2 bg-gray-200 rounded-t-lg ">
                    <label for="body" class="block mb-2 font-semibold text-gray-900 text-lg px-4 py-2.5">Note Body</label>

                    <textarea id="body" name="body" rows="4" class="w-full p-2  text-sm text-gray-900 bg-white border-0  focus:ring-0" placeholder="Write down your thoughts..."><?= htmlspecialchars($note['body']) ?></textarea>
                    <?php if (isset($errors['body'])) : ?>

                        <p class="text-red-500 text-sm mt-2"><?= $errors['body'] ?></p>

                    <?php endif; ?>


                </div>
                <div class="flex items-center justify-end gap-2 px-3 pt-2 pb-4">
                    <a href="/notes" class="inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-blue-700 border-2 border-blue-500 rounded-lg focus:ring-4 focus:ring-blue-200  hover:bg-blue-300">
                        Cancel
                    </a>
                    <button type="submit" class="inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200  hover:bg-blue-800">
                        Update
                    </button>
                </div>
                </form>
                <form action="/note" method="post" class="absolute top-3 right-4 space-x-2">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?= $note['id'] ?>">
                        <button class="bg-red-500 text-sm inline-flex text-center font-medium text-white px-4 py-2.5 rounded-lg hover:bg-red-600 transition duration-300">Delete</button>
                    </form>
        </div>
        


    </div>
</main>



<?php require base_path('views/partials/foot.php') ?>

</html>