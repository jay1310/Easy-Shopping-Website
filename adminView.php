<?php

$user=$_SESSION["name"];

?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    
        <style type="text/css">
            #head{
                text-align:center;
            }
            td{
                width:150px;
                padding:5px;
            }
            .show{
                margin-top:40px;
                text-align:justify;
            }
        </style>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <form action="scripts/viewScript.php" method="post">
                <table>
                    <tr><td><a class="btn btn-lg btn-primary" href="admin.php?action=adminView&show=men">Men</a></td>
                    <td><a class="btn btn-lg btn-primary" href="admin.php?action=adminView&show=women"">Women</a></td>
                    <td><a class="btn btn-lg btn-primary" href="admin.php?action=adminView&show=kids">Kids</a></td></tr>
                </table>
            </form>
            </div>
        </div>
        <div class="row show">
            <div class="col-sm-6">
            <?php
                if(isset($_REQUEST["show"])){
                    $show=$_REQUEST["show"].".php";
                    include($show);
                }
                else{
                    echo "<div class='row'><div class='jumbotron col-sm-offset-1 col-sm-6'><b>Choose a Category</b></div></div>";
                }

            ?>
            </div>
        </div>
    </div>
 
</body>

</html>