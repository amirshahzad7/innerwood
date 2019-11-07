<?php
session_start();
if (!isset($_SESSION['login_user'])){
	header("location: ../login/index.php");
}
include_once('../inc/connection.php');
$query="SELECT * FROM factory_view_orders";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
	$str='';
	while($row=mysqli_fetch_assoc($result)){
		$str.="<tr><td>$row[OrderID]</td><td>$row[ItemID]</td><td>$row[ItemName]</td><td>$row[CAddress1]</td><td>$row[CAddress2]</td><td>$row[CAddress3]</td><td>$row[DeliverDate]</td></tr>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INTERWOOD COMPANY</title>
    <link rel="stylesheet" href="../css/navmenu.css">
    <link rel="stylesheet" href="../css/formbox.css">
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
    <h1 align="center">Pending For Production</h1>


    <table caption='All available Items' border='2' align='center' style="width:800px">
        <tr>
            <th>Order ID</th>
            <th>Item ID</th>
            <th> Item Name</th>
            <th> Address L1</th>
            <th> Address L2 </th>
            <th> Address L3 </th>
            <th> Deliver Date </th>
        </tr>
        <?php if(isset($str)) {echo $str;} ?>
    </table>

    </div>
</body>

</html>