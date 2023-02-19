<!DOCTYPE html>
<html>
<head>
    <title>Mi Blogito</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo SITE_URL ?>/assets/styles/styles.css">
</head>

<body>
<header>
    <h1><a href="<?php echo SITE_URL ?>/index.php"></a></h1>
    <nav class="menu">
        <ul>
            <li><a href="<?php echo SITE_URL ?>/index.php">Home</a></li>
            <?php if (!is_logged_in()): ?>
            <li><a href="<?php echo SITE_URL ?>/login.php">Login</a></li>
            <?php else: ?>
            <li><a href="<?php echo SITE_URL ?>/admin">Admin</a></li>            
            <li><a href="?logout=true">Logout</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>
<main>