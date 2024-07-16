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

function login($user, $message){
    $_SESSION['user'] = [
        'id' => $user['id'],
        'email' => $user['email'],
        'name' => $user['name']
    ];
    $_SESSION['flash'] = $message;


    session_regenerate_id();

};

function logout(){
    $_SESSION = [];
    session_destroy(); 
}

function setFlashMessage($message, $type = 'success') {
    $_SESSION['flash_message'] = $message;
    $_SESSION['flash_message_type'] = $type;
}

// Function to get and clear the flash message
function getFlashMessage() {
    if (isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        $type = $_SESSION['flash_message_type'];
        unset($_SESSION['flash_message'], $_SESSION['flash_message_type']);
        return ['message' => $message, 'type' => $type];
    }
    return null;
}

// Example usage
setFlashMessage('This is a success message!', 'success');
