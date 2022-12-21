<?php

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'new-post':
            require('new-post.php');
            die();
            break;

        case 'manage-posts':
            die();
            break;
        
        default : ?>
        
        <h2> Administration of the blog </h2>
        <ul>
            <li><a href="?action=new-post"> Create new post </a></li>
            <li><a href="?action=manage-posts"> Manage Posts </a></li>
            <li><a href=""> </a></li>
         </ul>
        <?php break;

    }
}