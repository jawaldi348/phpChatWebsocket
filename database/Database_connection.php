<?php

//Database_connection.php

class Database_connection
{
    function connect()
    {
        $connect = new PDO("mysql:host=localhost:3308; dbname=chat", "root", "");
        return $connect;
    }
}
