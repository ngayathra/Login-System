<?php

//User class created
class User{
    private $name;
    private $username;
    private $password;
    private $gender;

    // assign values to the User attribute 
    public function setUserProperties($name, $username, $password, $gender){
        $this->name     = $name;
        $this->username = $username;
        $this->password = $password;
        $this->gender   = $gender;
    }

    // Add new user to the userTable
    public function addNewUser(){
        $sql = "INSERT INTO userTable (name, username, password) VALUES ('$this->name', '$this->username', '$this->password')";
        return $sql;
    }

    // Update an existing user 
    public function updateUser($userId){
        $sql = "UPDATE userTable SET name='$this->name', username = '$this->username',  password = '$this->password', gender = '$this->gender' WHERE id = '$userId'";
        return $sql;
    }

    // Delete an existing user from userTable
    public function removeUser($userId){
        $sql = "DELETE FROM userTable WHERE id = $userID";
        return $sql;
    }

    /*
    // Search users
    //  all
    //  by userID
    //  recently added
    */

    // query for search all
    public function searchAll(){
        $sql = "SELECT * FROM userTable";
        return $sql;
    }

    // query for search by id
    public function searchById($userId){
        $sql = "SELECT * FROM userTable WHERE username = '$userId'";
        return $sql;
    }

    //query for get recently added users
    public function recentUsers(){
        $sql = "SELECT * FROM userTable WHERE ############ LIMIT 4";
    }
}