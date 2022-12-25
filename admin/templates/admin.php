<?php
    if(!is_logged_in()){
        redirect_to('index.php');
    }
    require (__DIR__. '/../../inc/layout/header.php'); ?>
    <section class="admin-space">
        <h2> Administration of the blog </h2>
        <ul>
            <li><a href="?action=new-post"> Create new post </a></li>
            <li><a href="?action=manage-posts"> Manage Posts </a></li>
            <li><a href="?action=testing-page"> Testing Page </a></li>
            <!-- <li><a href=""> </a></li> -->
        </ul>
    </section>
<?php require (__DIR__. '/../../inc/layout/footer.php'); ?>