<?php 
include ('vendor/autoload.php');
use App\Connection;
use App\CRUD;

$query = CRUD::readAll();
$games = CRUD::executeQuery($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crud-style.css">
    <title>Videogames</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/671970ec80.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="img\joistik.png" width="50" height="50" alt="fak steam logo"> Fake Steam
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">CRUD operations on Videogames Database.</h1>
                <p class="lead">We're just like Steam, but better</p>
            </div>
        </div>
    </header>