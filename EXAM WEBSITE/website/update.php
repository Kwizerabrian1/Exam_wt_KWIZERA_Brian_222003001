<head>
    <link rel="stylesheet" type="text/css" href="FORM.CSS">
</head>

<?php
$di=$_GET['id'];
$con=mysqli_connect("localhost","root","","login");
$q=mysqli_query($con,"select*from products where id=$di");

while($f=mysqli_fetch_array($q)){
?>
<head>
    <link rel="stylesheet" type="text/css" href="FORM.CSS">
</head>
<form method="post">
            <label for="username">Product Name</label><br>
            <input type="text" id="username" name="username" value="<?php echo $f['name'];?>" required><br>
            <label for="password">Price</label><br>
            <input type="text" id="password" name="password" value="<?php echo $f['price'];?>"required><br>
            <label for="username">Expired Date</label><br>
            <input type="date" id="" name="dat"value="<?php echo $f['expired_date'];?>"required><br>
            <input type="submit" value="Update" name="subo">
        </form>
    </div><center>
    <?php
}
    if(isset($_POST['subo'])){
    $a=$_POST['username'];
    $b=$_POST['password'];
    $c=$_POST['dat'];
    $con=mysqli_connect("localhost","root","","login");
    $q=mysqli_query($con,"update products set name='$a',price='$b',expired_date='$c' where id=$di");
    if($q){
        header("location:product.php");
    }
    else
    echo"failed";
    }
    ?>
    