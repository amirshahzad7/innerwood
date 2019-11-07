<?php
include('login.php'); 

if(isset($_SESSION['login_user'])){
header("location: ../index.php");
}
?>
<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Login</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>

<body>
    <h1 align="Center">Welcome to Interwood Company</h1>
    <br><br><br>
    <p align="center">Super Admin ----> username: admin & password: admin</p><br>
    <p align="center">Operator ----> username: operator1 & password: operator</p><br>
    <p align="center">Stock keeper ----> username: stock & password: stock</p>
    </p><br>
    <div id="container">
        <form action="login.php" method="post">
            <div class="login">LOGIN</div>
            <div class="username-text">Username:</div>
            <div class="password-text">Password:</div>
            <div class="username-field">
                <input type="text" name="username" value="" />
            </div>
            <div class="password-field">
                <input type="password" name="password" value="" />
            </div>
            <input type="submit" name="submit" value="GO" />
        </form>
    </div>
</body>

</html>