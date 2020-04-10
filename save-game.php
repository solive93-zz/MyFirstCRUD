<?php
require('vendor/autoload.php');
session_start();
use App\Connection;
use App\CRUD;

    if(isset($_POST['create']))
    {
        $name = $_POST['game-name'];
        $category = $_POST['game-category'];
        $price = $_POST['game-price'];
        $image = $_POST['image-path'];

        $query = CRUD::create($name, $category, $price, $image);
        $result= CRUD::executeQuery($query);
    }
    

    $_SESSION['message'] = 'Game successfully added to our catalogue!';
    $_SESSION['message-type'] = 'success'; 
    
    header("Location: admin.php");
?>