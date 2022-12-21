<?php

function redirect_to($path){
    header('Location:'. SITE_URL . '/' . $path);
}

function get_all_posts(){
    global $blog_db;
    return $blog_db->query("SELECT * FROM posts");
}

function generate_hash($action){
    return md5($action);
}

function check_hash($action, $hash){
    if (generate_hash($action) === $hash){
        return true;
    }
    return false;
}

function is_logged_in(){
    return isset($_SESSION['user']) ? true : false;
}

function log_in($user, $password){
    if ($user === ADMIN && $password === PASSWORD) {
        $_SESSION['user'] = ADMIN;  
        redirect_to('index.php');      
    }
    return false;
}

function log_out(){
        unset($_SESSION);
        session_destroy();
        redirect_to('index.php');
}