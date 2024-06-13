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

function abort(){
    http_response_code(404);

    require('404.php');

    die();
}