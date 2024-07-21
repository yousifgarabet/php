<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="text-2xl"><?= htmlspecialchars($note['body']) ?></p>
        <p class="mt-6">
            <a class="text-blue-500 underline" href="/php/notes">Go Back .. </a>
        </p>
        <p class="mt-6">
            <a href="/php/note/edit?id=<?= $note['id'] ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
        </p>
    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>