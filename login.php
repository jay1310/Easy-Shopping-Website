<?php
require("connection.php");
if(isset($_SESSION["email"])){
    if($_SESSION["type"]=='admin')
        header("location:admin.php");
    else
        header("location:userhome.php");
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Login Page</title>
    
    <link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css">
            body{
                background: url(Images/whiteback.jpg) center;
            }
    </style>
    </head>
<body>
    <?php
        include("header.php");

    ?>
    
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Login</div>
        <div class="panel-body">
            <?php if(isset($_REQUEST["error"])){
                echo "<div class='row' style='margin:20px'>
                    ".$_REQUEST["error"]."
                </div>";
            }
            ?>
            <form action="scripts/loginScript.php" method="POST">
                <input type="email" class="form-control form-group" name="email" placeholder="Email">
                <input type="password" class="form-control form-group" name="password" placeholder="Password">
                <select name="type" class="form-control form-group">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
                <input type="submit" name="submitbtn" class=" btn btn-primary form-group form-control" value="Login">
            </form>
            
            <div class="panel-footer">
                 Don't have an account? <a class="register" href="signup.php">Register</a>
            </div>
            
        </div>
        </div>
        </div>
    </div>

    <?php
        include("footer.php");
    ?>   

    
</body>
    
</html>