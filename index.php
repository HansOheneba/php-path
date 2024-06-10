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

    <?php $movies = [
        [
            "title" => "The art of War",
            "author" => "Sun Tzu",
            "year" => "1506",
            "link" => "https://www.google.com"
        ],
        [
            "title" => "The 48 Laws of power",
            "author" => "Robert Greene",
            "year" => "2001",
            "link" => "https://www.apple.com"
        ],
        [
            "title" => "The Subtle Art of Not Giving a Fuck",
            "author" => "Robert Greene",
            "year" => "2006",
            "link" => "https://www.apple.com"
        ],
    ];

    function filter($items, $key, $value){
        $filteredItem = [];
        
        foreach($items as $item){
         if($item[$key] === $value) {
            $filteredItem[] = $item;
        };
    }

    return $filteredItem;
    }

    $filteredBooks = filter($movies,'author', 'Robert Greene');
    ?>

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

