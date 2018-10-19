<?php

class Database{

    const HOST = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DATABASE = "";

    public function openConnection(){
        $connection = new mysqli(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE);

        if(!$connection){
            die("Database connection failed " . mysqli_errno());
        }else{
            echo "Database connected";
        }
    }
}

$db = new Database();
$db->openConnection();
