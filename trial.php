<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <style>
        body{
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1>Movies relesased after 2000</h1>


    <?php 
    $movies = [
        [
            "title" => "Inception",
            "release_date" => "2010"
        ],
        [
            "title" => "The Matrix",
            "release_date" => "1999"
        ],
        [
            "title" => "Interstellar",
            "release_date" => "2014"
        ],
        [
            "title" => "Gladiator",
            "release_date" => "2000"
        ],
        [
            "title" => "The Dark Knight",
            "release_date" => "2008"
        ],
        [
            "title" => "Fight Club",
            "release_date" => "1999"
        ],
        [
            "title" => "Avatar",
            "release_date" => "2009"
        ],
        [
            "title" => "The Lord of the Rings: The Fellowship of the Ring",
            "release_date" => "2001"
        ]
    ];
    

    function filter($movies, $year){
        $filtered = [];

        foreach($movies as $movie){
            if ($movie['release_date'] > $year){
                $filtered[] = $movie;
            }
           
        }

    

        return $filtered;
    };
    
    ?>
    
<ul>
    <?php foreach(filter($movies, '2000') as $movie) : ?>
    <li>
        <?= $movie['title'] ?>
    </li>
    <?php endforeach ?>
</ul>

</body>
</html>