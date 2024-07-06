<?php

use Core\Database;

$dataConfig = require base_path("config.php");
$db = new Database($dataConfig['database']);

$currentUserID = 1;

$note = $db->query("select * from notes where id = :id", [ 
    'id' => $_GET['id']
    ])->fetchOrAbort();


authorize($note['userID'] === $currentUserID);






view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);