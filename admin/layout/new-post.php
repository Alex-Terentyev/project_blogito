<?php
$error = false;
if (isset($_POST['post-submitted'])){
    $post->title = $post->filter('title');
    $post->excerpt = $post->filter('excerpt');
    $post->content = $post->strip($_POST['content']);
    if (empty($post->title) || empty($post->content)){
        $error = true;
    }
    else{
        $post->insert();
    }
}
?>
<h3> New post</h3>
<?php if ($error){ ?>
    <div class="error-message">Fill up the title and content!</div>
<?php } ?>
<form action="" method="post" class="new-post">
    <div>
        <input placeholder="Title" class="count post-title" maxlength="255" type="text" name="title" value="<?php echo htmlspecialchars($post->title)?>">
        <span class="counter"></span> 
    </div>
    <!-- <div>
        <label for="excerpt"> Excerpt </label>
        <input class="count" maxlength="255" type="text" name="excerpt" value="<?php echo htmlspecialchars($post->excerpt) ?>">
        <span class="counter"></span>
    </div> -->
    <div>
        <!-- <label for="content"> Content </label> -->
        <textarea placeholder="Place the content here" 
        class="count post-content" maxlength="4000" name="content" 
        rows="4" cols="3" value="<?php 
        echo htmlspecialchars($post->content)?>"></textarea> 
        <span class="counter"></span>    
    </div>
    
    <input type="submit" name="post-submitted" value="Publish">
</form>