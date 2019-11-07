<?php
session_start();
if (!isset($_SESSION['login_user'])){
	header("location: login/index.php");
}
require_once('process/permissions.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERWOOD COMPANY : Pakistan's Leading Furniture</title>
    <link rel="stylesheet" href="css/navmenu.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <div id='profile'>
        <b id='welcome'>User :
            <?php echo $_SESSION['login_user']; ?></b>
        <b id='logout'><a href='login/logout.php'>Log Out</a></b></div>
    <p align="center"><img src="img/logo.png"></p>


    <?php
require_once('process/menu.php');
echo $menu;
 ?>
    <h2>You have logged in as,
        <?php echo $_SESSION['login_user'];?>
    </h2>
    <div id='cssmenu'>
        <?php echo $permissionstat; ?>
    </div>
</body>

</html>