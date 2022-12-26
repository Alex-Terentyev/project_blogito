<?php 
$post = new post;
if (isset($_GET['delete'])){
    if (!check_hash( "delete-pid=".$_GET['pid'], $_GET['hash'])){
        die('Oh no!!!!!');
    }
    $post->delete();
}
?>
<?php require (__DIR__ . '/../../inc/layout/header.php'); ?>
<?php if (isset($_GET['success'])){ ?>
    <div class="success"> Post was added successfully </div>
<?} ?>
<table class="all-posts">
<?php 
    foreach($post->get_all_posts() as $post):  
    ?>
        
            <tr>
                <td><h3><a href="?pid=<?php echo htmlspecialchars($post['pid']) ?>"> 
                    <?php echo $post['title'] ?>
                    </a></h3>
                </td>
                <td> 
                    <a href="?action=manage-posts&delete=true&pid=<?php 
                    echo $post['pid'] ?>&hash=<?php 
                    echo generate_hash('delete-pid='.$post['pid'])?>">
                        Delete post
                    </a>
                </td>
            </tr>
        
<?php endforeach; ?>
</table>
<?php require (__DIR__ . '/../../inc/layout/footer.php'); ?>