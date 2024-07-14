<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main class="px-5">
    <div class="mx-auto max-w-3xl py-6 sm:px-6 lg:px-8">
        <div class="w-full rounded-lg bg-white shadow-md p-6 relative">
            <div class="flex items-center justify-between mb-5">
                <a href="/notes" class="inline-flex items-center border border-black py-2 px-4 rounded-md text-black hover:bg-gray-50 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                    </svg>
                    <span class="ml-1 font-bold text-sm">Back</span>
                </a>
                <a href="/note/edit?id=<?= $note['id'] ?>" class="bg-blue-700 text-md text-white py-2 px-6 font-medium rounded-md hover:bg-blue-800 transition duration-300">
                    Edit
                </a>
            </div>
            <div class="p-5 mt-10 mx-5 border-2 border-gray-100 rounded-lg bg-gray-50">
                <p class="text-gray-700 text-md leading-relaxed"><?= htmlspecialchars($note['body']) ?></p>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/foot.php') ?>
</html>
