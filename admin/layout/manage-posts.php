<?php 
global $post;
if (isset($_GET['delete'])):   $post->delete(); ?>
    <div class="success">
        The post was deleted
    </div>
<?php endif; ?>

<?php if (isset($_GET['success'])): ?>
    <div class="success-message"> Post was published successfully </div>
<? endif; ?>

<section class="all-posts">
<?php if (isset($_GET['edit'])): 
    require('edit-post.php');
    else:
    foreach($post->get_all() as $post):  
        ?>
        <article class="post">
            <h3>
                <a href="?action=manage-posts&edit&pid=<?php 
                            echo $post['pid'] ?>&hash=<?php 
                            echo generate_hash('edit-pid='.$post['pid'])?>">
                                <?php echo $post['title'] ?>
                </a>
            </h3>
        </article>
        <?php endforeach; endif;?>
    </section>