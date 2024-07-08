<?php

use Core\Database;
use Core\Validator;

$errors = [];

$dataConfig = require base_path("config.php");
$db = new Database($dataConfig['database']);


if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "Oh dear... A note body of no more than 1,000 characters is required";
}

if(!empty($errors)){
    
view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);
}


if (empty($errors)) {
    $db->query(
        'INSERT INTO notes(body, userID) VALUES(:body, :userID)',
        [
            'body' => $_POST['body'],
            'userID' => 1
        ]
    );
}

header('location: /notes');

die();