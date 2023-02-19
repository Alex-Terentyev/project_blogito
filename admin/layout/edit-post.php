<?php 
global $post;
$post->get();

if (isset($_POST['publish'])){
    global $blog_db;
    $post->title = $_POST['title'];
    $post->excerpt = $_POST['excerpt'];
    $post->content =  $_POST['content'];
    $post->update();
}

?>
<form action="" method="post" class="new-post">
    <div>
        <!-- <label for="titile">Title</label> -->
        <input placeholder="Title" class="count post-title" maxlength="255" type="text" name="title" value="<?php echo htmlspecialchars($post->title)?>">
        <span class="counter"></span> 
    </div>
    <div>
        <!-- <label for="excerpt"> Excerpt </label> -->
        <input class="count post-title" placeholder="Excerpt" maxlength="255" type="text" name="excerpt" value="<?php echo htmlspecialchars($post->excerpt) ?>">
        <span class="counter"></span>
    </div>
    <div>
        <!-- <label for="content"> Content </label> -->
        <textarea placeholder="Place the content here" 
        class="count post-content" maxlength="4000" name="content" 
        rows="4" cols="3"><?php 
        echo htmlspecialchars($post->content)?></textarea> 
        <span class="counter"></span>    
    </div>
    
    <input type="submit" name="publish" value="Publish post">
</form>
<p>
<a class="button delete" href="?action=manage-posts&delete=true&pid=<?php 
                    echo $_GET['pid'] ?>">
                    Delete post
</a>
</p>