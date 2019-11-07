<?php
session_start();
if (!isset($_SESSION['login_user'])){
	header("location: ../login/index.php");
}
if (isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	include_once('../inc/connection.php');
	$query="SELECT CID,CFName,CLName,CTPno FROM customer where CFName LIKE '%$fname%' and CLName like '%$lname%'";
	$result=mysqli_query($connection,$query);

	if(mysqli_num_rows($result)>0){
		$str='';
		while($row=mysqli_fetch_assoc($result)){
			$str.="<tr><td>$row[CID]</td><td>$row[CFName]</td><td>$row[CLName]</td><td>$row[CTPno]</td></tr>";
		}
	}else{
		$query=mysqli_error($connection);
	}
}
?>
<!DOCTYPE html>
<html>

<head>

    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INTERWOOD COMPANY : Pakistan's Leading Furniture</title>
        <link rel="stylesheet" href="../css/navmenu.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <style>
        .qbox {
            background-color: #659df7;
            border: 5px solid orange;
            color: black;
            font-weight: bold;
            margin: 20px auto;
            height: 150px;
            width: 420px;
        }
        </style>
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

    </head>

<body>
    <div id="profile">
        <b id="welcome">User : <i><?php echo $_SESSION['login_user']; ?></i></b>
        <b id="logout"><a href="../login/logout.php">Log Out</a></b>
    </div>
    <p align="center"><img src="../img/logo.png"></p>
    <?php
	require_once('../process/menu.php');
	echo $menu;
?>
    <p align="Center"><u>Enter Customer Details</u></p>
    <form method="post" action="allcustomer.php">
        <p align="Center">
            <lable for="fname">First Name: </lable>
            <input name="fname" type="text" /></br></br>
            <lable for="lname">Last Name: </lable>
            <input name="lname" type="text" />
            <br></br>
            <input name="submit" type="Submit" Value="Search">
        </p>
</body>

</html>
<?php
if (isset($_POST['fname']) || isset($_POST['lname'])){
	
echo "<p align='center'>";
echo "<table border='2'>";
echo "<tr><th>Customer ID</th><th>First Name</th><th>Lastname</th><th>TP No</th></tr>";
if(isset($str)) {echo $str;}
echo"</table></p>";
}
?>