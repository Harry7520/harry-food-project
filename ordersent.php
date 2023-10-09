<?php
error_reporting(1);

include("connection.php");

if($_REQUEST['log']=='out')
{
    session_destroy();
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>Food Online Service's Order-Success</title>
    <link rel="stylesheet" href="style1.css" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="hma">
<div class="wrapper">
            <div class="register-link">
                <h2>Finish Ordering</h2><br>
                <p>Thank you for shopping with us </p><br>
                <p><font color="quae"><i>Order sent successfully!</i></font></p><br>
                <p>Your order no. is <?php echo "<font size='4' color='quae'>".$_REQUEST['order_no']."</font>"; ?> </p><br>
                <p>Thank You. We want to see you next time.</p><br>
                <p><a href="?log=out">Log out</a></p> 
            </div>
        </form>
    </div>
</div>
</body>
</html>