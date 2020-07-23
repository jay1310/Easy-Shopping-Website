<?php

require("../connection.php");

  
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cnfpassword=$_POST["cnf-password"];
$type=$_POST["type"];

$query = "SELECT * FROM $type WHERE email='$email'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
if ($num != 0) {
    $m = "<p class='btn btn-danger'>Email id Already Exists</p>";
    header('location:../signup.php?msg='.$m);
}

else if($password!=$cnfpassword){
    $m="<p class='btn btn-danger'> Password and Confirm-Paswword must match.</p>";
    header('location:../signup.php?msg='.$m);
}
else{

    $password = mysqli_real_escape_string($con, $password);
    $password = MD5($password);

    $query = "INSERT INTO $type VALUES('" . $name . "','" . $email . "','" . $password . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $m="<p class='btn btn-success'>Successfully signed up, Please <a href='login.php'><b>Login</b></a> to continue.</p>";
    header('location:../signup.php?msg='.$m);
    
}
 
?>
