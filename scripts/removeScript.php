<?php
$con=mysqli_connect("localhost","root","","estore");
if(!$con)
    die("Could not connected"); 

if(!isset($_SESSION['email'])){
    header("location:../index.php");
}
if(!isset($_REQUEST['id'])){
    header("location:../index.php");
    die();
}
$section=$_POST["section"];
$id=$_POST["id"];

$s="DELETE FROM $section WHERE id='".$id."'";
$sql=mysqli_query($con,$s); 
if($sql)
header("location:../admin.php?action=remove&message=Removed+Successfully");
else
header("location:../admin.php?action=remove&message=Please+try+Again");


?>