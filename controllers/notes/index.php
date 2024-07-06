<?php 

$dataConfig = require base_path("config.php");
$db = new Database($dataConfig['database']);

$notes = $db -> query("select * from notes where userID = 1")->fetchAll();





view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);