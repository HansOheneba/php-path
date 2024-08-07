<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$currentUserID = $_SESSION['user']['id'];


$note = $db->query("select * from notes where id = :id", [
    'id' => $_POST['id']
])->fetchOrAbort();


authorize($note['userID'] === $currentUserID);


$note = $db->query("delete from notes where id = :id", [
    'id' => $_POST['id']
])->fetchAll();

header('location: /notes');
die();
