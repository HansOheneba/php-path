<?php

require('functions.php');

// require("router.php");


require ("Database.php");

$dataConfig = require ("config.php");

$config = $dataConfig['database'];

$db = new Database($config);

$id = ($_GET['id']);

$query = "Select * from posts where id = :id";

$posts=$db->query($query, [':id' => $id])->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

