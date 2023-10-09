<!DOCTYPE html>
<html lang="en">
<body>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>Food Online Service's Register</title>
    <link rel="stylesheet" href="style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


    <div class="hma">
    <div class="wrapper">

    <?php
	error_reporting(1);
	
	include("connection.php");
	
        $name=$_REQUEST['t1'];
        $email=$_REQUEST['t2'];
        $password=$_REQUEST['t3'];
        $phone=$_REQUEST['t4'];
        $city=$_REQUEST['t5'];
        $town=$_REQUEST['t6'];
	if(isset($_REQUEST['sub']))
	{
		$sql=mysql_query("SELECT * FROM register WHERE email='$email' ");
		$arr=mysql_fetch_array($sql);
		if($arr['email']!=$email)
		{
			if(mysql_query("INSERT INTO register(name,email,password,phone,city,township) VALUES('$name','$email','$password','$phone','$city','$town')"))
			{
	      		echo "<script>location.href='reg_success.php?email=$email'</script>";
			}
		}
		else 
		{
			$error= "user already exists";
		}
	}
?>

<form  method="post">
    <h1>Register</h1>
                <div class="input-box">
                <input type="text" name="t1" id="t1" class="input_field" placeholder="Name" required/>
</div>
<div class="input-box">
                <input type="email" name="t2" id="t2" class="input_field" placeholder="Email" required/>
</div>
<div class="input-box">
                <input type="password" name="t3" id="t3" class="input_field" placeholder="Password" required/>
</div>
<div class="input-box">
                <input type="text" name="t4" id="t4" class="input_field" placeholder="Phone" required/>
</div>
<div class="input-box">
                <input type="text" name="t5" id="t5" class="input_field" placeholder="City" required/>
</div>
<div class="input-box">
                <input type="text" name="t6" id="t6" class="input_field" placeholder="Country" required/>
</div>
                <input type="submit" name="sub" id="sub" class="btn" value="Register"/><br><br>
                <div class="register-link">
                <p><a href="index.php">Don't want register</a></p>
            </div>
				<label><?php echo "<font color='red' align='center'><h2>$error</h2></font>";?></label>
            </form>
    </div>
</div>
</body>
</html>