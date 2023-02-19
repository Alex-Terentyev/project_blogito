<?php

function redirect_to($path){
    header('Location:'. SITE_URL . '/' . $path);
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
    return isset($_SESSION['user']) 
    && $_SESSION['user'] === ADMIN ? true : false;
}

function log_in(){
        $_SESSION['user'] = ADMIN;  
        redirect_to('index.php');  
        return true;    
}

function log_out(){
        unset($_SESSION);
        session_destroy();
        redirect_to('index.php');
}