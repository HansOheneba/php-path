<?php 

$_SESSION['name'] = 'Hans'; 
view("index.view.php", [
    'heading' => 'Home',
]);