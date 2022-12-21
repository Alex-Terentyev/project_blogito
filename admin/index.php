<?php require(__DIR__ . '/../ini.php'); ?>
<?php require(__DIR__ .'/../inc/layout/header.php'); ?>
<?php require ('templates/admin.php') ?>
        <h2> Administration of the blog </h2>
<?php if (isset($_GET['success'])): ?>
        <div class="success-message">Your post was successfully added!</div>
<?php endif ?>
        <ul>
            <li><a href="?action=new-post"> Create new post </a></li>
            <li><a href="?action=manage-posts"> Manage Posts </a></li>
            <li><a href=""> </a></li>
         </ul>
<?php require (__DIR__. '/../inc/layout/footer.php'); ?>