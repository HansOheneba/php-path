<?php 
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserID = $_SESSION['user']['id'];


$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
])->fetchOrAbort();


authorize($note['userID'] === $currentUserID);




view("notes/edit.view.php", [
    'heading' => 'Edit Note',
    'note' => $note,
    'errors' => []
]);

