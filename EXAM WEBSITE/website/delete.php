<?php
$di=$_GET['id'];
$con=mysqli_connect("localhost","root","","login");
$q=mysqli_query($con,"delete from products where id=$di");
if($q){
    header("location:product.php");

}
else
echo"failed";
?>