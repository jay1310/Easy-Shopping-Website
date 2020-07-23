<?php
$con = mysqli_connect("localhost", "root", "", "estore")or die(mysqli_error($con));
if(!isset($_SESSION['email']))
{
    header("location:login.php");
}
else{
    $s="select * from men";
    $men=mysqli_query($con,$s);
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
        while($man=mysqli_fetch_assoc($men)){
            ?>
        <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
                <img src="./Images/<?php echo $man['image']?>" alt='men'>
                <div class="caption">
                    <h3><?php echo $man["name"]?></h3>
                    <p>Price:Rs. <?php echo $man["price"]?></p>
                    <p>PId: <?php echo $man["id"]?></p>
                    <p><a class="review btn-success" href="reviews.php?section=men&pid=<?php echo $man['id'];?>&pname=<?php echo $man['name'];?>&price=<?php echo $man['price'];?>">&nbsp;Reviews&nbsp;</a></p>
                    <div class='btn btn-primary btn-block'>
                    <a href="scripts/addToCart.php?section=men&id=<?php echo $man['id'];?>&price=<?php echo $man['price'];?>&name=<?php echo $man['name'];?>" >Add to cart</a></div>
                </div>
            </div>
        </div>
            <?php } ?>
        
    </div>

</body>
</html>
        <?php } ?>
