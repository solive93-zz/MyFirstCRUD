<?php
use PHPUnit\Framework\TestCase;
use App\Connection;
use App\CRUD;
 
final class IntegrationTest extends TestCase
{
    public function test_executeQuery_returns_false_when_query_is_wrong()
    {
        $query = "INSERT INTO `wrong table` VALUES (whatever)";

        $return = CRUD::executeQuery($query);

        $this->assertFalse($return);
    }

    public function test_executeQuery_returns_false_when_connection_is_unset()
    {
        // CRUD::connect() -> acoplado?
    }

    public function test_executeQuery_returns_array()
    {
        $query = CRUD::readAll();
        $return = CRUD::executeQuery($query);

        $this->assertIsArray($return);
    }
}