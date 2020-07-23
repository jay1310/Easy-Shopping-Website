<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "estore")or die(mysqli_error($con));
if(!isset($_SESSION['email']))
{
    header("location:index.php");
}
$section=$_REQUEST['section'];
$pid=$_REQUEST['pid'];
$pname=$_REQUEST['pname'];
$price=$_REQUEST['price'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];

$_SESSION['pid']=$pid;
$_SESSION['section']=$section;


$q1=" SELECT `image` FROM $section WHERE `id`='".$pid."' ";
$check1= mysqli_query($con,$q1);
if($check1==0){
    die("Something Went Wrong! Please try again later");
}
$num=mysqli_num_rows($check1);

?>
<html>
<?php
include("header.php");
?>
<style type="text/css">
    body{
       
    }
    .review-img{
        margin-top:20px;
    }
    a{
        text-decoration:none;
    }
    .like{
        color:blue;
        text-decoration:underline;
    }
    .add_review{
        margin-top:20px;
    }
    textarea{
        width:250px;
    }
</style>

<body>
<?php
    if($num>0){
        $img=mysqli_fetch_row($check1);
        $img_name=$img[0];
}
$query="SELECT `name`, `email`, `review` FROM `reviews` WHERE `pid`='".$pid."'";
$check=mysqli_query($con,$query);
if(!$check){
    die("Something Went Wrong! Please try again later");
}
$no_of_reviews=mysqli_num_rows($check);


?>
    <div class="main">
    <center>
    <div class="panel-group">
        <div class="panel panel-info review-img">
            <div class="panel-body">
                <img src="Images/<?php echo$img_name;?>" height=200 width=150>
                <p><b><?php echo$pname;?> </b></p>
                <p><b><?php echo"Price: ".$price;?></b></p>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="panel-group">
                    <?php
                        if($no_of_reviews==0){
                            echo "<div class='panel-body btn btn-danger btn-lg'>No Reviews For this product</div>";
                        }
                        else{
                            while($review=mysqli_fetch_assoc($check)){
                            ?>
                            
                            <div class="review col-md-3 col-sm-6">
                            <p class="name">
                                <h4><b><?php echo $review['name'] ;?> </b></h4>
                            </p>
                            <p class="email">
                                <?php echo $review['email'] ;?>
                            </p>
                            <p>
                                <textarea readonly align="justify"> <?php echo $review['review'] ;?> </textarea>
                            </p>
                            <p> <span class="like">Like</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="like" href="#">Reply</span> </p>
                            </div>

                    <?php } } ?>
                
            </div>
        </div>
        <hr color="red">
        <div class="row add_review">
        <div class="col-md-offset-3 col-md-6">
            <form action="scripts/addReview.php" method="post">
                <div class="panel-body">
                    <h2><b><u>Add a review</u></b></h2>
                    <table cellspacing="50px" class="table table-striped">
                        <tr>
                            <td><b>Name:</b></td>
                            <td><?php echo$name ?></td>
                        </tr>
                        <tr>
                            <td><b>email:</b></td>
                            <td><?php echo$email ?></td>
                        </tr>
                        <tr>
                            <td><b>Review:</b></td>
                            <td><textarea placeholder="Add a review between 0 to 500 characters." rows="10" name="review"></textarea>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Add Review" class="btn btn-primary btn-lg"></td>
                        </tr>
                        <?php if(isset($_GET['msg'])) echo"<tr>
                            <td></td>
                            <td>".$_GET['msg']." </td>
                        </tr>";?>
                    </table>
                    
                </div>
            </form>
            </div>
        </div>
    </center> 
    </div>
    <?php
            include("footer.php");
        ?>
</body>

</html>
