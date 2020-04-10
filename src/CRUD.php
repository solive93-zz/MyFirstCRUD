<?php
namespace App;
use App\Connection;

class CRUD extends Connection
{   
    public function executeQuery(string $query)
    {   
        CRUD::connect();
        $response = mysqli_query(self::$connection, $query); 

        if($response == false)
        {
            return false;
        }
        
        $videogames = [];
        while ($game = mysqli_fetch_assoc($response))
        {
            array_push($videogames, $game);
        }
        return $videogames;  
    }
    
    //CREATE
    public static function create(string $name, string $category, float $price, string $imagePath) :string
    {   
        $query = "INSERT INTO videogames (`name`, category, price, `image`) VALUES ('$name', '$category', '$price', '$imagePath')";

        return $query;
    }

    //READ
    public static function readAll() :string
    {
        $query = "SELECT * FROM videogames";
        
        return $query;
    }

    public static function readById(int $id) :string
    {
        $query = "SELECT * FROM videogames WHERE id='$id'";
        
        return $query;
    }

    
    public static function readByCategory(string $category) :string
    {   
        $query = "SELECT * FROM videogames WHERE category = '$category'";
    
        return $query;  
    }
    
    public static function readCategories() :string
    {
        $query = "SELECT * FROM categories";

        return $query;
    }

    /*
    public static function readByCategory(string $category)
    {
        $query = "SELECT videgames.id, videgames.name, categories.name, categories.id
                FROM videogames 
                JOIN game_category ON videogames.id = game-category.id_game 
                JOIN categories ON caegories.id = game.categoryc.id_category
                WHERE c.name = '$category'";
        
        return $query;
    }   
    */

    //UPDATE
    public static function update(int $id, string $name, string $category, float $price, string $imagePath) :string
    {
        $query = "UPDATE videogames SET `name`='$name' category='$category' price='$price' `image`='$imagePath' WHERE id='$id'";
        
        return $query;
    }

    public static function updateCategory(int $id, string $newCategory) :string
    {
        $query = " UPDATE videogames SET category='$newCategory' WHERE id = '$id' ";
        
        return $query;
    }

    public static function updatePrice (int $id, float $newPrice) :string
    { 
        $query = " UPDATE videogames SET price='$newPrice' WHERE id ='$id' ";
        
        return $query;
    }

    //DELETE
    public static function deleteGame (int $id):string
    { 
        $query = " DELETE FROM videogames WHERE id ='$id' ";
       
        return $query;
    }
}