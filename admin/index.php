<?php require(__DIR__ . '/../ini.php'); ?>
<?php
    if(!is_logged_in()){
        redirect_to('index.php');
    }
    require (__DIR__. '/../inc/layout/header.php'); ?>
    <section class="admin-space">
        <ul class="cp">
            <li><a href="?action=new-post"> Create new post </a></li>
            <li><a href="?action=manage-posts"> Manage Posts </a></li>
            <li><a href="?action=testing-page"> Testing Page </a></li>
            <!-- <li><a href=""> </a></li> -->
        </ul>
    </section>
<?php

$action = isset($_GET['action']) ? $_GET['action'] : "";
switch ($action) {
        case 'new-post':
                require('layout/new-post.php');
                break;

        case 'manage-posts':
                require('layout/manage-posts.php');
                break;

        case 'testing-page':
                require('layout/testing-page.php');
                break;

        default:
                require('layout/manage-posts.php');
                break;
}
?>
<?php  require (__DIR__. '/../inc/layout/footer.php'); ?> 