<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection = new PDO("mysql:host=localhost; dbname=library_managment", "root", "your_password_here");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        // echo "Done";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}
