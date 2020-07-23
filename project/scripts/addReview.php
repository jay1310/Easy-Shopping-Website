<?php
require("../connection.php");
if(!isset($_SESSION['email'])){
    header("location:../index.php");
}
if(!isset($_REQUEST['review'])){
    header("location:../index.php");
    die();
}
$section=$_SESSION['section'];
$pid=$_SESSION['pid'];
$review=$_REQUEST['review'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];

$query="INSERT INTO `reviews`(`section`, `pid`, `name`, `email`, `review`) VALUES ('".$section."','".$pid."','".$name."','".$email."','".$review."')";
$sql=mysqli_query($con,$query);

if($sql)
    header("location:../reviewAdded.php?msg=success");
else
    header("location:../reviewAdded.php?msg=failed");
?>