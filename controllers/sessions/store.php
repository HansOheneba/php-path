<?php 

use Core\App;
use Core\Database;
use Core\Validator;

$errors=[];


$email = $_POST['email'];
$password = $_POST['password'];

if (!Validator::email($email)) {
    $errors['email'] = 'Email address not valid';
}

if(!Validator::string($password)){
    $errors['password'] = 'A valid password is required';
}

if(!empty($errors)){
    return view('sessions/create.view.php',[
        'errors' => $errors
    ]);
    
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email',[
    'email' => $email
])->fetch();

// dd($user);

if($user){

    if(password_verify($password, $user['password'])){
        login([
            'id'=> $user['id'],
            'email'=> $email,
            'name' => $user['name']
        ]);

        header('location: /');
        
    die;    
    }
        
}



return view('sessions/create.view.php',[
    'errors' => ['form' => 'Invalid login credentials']
]);

