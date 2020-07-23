<?php
$con=mysqli_connect("localhost","root","","estore");
if(!$con)
    die("Could not connected"); 
if(!isset($_SESSION['email'])){
    header("location:../index.php");
}
if(!isset($_POST["id"])){
    header("location:../admin.php");
    die();
}
$section=$_POST["section"];
$id=$_POST["id"];
$name=$_POST["name"];
$price=$_POST["price"];
$pic=$_FILES["image"]["name"];



move_uploaded_file($_FILES["image"]["tmp_name"],"../Images/".$pic);
$s="insert into $section values ('".$id."','".$name."','".$price."','".$pic."')";
$sql=mysqli_query($con,$s); 
if($sql)
header("location:../admin.php?action=add&message=Added+Successfully");
else
echo "Could not upload";

?>