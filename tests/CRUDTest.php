<?php
use PHPUnit\Framework\TestCase;
use App\Connection;
use App\CRUD;
 
final class CRUDTest extends TestCase
{   
    //CREATE TEST
    public function test_that_create_query_is_correct()
    {   
        $name='Mario';
        $category= 'Platform';
        $price=10.99;
        $imagePath='img\img.jpg';
        
        $generatedQuery = CRUD::create($name, $category, $price, $imagePath);
        $correctQuery = "INSERT INTO videogames (`name`, category, price, `image`) VALUES ('Mario', 'Platform', '10.99', 'img\img.jpg')";
        
        $this->assertSame($generatedQuery, $correctQuery);
    } 

    //READ TEST
    public function test_if_readAll_query_is_correct()
    {   
        $generatedQuery = CRUD::readAll();
        $correctQuery = "SELECT * FROM videogames";
               
        $this->assertSame($generatedQuery, $correctQuery);
    } 

    public function test_if_readById_query_is_correct()
    {   
        $generatedQuery = CRUD::readById(12);
        $correctQuery = "SELECT * FROM videogames WHERE id='12'";
               
        $this->assertSame($generatedQuery, $correctQuery);
    }

    public function test_if_readByCategory_query_is_correct()
    {   
        $category='sports';

        $generatedQuery = CRUD::readByCategory($category);
        $correctQuery = "SELECT * FROM videogames WHERE category = 'sports'";
               
        $this->assertSame($generatedQuery, $correctQuery);
    }

    public function test_if_readCategories_query_is_correct()
    {
        $generatedQuery = CRUD::readCategories();
        $correctQuery = "SELECT * FROM categories";

        $this->assertSame($generatedQuery, $correctQuery);
    }


    //UPDATE
    public function test_if_update_query_is_correct()
    {
        $generatedQuery = CRUD::update(12, 'Minecraft', 'building', 12.99, 'img\img.jpg');
        $correctQuery = "UPDATE videogames SET `name`='Minecraft' category='building' price='12.99' `image`='img\img.jpg' WHERE id='12'";
        
        $this->assertSame($generatedQuery, $correctQuery);
    }
    public function test_if_updateCategory_query_is_correct()
    {   
        $generatedQuery = CRUD::updateCategory(10, 'RPG');
        $correctQuery = " UPDATE videogames SET category='RPG' WHERE id = '10' ";
        
        $this->assertSame($generatedQuery, $correctQuery);
    }

    public function test_if_updatePrice_query_is_correct()
    {   
        $id = 12;
        $newPrice = 9.99;
        
        $generatedQuery = CRUD::updatePrice($id, $newPrice);
        $correctQuery = " UPDATE videogames SET price='9.99' WHERE id ='12' ";
        
        $this->assertSame($generatedQuery, $correctQuery);
    }

    //DELETE
    public function test_if_it_deletes_a_game()
    {
        $id= 55;

        $generatedQuery = CRUD::deleteGame($id);
        $correctQuery = " DELETE FROM videogames WHERE id ='55' ";  

        $this->assertSame($generatedQuery, $correctQuery);

    }
}
