<?php

require("../connection.php");

$email = $_POST['email'];
$password = $_POST['password'];
$type=$_POST["type"];

$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

$query = "SELECT `email`,`name` FROM $type WHERE email='".$email."' AND password='".$password."'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$n = mysqli_num_rows($result);

if ($n == 0) {
  $error = "<p class='btn btn-danger'>Please enter correct E-mail id and Password</p>";
  header('location:../login.php?error='.$error);
} else {  
  
  $row = mysqli_fetch_assoc($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['type'] = $type;
  if($type=='user')
    header('location:../userhome.php');
  if($type=='admin')
    header('location:../admin.php');
}

?>
