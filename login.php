<?php require('ini.php'); ?>
<?php 
    if(isset($_POST['login-submitted'])){
        if(! check_hash('user', $_POST['hash'])){
            die('O-oh!');
        }
    log_in($_POST['user'], $_POST['password']);
    }
?>
<?php require('inc/layout/header.php'); ?>

<h2> Login </h2>
<form action="" method="post">
    <label for="user">Username:</label>
    <input type="text" name="user">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <input type="hidden" name="hash" value="<?php echo generate_hash('user')?>">
    <input type="submit" name="login-submitted">
</form>
<?php require( 'inc/layout/footer.php'); ?>