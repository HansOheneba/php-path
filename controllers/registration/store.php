<?php


use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$name = $_POST['name'];
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

$user = $db->query('select * from users where email = :email',[
    'email' => $email
])->fetch();

dd($user);

if($user){
    $errors['email'] = 'This email is already registered to an account';
}
else{
    $db->query('insert into users (name, email, password) values (:name,:email, :password)',[
'email' => $email,
'name' => $name,
'password' =>$password
    ]);
}

echo $email;
echo $name ;
echo $password;
echo $passwordConfirm;
