<?php

$currentUserID = 1;
$heading = "My notes";

$dataConfig = require("config.php");
$db = new Database($dataConfig['database']);

$note = $db->query("select * from notes where id = :id", [ 
    'id' => $_GET['id']
    ])->fetchOrAbort();


authorize($note['userID'] === $currentUserID);






require "views/notes/show.view.php";
