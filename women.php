<?php
$con = mysqli_connect("localhost", "root", "", "estore")or die(mysqli_error($con));
if(!isset($_SESSION['email']))
{
    header("location:login.php");
}
else{
    $s="select * from women";
    $women=mysqli_query($con,$s);
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
        while($woman=mysqli_fetch_assoc($women)){
            ?>
        <div class="col-md-4 col-sm-6">
            <div class='thumbnail'>
                <img src="./Images/<?php echo $woman['image']?>" alt='women'>
                <div class='caption'>
                    <h3><?php echo $woman["name"]?></h3>
                    <p>Price:Rs. <?php echo $woman["price"]?></p>
                    <p>PId: <?php echo $woman["id"]?></p>
                    <p><a class="review btn-success" href="reviews.php?section=women&pid=<?php echo $woman['id'];?>&pname=<?php echo $woman['name'];?>&price=<?php echo $woman['price'];?>">&nbsp;Reviews&nbsp;</a></p>

                    <div class='btn btn-primary btn-block'>
                    <a href="scripts/addToCart.php?section=women&id=<?php echo$woman['id'];?>&price=<?php echo$woman['price'];?>&name=<?php echo$woman['name'];?>" >Add to cart</a></div>
                </div>
            </div>
        </div>
            <?php } ?>
        
    </div>

</body>
</html>
<?php } ?>