
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
        <h2>Login</h2>
        <form method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="login" name="sub">
        </form>
    </div>
    <?php
    if(isset($_POST['sub'])){
    $a=$_POST['username'];
    $b=$_POST['password'];
  $con=mysqli_connect("localhost","root","","login");
    $q=mysqli_query($con,"select*from exam where username='$a' and password='$b'");
$f=mysqli_fetch_array($q);
if(is_array($f)){

$_SESSION['usrn']=$f['username'];
$_SESSION['pass']=$f['password'];


if($_SESSION['usrn']==$a and $_SESSION['pass']==$b){
    header("location:index.html");
}
else
echo "invalid username or password";

}
    }

    ?>
</body>
</html>