<?php 

$dataConfig = require("config.php");
$db = new Database($dataConfig['database']);


$heading = "Create a Note";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $db->query('INSERT INTO notes(body, userID) VALUES(:body, :userID)', 
[
    'body' => $_POST['body'],
    'userID' => 1
]);
}

require('views/noteCreate.view.php');

