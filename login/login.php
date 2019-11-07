<?php
$error='';
if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
include_once('../inc/config.php');
// this is for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$query = mysqli_query($connection,"select * from users where password='$password' AND username='$username'");

$rows = mysqli_num_rows($query);
if ($rows == 1) {
  $userlevel=mysqli_fetch_array($query);
session_start();
$_SESSION['login_user']=$username;
$_SESSION['login_level']=$userlevel['ulevel'];
$_SESSION['user_branch']=$userlevel['showroom'];
  if ($userlevel['ulevel']==1){
    $_SESSION['sqluser']="manager";
    $_SESSION['sqlpassword']="manager";
  }else if ($userlevel['ulevel']==2) {
    $_SESSION['sqluser']="operator";
    $_SESSION['sqlpassword']="operator";
  }else {
    $_SESSION['sqluser']="stock";
    $_SESSION['sqlpassword']="stock";
  }
header("location: ../index.php"); 
} else {
$error = "Username or Password is invalid";
echo "<script type='text/javascript'>alert('Username or Password Invalied')</script>";
echo "<a href='index.php'>Try Again</a>";
}
mysqli_close($connection); // Closing Connection
}
}
?>