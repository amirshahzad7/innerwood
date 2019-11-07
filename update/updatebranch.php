<?php
session_start();
if (!isset($_SESSION['login_user'])){
	header("location: ../login/index.php");
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="profile">
        <b id="welcome">User : <i><?php echo $_SESSION['login_user']; ?></i></b>
        <b id="logout"><a href="../login/logout.php">Log Out</a></b>
    </div>
    <p align="center"><img src="../img/logo.png" width='110' height='100'></p>
    <p align="Center"><u>Update Showroom Details</u></p>
    <div class='box'>
        <form method="post" action='showroom.php'>
            <lable for='Select'> Select the Showroom </lable>
            <select name='branch'>
                <option>Select Branch</option>
                <option value="1">Mandi Bahauddin</option>
                <option value="2">Malakwal</option>
                <option value="3">Islamabad</option>
                <option value="4">Lahore</option>
                <option value="4">RWP</option>
            </select>
            <p>
                <input name="submit" type="Submit" value="Update" />
        </form>
</body>

</html>