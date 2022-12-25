<?php
class DB{
private $blog_db = false;

function __construct($db_host, $db_name, $db_username, $db_password, $db_port){
    $this->blog_db = mysqli_connect($db_host, $db_name, $db_username, $db_password, $db_port);
    
    if($this->blog_db === false){
        die("Internal error. Couldn't connect to Database.");
    }

}

function db_error(){
    return mysqli_error($this->blog_db);
}

function fetch($result){
        return mysqli_fetch_assoc($result);
}

function fetch_all($result){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function query($query){
    $result = mysqli_query($this->blog_db, $query); 
    if(!$result){
            die($this->db_error() );
    }
        return $result;
    }   

function filter_output($string){
    return htmlspecialchars($string);
}

function real_escape_string($string){
        return mysqli_real_escape_string($this->blog_db, $string);
}

}