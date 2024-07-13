<?php
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
};


function activeUrl($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
};

function abort($code = 404){

    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}



function authorize($condition, $status=403){
    if(!$condition){
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}

function login($user){
    $_SESSION['user'] = [
        'id' => $user['id'],
        'email' => $user['email'],
        'name' => $user['name']
    ];

    session_regenerate_id();

};

function logout(){
    $_SESSION = [];
    session_destroy(); 
}