<?php
require("../connection.php");
if(!isset($_SESSION['email'])){
    header("location:../index.php");
}
if(!isset($_REQUEST['id'])){
    header("location:../index.php");
    die();
}
$section=$_REQUEST['section'];
$pid=$_REQUEST['id'];
$price=$_REQUEST['price'];
$pname=$_REQUEST['name'];
$email=$_SESSION['email'];

$query="INSERT INTO `cart`(`section`, `email`, `pid`, `pname`, `price`,`status`) VALUES ('".$section."','".$email."','".$pid."','".$pname."','".$price."','Added')";
$sql=mysqli_query($con,$query); 
if($sql)
    header("location:../cart.php");
else
    die("Failed, Please try again");
?>