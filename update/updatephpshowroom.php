<?php
Session_start();
//resive Variables and assign
$Showroom=$_POST['showroomid'];
$District=$_POST['District'];
$Address1=$_POST['AddressL1'];
$Address2=$_POST['AddressL2'];
$Address3=$_POST['AddressL3'];
$TP=$_POST['TPNo'];
//Establish the Connection to the database
require_once('../inc/connection.php');
$query="UPDATE showrooms SET District='$District', Address1='$Address1', Address2='$Address2', Address3='$Address3', PhoneNo='$TP' WHERE BranchID='$Showroom'";
$result=mysqli_query($connection,$query);
if ($result){
  echo "<script type='text/javascript'>alert('Updated successfully!')</script>";
}else{
  echo "<script type='text/javascript'>alert('Something Went Wrong!')</script>";
  $query=mysqli_error($connection);
}
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formbox.css">
</head>

<body>
    <p align="center">
    </p>
</body>

</html>