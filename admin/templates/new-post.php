<?php
$new_post = new Post;
$error = false;

if (isset($_POST['post-submitted'])){
    global $blog_db;
    $new_post->title = $_POST['title'];
    $new_post->excerpt = $_POST['excerpt'];
    $new_post->content = $_POST['content'];
    $new_post->published_on = date('Y-m-d H:i:s');

    $query = "INSERT INTO posts (`title`, `excerpt`, `content`, `published_on`) 
    VALUES ('$new_post->title', '$new_post->excerpt', '$new_post->content', '$new_post->published_on')";
    
    if ($new_post->title === "" || $new_post->content ===""){
        $error = true;
    }
    else{
        $blog_db->query($query);
        redirect_to('admin/index.php?success=true');
    }
}

?>

<?php if ($error){ ?>
    <div class="error-message">Fill up the title and content!</div>
<?php } ?>
<form action="" method="post" class="new-post">
    <div>
        <label for="title"> Title </label>
        <input type="text" name="title" value="<?php echo $new_post->title ?>">
    </div>
    <div>
        <label for="excerpt"> Excerpt </label>
        <input type="text" name="excerpt" value="<?php echo $new_post->excerpt ?>">
    </div>
    <div>
        <label for="content"> Content </label>
        <textarea name="content" rows="4" cols="3" value="<?php echo $new_post->content ?>"></textarea>
    </div>
    
    <input type="submit" name="post-submitted" value="Send">
</form>

<?php require (__DIR__. '/../../inc/layout/footer.php'); ?>