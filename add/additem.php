<?php
session_start();
if (!isset($_SESSION['login_user'])){
	header("location: ../login/index.php");
}
?>
<?php
require_once('../inc/connection.php');
if (isset($_POST['itemID']) || isset($_POST['price'])){
		$type=$_POST['type'];
		$itemID=$_POST['itemID'];
		$ItemName=$_POST['itemname'];
		$price=$_POST['price'];

		$sql="INSERT INTO items (ItemID, ItemName, price, type) VALUES ('$itemID', '$ItemName', '$price', '$type')";
		$result=mysqli_query($connection,$sql);
		if ($result) {
				 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
			} else {
				echo "<script type='text/javascript'>alert('failed!')</script>";
				$sql=mysqli_error($connection);
			}
}else{
	$sql="";
}
?>
<?php mysqli_close($connection); ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERWOOD COMPANY</title>
    <link rel="stylesheet" href="../css/navmenu.css">
    <link rel="stylesheet" href="../css/formbox.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <style>
    .box {
        background-color: #e0e0d1;
        color: black;
        font-weight: bold;
        margin: 20px auto;
        height: 270px;
        width: 600px;
    }
    </style>
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

    <div class="box">
        <h1 align="center">Add New Item Record</h1>
        <form method="post" action="additem.php">
            <label for="type">Item Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <select name="type">
                <option value="chair">Chair</option>
                <option value="Table">Table</option>
                <option value="Cupboard">Cupboard</option>
                <option value="Door">Door</option>
                <option value="window">Window</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="itemID">Item ID:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input name="itemID" type="text" /><br><br>
            <label for="itemname">Item
                Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input name="itemname" type="text" /><br><br>
            <label for="Price">Unit
                Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input name="price" type="number" min="0" /><br><br>

            <p>
                <input name="submit" type="Submit" value="Add" />
                <input name="reset" type="reset" value="Clear Form">
        </form>
    </div>
</body>

</html>