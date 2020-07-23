<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "estore")or die(mysqli_error($con));
if(isset($_SESSION['name']))
$user=$_SESSION['name'];
if(!isset($_SESSION['name']))
{
    header("location:index.php");
}
if($_SESSION['type']=='admin'){
    header("location:admin.php");
}
?>
<html>
         <style type="text/css">
            .btn{
                margin-right:40px;
            }
            .show{
                margin-top:40px;
                text-align:justify;
            }
            .head{
                margin-top:50px;
            }
            .btn-toolbar{
                padding:10px;
            }
            
        </style>
        <?php
        include("header.php");

    ?>
<body>
    <div class="container">
        <div class=" head row">
        <hr color="blue">
            <div class="col-sm-12">
                <div class="form-group">
                   <center> <a class="btn btn-lg btn-danger" href="view.php?show=men">Men</a>
                    <a class="btn btn-lg btn-primary" href="view.php?show=women">Women</a>
                    <a class="btn btn-lg btn-danger" href="view.php?show=kids">Kids</a>                    
            </div>
            <hr color="blue">
        </div>

        <div class="row show">
            <div class="col-sm-12">
            <?php
                if(isset($_REQUEST["show"])){
                    $show=$_REQUEST["show"].".php";
                    include($show);
                }
                else{
                    echo "<div class='col-md-12'>
                    <div class='jumbotron'>
                        <h2 align='center'>Choose From The Above Categories.<br></h2>
                    </div>
                </div>";
                }

            ?>
            </div>
        </div>
    </div>
</body>

</html>