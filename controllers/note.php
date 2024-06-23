<?php 

$dataConfig = require ("config.php");
$db = new Database($dataConfig['database']);

$id = $_GET['id'];

$note = $db->query("select * from notes where id = :id", ['id' => $id] )->fetch();

//dd($note);

$heading = "Your note";


require "views/note.view.php";