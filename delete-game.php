<?php
require('vendor/autoload.php');
session_start();
use App\Connection;
use App\CRUD;

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = CRUD::deleteGame($id);
        CRUD::executeQuery($query);

        $_SESSION['message'] = 'Game removed from our catalogue';
        $_SESSION['message-type'] = 'danger';
        header("Location: admin.php");
    }
?>
    
