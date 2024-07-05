<?php 

require('Validator.php'); 

$dataConfig = require("config.php");
$db = new Database($dataConfig['database']);


$heading = "Create a Note";


if($_SERVER['REQUEST_METHOD'] === 'POST'){

$errors=[];



if(! Validator::string($_POST['body'], 1, 1000))
{ 
    $errors['body'] = "Oh dear... A note body of no more than 1,000 characters is required";
}
 

if(empty($errors)){
    $db->query('INSERT INTO notes(body, userID) VALUES(:body, :userID)', 
[
    'body' => $_POST['body'],
    'userID' => 1
]);
}
    

}

require('views/notes/create.view.php');

