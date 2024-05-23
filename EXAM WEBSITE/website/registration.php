
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="FORM.CSS">
</head>
<body bgcolor="lightblue">
    <div class="container">
        <h2>Registration form</h2>
        <form method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Register" name="subo">
        </form>
    </div><center>
    <?php
    if(isset($_POST['subo'])){
    $a=$_POST['username'];
    $b=$_POST['password'];
  $con=mysqli_connect("localhost","root","","login");
    $q=mysqli_query($con,"insert into exam values('$a','$b')");
    if($q){
echo "$a Registered well done";

    }
    else
    echo "failed";
    }
    ?>