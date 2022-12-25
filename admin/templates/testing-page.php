<?php require('../inc/layout/header.php'); ?>
<?php

$test_db = new mysqli(
            DB_HOST, 
            DB_USER, 
            DB_PASSWORD, 
            DB_NAME, 
            DB_PORT);


$test_all_posts = $test_db->query("SELECT * FROM posts");
            
$test_all_posts = $test_all_posts->fetch_all(MYSQLI_ASSOC);
var_dump($test_all_posts);


foreach ($test_all_posts as $post){
    var_dump($post);
}



?>
<?php require('../inc/layout/footer.php'); ?>