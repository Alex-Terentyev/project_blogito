<?php
// $new_post = new Post;
$error = false;

$np = new post;
if (isset($_POST['post-submitted'])){
    $np->title = $np->filter('title');
    $np->excerpt = $np->filter('excerpt');
    $np->content = $np->strip($_POST['content']);
    if (empty($np->title) || empty($np->content ==="")){
        $error = true;
    }
    else{
        $np->insert();
    }
}
?>
<?php require (__DIR__. '/../../inc/layout/header.php'); ?>

<?php if ($error){ ?>
    <div class="error-message">Fill up the title and content!</div>
<?php } ?>
<form action="" method="post" class="new-post">
    <div>
        <label for="title"> Title </label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($np->title)?>">
    </div>
    <div>
        <label for="excerpt"> Excerpt </label>
        <input type="text" name="excerpt" value="<?php echo htmlspecialchars($np->excerpt) ?>">
    </div>
    <div>
        <label for="content"> Content </label>
        <textarea name="content" rows="4" cols="3" value="<?php echo htmlspecialchars($np->content)?>"></textarea>
    </div>
    
    <input type="submit" name="post-submitted" value="Send">
</form>

<?php require (__DIR__. '/../../inc/layout/footer.php'); ?>