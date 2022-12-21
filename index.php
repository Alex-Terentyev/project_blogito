<?php require('ini.php'); ?>
<?php require('inc/layout/header.php'); ?>
<?php 
    $all_posts = get_all_posts();
    foreach($all_posts as $post){
    echo 
    
    "<div class='post'>
        <h3><a href='?post-id='".$post['post_id']. ">" . $post['title'] . "</a></h3>
        <p>" . $post['excerpt'] . " la</p>
    </div>";
    }

    //testing ++
?>
<?php require( 'inc/layout/footer.php'); ?>