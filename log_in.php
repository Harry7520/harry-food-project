<?php
session_start();
error_reporting(1);
$i=$_REQUEST['img'];
include("connection.php");
if(isset($_POST['log']))
{
    if($_POST['id']=="" || $_POST['pwd']=="")
    {
        $err="Fill your id and password first";
    }
    else
    {
        $d=mysql_query("select * from register where email='{$_POST['id']}' ");
        $row=mysql_fetch_object($d);
        $fid=$row->email;
        $fpass=$row->password;
        if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
        {
            $_SESSION['sid']=$_POST['id'];
            header("location:order.php?img=$i");
        }
        else
        {
            $err="This email is not register or Password is wrong!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>Food Online Service's Log In</title>
    <link rel="stylesheet" href="style1.css" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="hma">
    <div class="wrapper">
        <form action="#" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="id" id="id" placeholder="Email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="pwd" id="pwd" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn" name="log">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
        <font color="red" align="center"><h4><?php echo $err;?></h4></font>
    </div>
</div>
</body>
</html>