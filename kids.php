<?php
$con = mysqli_connect("localhost", "root", "", "estore")or die(mysqli_error($con));
if(!isset($_SESSION['email']))
{
    header("location:login.php");
}
else{
    $s="select * from kids";
    $kids=mysqli_query($con,$s);
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">

    <style type="text/css">
        .review{
        color:black;
        }
    </style>
</head>
<body>

    <div class="row text-center">
    
        <?php
        while($kid=mysqli_fetch_assoc($kids)){
            ?>
        <div class="col-md-4 col-sm-6">
            <div class='thumbnail'>
                <img src="./Images/<?php echo $kid['image']?>" alt='kids'>
                <div class='caption'>
                    <h3><?php echo $kid["name"]?></h3>
                    <p>Price:Rs. <?php echo $kid["price"]?></p>
                    <p>PId: <?php echo $kid["id"]?></p>
                    <p><a class="review btn-success" href="reviews.php?section=kids&pid=<?php echo $kid['id'];?>&pname=<?php echo $kid['name'];?>&price=<?php echo $kid['price'];?>">&nbsp;Reviews&nbsp;</a></p>

                    <div class='btn btn-primary btn-block'>
                    <a href="scripts/addToCart.php?section=kids&id=<?php echo$kid['id'];?>&price=<?php echo$kid['price'];?>&name=<?php echo$kid['name'];?>" >Add to cart</a></div>
                </div>
            </div>
        </div>
            <?php } ?>
        
    </div>

</body>
</html>
<?php } ?>
