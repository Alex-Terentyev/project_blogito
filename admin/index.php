<?php require(__DIR__ . '/../ini.php'); ?>
<?php

$action = isset($_GET['action']) ? $_GET['action'] : "";
switch ($action) {
        case 'new-post':
                require('templates/new-post.php');
                break;

        case 'manage-posts':
                require('templates/manage-posts.php');
                break;

        case 'testing-page':
                require('templates/testing-page.php');
                break;

        default:
                require('templates/admin.php');
                break;
}

?>