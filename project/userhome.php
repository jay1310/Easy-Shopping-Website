<?php
require("connection.php");
?>
<html>
    <head>
        
        <style type="text/css">
            .welcome{
                position:absolute;
                top:200px;
                left:35%;
            }
            .row{
                margin:10px;
            }
           
            .msg{
                color:white;
            }
            
           
        </style> 
</head>
<body>
<?php
include("header.php");
if(!isset($_SESSION['name']))
{
    header("location:index.php");
}
if($_SESSION['type']=='admin'){
    header("location:admin.php");
}
else{?>
    <div id="banner_image">
        <center>
            <div id="banner_content">
                <div class="row">
                    <div class="col-12 btn btn-danger btn-lg active" style="color:black"><h1><em><strong><?php echo "Welcome ".$_SESSION['name'];?></strong></em></h1></div>
                </div>
                <div class="msg">
                    <div class="col-12"><h1><em><strong>Easy Shopping has a wide collection for you, feel free to explore.</strong></em></h1></div>
                </div>
                <div>
                    <a href="view.php?show=men" class="btn btn-success btn-lg active"><span class="glyphicon glyphicon-log-in"></span>
                     Click Here to Move to Products Page</a>
                </div>     
            </div>
        </center>
      </div>
<?php }             
    include("footer.php");
        ?>
</body>
</html>