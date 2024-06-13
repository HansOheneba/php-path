<?php

require('functions.php');

// require("router.php");


require ("Database.php");

$dataConfig = require ("config.php");

$config = $dataConfig['database'];

$db = new Database($config);

$posts=$db->query("Select * from posts")->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post){
    echo "<li>".$post['title']."</li>";
}