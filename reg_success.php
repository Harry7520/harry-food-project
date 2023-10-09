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
    <title>Food Online Service's Register-Success</title>
    <link rel="stylesheet" href="style1.css" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="hma">
<div class="wrapper">
<div class="register-link">
                <p>Welcome!! <?php echo "<font color='blue'>".$_REQUEST['name']."</font>"; ?> </p><br>
                <p>You have created your account successfully!!!</p>
                <p>Thank you for registration.</p><br>
                <p><a href="?log=out">Go Back</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>