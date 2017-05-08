<?php
session_start(); 
$username =$_POST['user'];
$password =$_POST['pass'];


$db = mysqli_connect("localhost","root","","jobweb");

//$qry=mysqli_query($db);
$qry = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$qry1 = mysqli_query($db,$qry);
$ftc = mysqli_fetch_array($qry1);

$user = $ftc['username'];
$pass = $ftc['password'];

$useid = $ftc[0];
$username =$ftc[1];
$password = $ftc[2];
if ($qry1) {
  echo "iko sawa";
  echo $user;
  echo $pass;
  echo "<script>window.open('conndb.php','_self')</script>";
}elseif (!$qry1) {
  echo "Check your credentials and try again....";
  die();
}

?>