<?php
class DB{
private $blog_db = false;

function __construct($db_host, $db_name, $db_username, $db_password, $db_port){
    $this->blog_db = mysqli_connect($db_host, $db_name, $db_username, $db_password, $db_port);
    
    if($this->blog_db === false){
        die($this->db_error());
    }

}

function db_error(){
    return mysqli_error($this->blog_db);
}

function query($query){
    $result = mysqli_query($this->blog_db, $query); 
    if(!$result){
            die($this->db_error() );
    }
        return $result;
    }   
}