
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tutoring Services</title>
    <link rel="stylesheet" href="work.css">
</head>
<body>
    <header>
        <!-- Horizontal Navigation Bar -->
        <nav class="horizontal-nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="products.php">Our Products</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="product.php">Manage Product</a></li>
                <li><a href="logout.php">Logout</a></li>
              
            </ul>
             <!-- Search Form -->
             <form class="search-form">
                <input type="text" placeholder="Search..." name="search" class="search-input">
                <button type="submit" class="search-button">Search</button>
            </form>
        </nav>
    </header>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="FORM.CSS">
</head>
<body bgcolor="lightblue">
    <div class="container">
        <h2>Registration of New Product</h2>
        <form method="post">
            <label for="username">Product Name</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Price</label><br>
            <input type="text" id="password" name="password"required><br>
            <label for="username">Expired Date</label><br>
            <input type="date" id="" name="dat"required><br>
            <input type="submit" value="Register" name="subo">
        </form>
    </div><center>
    <?php
    if(isset($_POST['subo'])){
    $a=$_POST['username'];
    $b=$_POST['password'];
    $c=$_POST['dat'];
  $con=mysqli_connect("localhost","root","","login");
    $q=mysqli_query($con,"insert into products values('','$a','$c','$b')");
    if($q){
echo "$a  well done";

    }
    else
    echo "failed";
    }
    ?>



<table border="1">
    <tr><th>Product Name</th><th>Product Price</th><th>Product Expired Date</th><th>Actions</th></tr>

    <?php
    $con=mysqli_connect("localhost","root","","login");
    $q=mysqli_query($con,"select*from products");

    while($f=mysqli_fetch_array($q)){

        ?>
<tr>
<td><?php echo $f['name'];?></td>
<td><?php echo $f['price'];?></td>
<td><?php echo $f['expired_date'];?></td>
<td><a href="delete.php?id=<?php echo $f['id'];?>">Delete</a>
<a href="update.php?id=<?php echo $f['id'];?>">Update</a>

</td>

</tr>

        <?php
    }
    ?>
</table>