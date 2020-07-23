<?php
require("connection.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

if($_SESSION['type']=='admin'){
    header("location:admin.php");
}

?>
<style>
    textarea{
        width:205px;
    }
    
    .confirm{
        background-color:green;
        height:50px;
        width:150px;
        color:white;
    }
    body{
        background: url(Images/whiteback.jpg) center;
    }

</style>
<body>
    <div class="container-fluid" id="content">
        <?php include("header.php"); ?>
            <div class="row decor_bg" style="margin-top:90px">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <?php
                        $sum = 0;
                        $query= "select * from cart where email='".$_SESSION['email']."' AND status='Added'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["price"];
                                    echo "<tr><td>" . "#" . $row["pid"] . "</td><td>" . $row["pname"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='scripts/removeFromCart.php?id=".$row['pid']."' class='btn btn-danger'> Remove</a></td></tr>";
                                }?>
                                <tr><td></td><td>Total</td><td>Rs <?php echo $sum;?> </td><td>
                                <form action="success.php" method="post">
                                    <button type='button' class='btn btn-success ' data-toggle='modal' data-target='#myModal'>Confirm Order</button>
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                            <!--Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Confirmation:</h4>
                                                </div>
                                                <div class="modal-body">
                                                
                                                        <table class="table">
                                                            <tr>
                                                                <td><b>Address</b></td>
                                                                <td><textarea rows="6" name="address" placeholder="Please enter complete address"></textarea></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Phone no.</b></td>
                                                                <td><input type="text" name="mob" placeholder="10-digit mob. no."></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>

                                                            <td><input class="confirm" type="submit" name="confirm" value="Confirm Order"></td>
                                                        </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td></tr>
                            </tbody>
                        <?php
                        } else {?>
                        <div class="container-fluid" id="content">
                            <div class="col-md-12">
                                <div class="jumbotron">
                                    <p> <center><img src="Images/empty.png" height=150px width=200px></center> </p>
                                    <h3 align="center">Your cart is empty.<br><br> 
                                    <p align="center"> <a href="view.php?show=men">Click here to purchase.</a> </p>
                                </div>
                            </div>
                        </div>
                            
                        <?php }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php
            include("footer.php");
        ?>

    </body>
</html>