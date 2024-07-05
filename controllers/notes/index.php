<?php 

$dataConfig = require ("config.php");
$db = new Database($dataConfig['database']);

$notes = $db -> query("select * from notes where userID = 1")->fetchAll();


$heading = "Notes";



require "views/notes/index.view.php";