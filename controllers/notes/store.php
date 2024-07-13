<?php

use Core\App;
use Core\Database;
use Core\Validator;

$errors = [];

$db = App::resolve(Database::class);

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
            "userID" => $_SESSION['user']["id"]
        ]
    );
}

header('location: /notes');

die();