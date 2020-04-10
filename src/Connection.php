<?php
namespace App;

class Connection
{   
    protected static $connection;
    protected static $table ="videogames";
    private static $server = "localhost";
    private static $user = "root";
    private static $password = "";
    private static $db = "tienda";

    public function connect()
    {
        if(!self::$connection)
        {
            self::$connection = mysqli_connect(self::$server, self::$user, self::$password, self::$db);
        }
        return self::$connection;
    } 
}

