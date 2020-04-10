<?php 

require('includes\header.php'); 
session_start()

?>

<div class="container">
    
    <?php 
    if(isset($_SESSION['message']))
    { ?>
        <div class="alert alert-<?php echo $_SESSION['message-type']; ?> alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php 
    session_unset();
    } 
    ?>
    
    <!-- Form: "Add a new Game" -->
    <div class="container">
        <div class="alert alert-light" role="alert">
                <h4 class="alert-heading">Add a new Game</h4>
            <form action="save-game.php" method="post">
                <div class="form-row" display: inline>
                    <div class="form-group col-md-4">
                        <label for="name">Name</label>
                        <input type="text" name="game-name" class="form-control" id="name" placeholder="Insert the videgame's name here" autofocus>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="category">Category</label>
                        <select id="category" name="game-category" class="form-control">
                            <option selected>Choose...</option>
                            <option>Sports</option>
                            <option>Shooter</option>
                            <option>RPG</option>
                            <option>Platform</option></option>
                            <option>Strategy</option></option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="price">Price</label>
                        <input type="text" name="game-price" class="form-control" id="price" placeholder="How much it cost?">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="image">Image</label>
                        <input type="text" name="image-path" class="form-control" id="text" placeholder="Paste the image URL link here">
                    </div>
                    <div class="form-group col-md-1 ">
                        <label class="text-white">.</label>
                        <button class="btn btn-success w-100 relative-bottom" name="create"><i class="fas fa-plus"></i></button>
                            
                    </div> 
                </div>     
            </form>
            <hr>
        </div>
    </div>

    <!-- Table -->
    <div class="container">
        <div>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image Path</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($games as $game)
                        {
                        ?>
                            <tr>
                                <th scope="row"><strong><?php echo $game['id']; ?><strong></th>
                                <td><?php echo $game['name']; ?></td>
                                <td><?php echo $game['category']; ?></td>
                                <td><?php echo $game['price']; ?> €</td>
                                <td><?php echo $game['image']; ?></td>
                                <td>
                                    <a href="update-game.php?id=<?php echo $game['id']; ?>">
                                        <i class="fa fa-pencil-alt btn btn-warning"></i>                                
                                    </a>
                                    <a href="delete-game.php?id=<?php echo $game['id']; ?>">
                                        <i class="fa fa-trash-alt btn btn-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        } ?>
                </tbody>           
            </table>
        </div>
    </div>
    
</div>

<?php require('includes\footer.php'); ?>