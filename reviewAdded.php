<?php
require("connection.php");
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
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
     
    </style>
    <body>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                <?php if($_REQUEST['msg']=='success')
                echo "<center><p class='btn btn-success btn-lg'>Review added successfully</p></center>";
                else echo "<center><p class='btn btn-danger btn-lg'>Review cannot be added right now, Please try again later.</p></center>";
                    ?>
                    <center><p><a href="view.php?show=men">Go back to products page</a></p></center>
                </div>
            </div>
        </div>
        <?php
            include("footer.php");
        ?>
    </body>
</html>