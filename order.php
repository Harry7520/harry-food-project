<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$add=$_POST['add'];
$ordno=ord.rand(100,500);
if(mysql_query("insert into orders(productno,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>Food Online Service's Order</title>
    <link rel="stylesheet" href="style1.css" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php
			include("connection.php");
			$sel=mysql_query("select * from item  where img='$i' ");
			$mat=mysql_fetch_array($sel);

            
			?>
<div class="hma">
<div class="wrapper">
            <form  method="post">
				<h1>Order</h1>
                <div class="register-link">
                    <h3>Menu</h3>
</div>
<div class="input-box">
                <input type="text" name="prodno" id="prodno" value="<?php echo $mat['prod_no'];?>" class="input_field" readonly/>
</div>
                <div class="register-link">
                    <h3>Price</h3>
</div>
<div class="input-box">
                <input type="text" name="price" id="price" value="<?php echo $mat['price'];?>" class="input_field"readonly/>
</div>
				 <div class="register-link">
                    <h3>Name</h3>
</div>
<div class="input-box">
                <input type="text" name="nam" id="nam" class="input_field" />
</div>
				 <div class="register-link">
                    <h3>phone</h3>
</div>
<div class="input-box">
                <input type="text" name="pho" id="php" class="input_field" />
</div>
				 <div class="register-link">
                    <h3>Address</h3>
</div>
<div class="input-box">
                <textarea id="add" name="add" class="required"></textarea>
</div>
				 
                <input type="submit" name="ord" id="ord" value="sent order" class="btn" /><br><br>
				 <input type="submit" name="Cancel" value="Cancel" class="btn" />
				
            </form>
</div>
</body>
</html>