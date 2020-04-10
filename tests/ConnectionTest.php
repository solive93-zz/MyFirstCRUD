<?php
use PHPUnit\Framework\TestCase;
use App\Connection;

 final class ConnectionTest extends TestCase
{   
    public function test_returns_an_object()
    {
        $connection = Connection::connect();

        $this->assertIsObject($connection);
    }
}