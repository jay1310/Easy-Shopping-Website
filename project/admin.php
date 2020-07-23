<!Doctype html>
<?php
    require("connection.php");
    session_start();

    if(!isset($_SESSION['email']))
    {
    header("location:index.php");
    }
if($_SESSION['type']=='user'){
    header("location:userhome.php");
}
?>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" href="style.css" type="text/css">

    <style type="text/css">
        .content{
                margin-top:50px;
            }
        
    </style>
</head>
<body>

    <div class="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#after-login">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php" target="_blank"><strong>Easy Shopping</strong></a>
                </div>
                <div class="collapse navbar-collapse" id="after-login">
                    <ul class="nav navbar-nav navbar-right">                        
                        <li><a href="scripts/logoutScript.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>    
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="content-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <table class="table table-striped table-bordered">
                        <tr><td><a href="admin.php?action=adminView"> View </a></td></tr>
                        <tr><td><a href="admin.php?action=add"> Add </a></td></tr>
                        <tr><td><a href="admin.php?action=edit"> Edit </a></td></tr>
                        <tr><td><a href="admin.php?action=remove" >Remove </a></td></tr>
                        <tr><td><a href="admin.php?action=adminReview" >Reviews </a></td></tr>
                    </table>
                </div>
                <div class="col-sm-offset-1 col-sm-7">
                    <div class="row">
                        <div class="col-sm-5">
                        <?php
                        if(isset($_REQUEST["message"])){
                            echo "<h3><p height='50px' style='position:relative;left:40%;background-color:#90EE90'>".$_REQUEST["message"]."</h3></p>";
                        }
                        ?>
                        </div>
                    </div>
                    <?php
                        if(isset($_REQUEST["action"])){
                            $page=$_REQUEST["action"].".php";
                            include($page);
                        }
                        else{ ?>
                        <div class="container-fluid" id="content">
                            <div class="col-md-12">
                                <div class="jumbotron">
                                    <p> <center><img src="Images/admin.jpg" height=150px width=200px></center> </p>
                                    <h3 align="center">Welcome <?php echo $_SESSION['name']?><br><br> 
                                </div>
                            </div>
                        </div>
                     <?php }
                    ?>
                    
                </div>   
            </div>
        </div>    <!-- End of container class and content-->
    </div>
    <?php
        include("footer.php");
    ?>


</body>

</html>