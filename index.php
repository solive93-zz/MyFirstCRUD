<?php 

require('includes\header.php'); 
use App\CRUD;


    $query = CRUD::readCategories();
    $categories = CRUD::executeQuery($query);
    
?>

<main>
    <div class="container">

    <!-- Filter -->
    <div class="alert alert-light" role="alert">
        <h5 class="alert-heading">Advanced search</h5>
        <hr>
        <form action="index.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="name">Select a category</label>
                    <select id="category" name="categories" class="form-control">
                                <option selected>All categories</option>
                            <?php foreach($categories as $category)
                            {
                            ?>
                                <option><?php echo $category['name']?></option>
                            <?php    
                            }
                            ?> 
                    </select>
                </div>
                <div class="form-group col-md-1">
                    <label class="text-white">..........</label>
                    <button class="btn btn-info relative-bottom" name="search"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <hr>
    </div>

    <!-- Game cards -->
    <div class="row row-cols-1 row-cols-md-3">
        
        <!-- Check if category is selected -->                   
        <?php
            if(isset($_POST['search']))
            {
                $category = $_POST['categories'];
        
                $query = CRUD::readByCategory($category);
                $videogames = CRUD::executeQuery($query);  
                
                foreach ($videogames as $videogame);
                #TO DO // print by category
            }  
           
            foreach($games as $game) 
            {
            ?> 
                <div class="col mb-4">
                    <div class="card">
                    
                    <img src="<?php echo $game['image'];?>" class="card-img-top" alt="game image">
                    <h5><span class="badge badge-pill badge-warning"><?php echo $game['price']." €";?></span></h5>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $game['name']; ?></h5>
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo $game['category']; ?>
                        </div>       
                    </div>
                </diV>
            <?php   
            } 
            ?>
            
        </div>
    <div>
</main>

<?php require('includes\footer.php'); ?>