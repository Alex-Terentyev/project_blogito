<?php
if (!file_exists(__DIR__.'/config.php')){
    die('There is no config.php file');
}
session_start();

require('config.php');
require('inc/helpers.php');
require('inc/class-db.php');
require('inc/class-post.php');

$blog_db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);


if (isset($_GET['logout'])) {
    log_out();}
    
    