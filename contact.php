<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>Food Online Service's Contact</title>
    <link rel="stylesheet" href="style2.css" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="hma">
    <div class="wrapper">
    <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$phone=$_POST['t3'];
$mesg=$_POST['t4'];
if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
{$er="<font color='red'align='center'><h4>Message sent successfully</h4></font>"; }
}

?>
        <form action="#" method="post">
            <h1>Contact</h1>
            <div class="input-box">
                <input type="text" name="t1" id="t1" placeholder="Name" required>
            </div>
            <div class="input-box">
                <input type="email" name="t2" id="t2" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="text" name="t3" id="t3" placeholder="phone" required>
            </div>
            <div class="input-box">
                <input type="textarea" name="t4" id="t4" placeholder="Message" required>
            </div>
            <input type="submit" name="sub"  id="sub" value="Send" class="btn" />
            <div class="register-link">
                <P><a href="index.php">Home</a></a>
            </div>
        </form>
        <h2><?php echo $er;?></h2>
    </div>
</div>
</body>
</html>