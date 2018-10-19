<?php
// database class created
class Database{

    const HOST = "localhost";       //database server constant values assigned 
    const USERNAME = "root";        //database server constant values assigned 
    const PASSWORD = "";            //database server constant values assigned 
    const DATABASE = "";            //database server constant values assigned 
    public $connection;

    // open the database connection when the Database object created
    public function __construct(){
        $this->openConnection();
    }

    // open the database connection 
    public function openConnection(){
        $this->connection = new mysqli(self::HOST, self::USERNAME, self::PASSWORD, '');

        if(!$this->connection){
            die("Database connection failed " . mysqli_errno());
        }else{
            echo "Database connected <br>";
        }
    }

    // close the database when calls the destruct
    public function __destruct(){
        if(mysqli_close($this->connection)){
            echo "closed";
        }
    }

    // run the mysql query
    public function executeQuery($sqlQuery){
        $this->connection->query($sqlQuery);
    }
}

$db = new Database();