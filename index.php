<?php
require("connection.php");
if(isset($_SESSION['email'])){
    if($_SESSION["type"]=='admin')
        header("location:admin.php");
    else
        header("location:userhome.php");
}
    include("header.php");
?>
<html>
<head>
    <title>E-Stores</title>
    
    <link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css">
        row{
            float:left;
        }

    </style>

    </head>
<body>
    
  <div id="banner_image">
    <center>
        <div class="container">
            <div id="banner_content">
                <div class="row">
                    <div class="col-12"><h1><em><strong>Welcome To Easy Shopping</strong></em></h1></div>
                </div>
                <div class="row">
                    <a href="login.php" class="btn btn-primary btn-lg active"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="signup.php" class="btn btn-danger btn-lg active"><span class="glyphicon glyphicon-user"></span> SIGN-UP</a>
                </div>     
            </div>
      </div>
    </center>
    </div> 
    
        <?php
            include("footer.php");
        ?>
    
</body>


</html>