<?php
require("../connection.php");
if(!isset($_SESSION['email'])){
    header("location:../index.php");
}
if(!isset($_REQUEST['id'])){
    header("location:../index.php");
    die();
}
$pid=$_REQUEST['id'];
$email=$_SESSION['email'];

$query="DELETE FROM `cart` WHERE pid='".$pid."' AND email='".$email."'";
$sql=mysqli_query($con,$query); 
if($sql)
    header("location:../cart.php");
else
    die("Failed, Please try again");
?>