<?php require 'cont.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>
<?php
session_start();
$usname=$_POST['username'];
$passw=$_POST['pass'];

$sql="SELECT username, password FROM login WHERE username='$usname' AND password='$passw' ";

$result = mysqli_query($con,$sql);

if (!$row=mysqli_fetch_assoc($result))
{
 echo "<center><h1>-<ooops</h1></center>";
 echo "center><h2> the Username or password error </center>";
 echo '<h4><a href="index.php"> Retype user name or password</a><h4>';
}
else
{
    $_SESSION[login]=good;
    echo "h1>welcome {$row['usrname']}</h1><br>";
    echo '<h4><a href="index.php">Back to main page </a><h4>';
    echo "<h2><a href='logout.php'> sing out</a></h2>";
    //linking the current page to logoout.php page.
}
mysqli_close($con);
?>

</body>
</html>