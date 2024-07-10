<?php


use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Email address not valid';
}

if ($password !== $passwordConfirm) {
    $errors['password'] = "Passwords do not match";
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = 'Password must be at least 8 characters long';
}



if (!empty($errors)) {

   return view("registration/create.view.php", [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$result = $db->query('select * from users where email = :email',[
    'email' => $email
])->fetch();

dd($result);


echo $email = $_POST['email'];
echo $password = $_POST['password'];
echo $passwordConfirm = $_POST['passwordConfirm'];
