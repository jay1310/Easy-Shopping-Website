<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Signup Page</title>
    
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
            <div class="panel-heading">
                <h1>SIGN UP</h1>
            </div>
        <div class="panel-body">
            <?php if(isset($_REQUEST["msg"])){
                echo "<div class='row' style='margin:20px'>
                    ".$_REQUEST["msg"]."
                </div>";
            }
            ?>
            
            <form action="scripts/signupScript.php" method="post">
                <input type="text" class="form-control form-group" placeholder="Name" name="name">
                    
                <input type="email" class="form-control form-group" placeholder="Email" name="email">
                    
                <input type="password" class="form-control form-group" placeholder="Password" name="password">
                <input type="password" class="form-control form-group" placeholder="Confirm-Password" name="cnf-password">
                <select name="type" class="form-control form-group">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>   
                <input type="submit" class="btn btn-primary" value="Submit" name="submitbtn">
                
            </form>
        </div>
        </div>
        </div>
    </div>
    
    <?php
        include("footer.php");
    ?>
    
    </body>
    
</html>