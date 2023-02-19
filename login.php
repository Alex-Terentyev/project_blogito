<?php require('ini.php'); ?>
<?php 
    $error = false;
    if(isset($_POST['login-submitted'])){
        if(! check_hash('user', $_POST['hash'])){
            die('O-oh!');
        }
        if ($_POST['user'] === ADMIN && $_POST['password'] === PASSWORD){
            log_in();
        }
        else{
            $error = true;
        }
    }
?>
<?php require('inc/layout/header.php'); ?>

<h2> Login to your account</h2>
<?php if ($error): ?>
    <div class="error-message"> Mistake in login  or password. 
        Try again!
    </div>
<?php endif ?>
<form action="" method="post">
    <label for="user">Username:</label>
    <input class="login" type="text" name="user">
    <label for="password">Password:</label>
    <input class="login" type="password" name="password">
    <input type="hidden" name="hash" value="<?php echo generate_hash('user')?>">
    <input class="login" type="submit" name="login-submitted" value="Enter">
</form>
<?php require( 'inc/layout/footer.php'); ?>