<?php

use Core\Database;

$dataConfig = require base_path("config.php");
$db = new Database($dataConfig['database']);

$currentUserID = 1;


$note = $db->query("select * from notes where id = :id", [
    'id' => $_POST['id']
])->fetchOrAbort();


authorize($note['userID'] === $currentUserID);


$note = $db->query("delete from notes where id = :id", [
    'id' => $_GET['id']
])->fetchAll();

header('location: /notes');
die();
