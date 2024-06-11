<?php 


$movies = [
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

    $filteredBooks = filter($movies,'year', '1506');

    require "index.view.php";