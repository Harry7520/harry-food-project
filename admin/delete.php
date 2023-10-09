     
		  <?php
				error_reporting(1);
	
				include("connection.php");
	
				$sql=mysql_query("delete from item where id='{$_GET['pro_id']}'");
				$result = mysqli_query($con, $del);
				unlink("image/".$_GET['pro_img']);
				rmdir("image/".$_GET['pro_img']);
				echo "<script>alert('Product has been deleted successfully!')</script>";
				echo "<script>window.open('view-product.php','_self')</script>";
		  ?>
		
        