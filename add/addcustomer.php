<?php
session_start();
if (!isset($_SESSION['login_user'])){
	header("location: ../login/index.php");
}

?>
<?php
require_once('../inc/connection.php');
if (isset($_POST['fname']) || isset($_POST['lname'])){
		//$cid=$_POST['CID'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$address1=$_POST['Address1'];
		$address2=$_POST['Address2'];
		$address3=$_POST['Address3'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$branch=$_SESSION['user_branch'];

		$sql="INSERT INTO customer (CFName, CLName, CEmail, CAddress1, CAddress2, CAddress3, BranchID, CTPno) VALUES ('$fname', '$lname', '$email', '$address1', '$address2', '$address3', '$branch','$phone')";
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
mysqli_close($connection);
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERWOOD COMPANY</title>
    <link rel="stylesheet" href="../css/navmenu.css">
    <link rel="stylesheet" href="../css/formbox.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="profile">
        <b id="welcome">User : <i><?php echo $_SESSION['login_user']; ?></i></b>
        <b id="logout"><a href="login/logout.php">Log Out</a></b>
    </div>
    <p align="center"><img src="../img/logo.png"></p>
    <?php
require_once('../process/menu.php');
echo $menu;
 ?>

    <div class="box">
        <h1 align="center">Add New Customer Record</h1>
        <form method="POST" action="addcustomer.php">
            <label for="fname">First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input name="fname" type="text" /><br><br>
            <label for="lname">Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input name="lname" type="text" /><br><br>
            <label for="AddressL1">Address line 01:&nbsp;</label>
            <input name="Address1" type="text" /><br><br>
            <label for="AddressL2">Address line 02:&nbsp;</label>
            <input name="Address2" type="text" /><br><br>
            <label for="AddressL3">Address line 03:&nbsp;</label>
            <input name="Address3" type="text" /><br><br>
            <label for="Email">Email:</label>
            <input name="email" type="Email" />
            <label for="Phone">Phone Number:&nbsp;</label>
            <input name="phone" type="text" size="10" pattern="[0-9]{10}" /><br><br>
            <p>
                <input name="submit" type="Submit" value="Add" />
                <input name="reset" type="reset" value="Clear Form">
        </form>
    </div>
</body>

</html>