<?php 
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$notes = $db -> query("select * from notes where userID = :userID",[
    "userID" => $_SESSION['user']["id"]
])->fetchAll();



view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);