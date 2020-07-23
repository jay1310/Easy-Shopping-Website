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
$oldId=$_POST["oldId"];
$section=$_POST["section"];
$id=$_POST["id"];
$name=$_POST["name"];
$price=$_POST["price"];
$pic=$_FILES["image"]["name"];


move_uploaded_file($_FILES["image"]["tmp_name"],"../Images/".$pic);
$s="UPDATE $section SET `id`='$id',`name`='$name',`price`='$price',`image`='$pic' WHERE id='".$oldId."'";
$sql=mysqli_query($con,$s); 
if($sql)
header("location:../admin.php?action=adminView&message=Updated+Successfully");
else
header("location:../admin.php?action=adminView&message=Could+Not+Update");

?>