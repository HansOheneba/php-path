
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Trials</title>
</head>

<body>
    <h1>
        Books Collection
    </h1>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
    
            <li>
                <a href="<?= $book['link']; ?>">
                    <?= $book['title']; ?> (<?= $book['year'] ?> )
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>

