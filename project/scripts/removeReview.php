<?php
$con=mysqli_connect("localhost","root","","estore");
if(!$con)
    die("Could not connected"); 

if(!isset($_SESSION['email'])){
    header("location:../index.php");
}
if(!isset($_REQUEST['pid'])){
    header("location:../index.php");
    die();
}
$section=$_POST["section"];
$pid=$_POST["pid"];
$email=$_POST['email'];

$s="DELETE FROM `reviews` WHERE section='".$section."'AND pid='".$pid."' AND email='".$email."'";
$sql=mysqli_query($con,$s); 
if($sql)
header("location:../admin.php?action=adminReview&message=Removed+Successfully");
else
header("location:../admin.php?action=adminReview&message=Please+try+Again");


?>