<?php 

$dataConfig = require("config.php");
$db = new Database($dataConfig['database']);


$heading = "Create a Note";


if($_SERVER['REQUEST_METHOD'] === 'POST'){

$errors=[];

if( strlen($_POST['body']) === 0 ){
    $errors['body'] = "Oh dear... Seems your note does not have a body";
}
if( strlen($_POST['body']) > 1000 ){
    $errors['body'] = "Oh dear.. Notes can not be longer than 1,000 characters";
}
if(empty($errors)){
    $db->query('INSERT INTO notes(body, userID) VALUES(:body, :userID)', 
[
    'body' => $_POST['body'],
    'userID' => 1
]);
}
    

}

require('views/noteCreate.view.php');

