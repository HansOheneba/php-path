<?php 
$email = $_POST['email'];
$password = $_POST['password'];


login([
    'email'=> $email
]);