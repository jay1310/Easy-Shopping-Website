<?php
require("connection.php");
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}

if($_SESSION['type']=='admin'){
    header("location:admin.php");
}
if($_POST["address"]==NULL){
    header('location:cart.php');
    die;
}
$email = $_SESSION['email'];

$query = "UPDATE cart SET status='Confirmed' WHERE email='".$email."' AND status='Added'";
mysqli_query($con, $query) or die($mysqli_error($con));

$address=$_POST["address"];
$mob=$_POST["mob"];

?>

<html>
    <?php
    include("header.php");
    ?>
    <style>
        #content{
            margin-top:100px;
            color:rgb(4, 58, 2);
        }
        a{
            text-decoration:none;
        }
    </style>
    <body>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <p> <center><img src="Images/order.png" height=150px width=200px></center> </p>
                      <h3 align="center">Your order is confirmed.<br><br> It will be delivered to<br>
                      <p><?php echo $address;?> within 2 to 3 working days.</p> Thank you for shopping with us.</h3><hr>
                    <center><a href="view.php?show=men"><p class="btn btn-primary">Click here to purchase any other item.</a></p></center>
                </div>
            </div>
        </div>
        <?php
            include("footer.php");
        ?>
    </body>
</html>