<?php
if(!isset($_SESSION['email']))
{
header("location:index.php");
}
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
           
        </style>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <form action="scripts/editScript.php" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr><th colspan=2><center><h2><b>Edit Product</b></h2></center></th></tr>
                        <tr><th><h4><b>
                                Section: 
                            </b></h4></th>
                            <td><h4><b><select name="section">
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                                <option value="Kids">Kids</option>
                                </select>
                                </b></h4>
                            </td>
                        </tr>
                        <tr><td><b> Old PId</b>:</td> <td><b><input type="text" name="oldId"></b></td></tr>
                        <tr><td><b><h3>New Details:</h3></b></td></tr>
                        <tr><td><b>PId</b>:</td><td> <input type="text" name="id"></td></tr>
                        <tr><td><b>PName</b>:</td><td> <input type="text" name="name"></td></tr>
                        <tr><td><b>Price</b>:</td><td> <input type="text" name="price"></td></tr>
                        <tr><td><b>Image</b>:</td><td> <input type="file" name="image"></td></tr>
                        <tr><td><input class="btn btn-lg btn-primary" type="submit" value="Edit"></td></tr>
                    </table>

                </form>
            </div>
            
        </div>
    </div>
</body>

</html>