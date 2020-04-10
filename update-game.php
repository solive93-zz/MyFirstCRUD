<?php

require('vendor/autoload.php');
session_start();

use App\Connection;
use App\CRUD;


    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = CRUD::readById($id);
        $result = CRUD::executeQuery($query);
        $game=$result[0];
        
        $name = $game['name'];
        $category = $game['category'];
        $price = $game['price'];
        $image = $game['image'];
    }

    if(isset($_POST['update']))
    {   
        $id = $_GET['id'];
        $name = $_POST['game-name'];
        $category = $_POST['game-category'];
        $price = $_POST['game-price'];
        $image =$_POST['image-path'];
        
        $query = "UPDATE videogames SET `name`='$name', category='$category', price='$price', `image`='$image' WHERE id='$id'"; //CRUD::update($name, $category, $price, $image);
        CRUD::executeQuery($query);
        
        $_SESSION['message'] = 'Game fields successfully edited!';
        $_SESSION['message-type'] = 'warning';
        header("Location: admin.php");  
    }
    
require('includes\header.php'); 

?>

    <div class="container">
        <div class="alert alert-light" role="alert">
            <h4 class="alert-heading">Edit Game Data</h4>
                <form action="update-game.php?id=<?php echo $id;?>" method="post">
                    <span class="form-row">
                        <div class="form-group col-md-4">
                            <label for="name">Name</label>
                            <input type="text" name="game-name" value="<?php echo $name;?>" class="form-control" id="name" placeholder="Insert the videgame's name here" autofocus>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="category">Category</label>
                            <select id="category" name="game-category" class="form-control">
                                <option selected>Choose...</option>
                                <option>Action</option>
                                <option>Sports</option>
                                <option>Shooter</option>
                                <option>RPG</option>
                                <option>Platform</option></option>
                                <option>Strategy</option></option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="price">Price</label>
                            <input type="number" name="game-price" value="<?php echo $price;?>" class="form-control" id="price" placeholder="How much it cost?">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="image">Image</label>
                            <input type="text" class="form-control" name="image-path" value="<?php $image;?>" id="text" placeholder="Paste the image URL link here">
                        </div>
                        <div class="form-group col-md-1">
                            <label class="text-white">.....................................</label>
                            <button class="btn btn-success relative-bottom w-100" name="update"><i class="fa fa-pencil"></i></button>
                        </div>
                    </span>  
                </form>
                <hr>
                    <p class="mb-0">Edit the Videogame Data and update it by clicking the green button</p>
                <hr>          
        </div>
    </div>

<?php 
    
require('includes\footer.php')

?>
