<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
 ?>
<?php
error_reporting(1);
include("connection.php");
$img=$_FILES['img']['name'];
$prono=$_POST['t1'];
$price=$_POST['t2'];
if($_POST['sub'])
{$qry="INSERT INTO item(img,prod_no,price)VALUES('$img','$prono','$price')";
$result=mysql_query($qry) or die ("save items query fail.");
if($result)			
	   {mkdir("image/$i");
			move_uploaded_file($_FILES['img']['tmp_name'],"image/$i".$_FILES['img']['name']);	
  // move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
		
	    $err="<font size='+2'>item inserted successfully</font>";
	
		}
	else
	 {
	   echo "item is not inserted";
	   }
	}  
	mysql_close($con);
?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- style -->
        <link rel="stylesheet" href="style.css" type="text/css">
        <!-- font: Notosans -->
        <link href="https://fonts.googleapos.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <!-- icons: font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Admin Pannel</title>
    </head>
    <body>
<style>
            :root{
    --mainColor: #f6f8fa;
    --darkBlack:#2d2f31;
    --darkGrey:#61666b;
    --grey:#d5d5d5;
    --lightGrey:#d3d3d3;
    --yellow:#fecb40;
    --red:#df113c;
}

*{
    margin:0;
    padding:0;
    outline:none;
    box-sizing:border-box;
    font-family:"Noto Sans JP" , sans-serif;
}

body{
    width:100%;
    height:auto;
    color:var(--darkBlack);
}

P {
    font-size:14px;
}

.logo{
    position:fixed;
    background-color:var(--darkBlack);
    color:var(--lightGrey);
    width:100%;
    text-align:center;
    top: 0px;
    z-index: 2;
    padding:15px 4px 6px;
} 

.sidebar {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 50px;
    height: 100%;
    background: var(--mainColor);
    z-index: 1;
    padding-top:70px;
}

.sidebar-menu{
    width:100%;
    text-align: center;
    padding: 10px 5px;
    color:var(--darkBlack);
}

.sidebar-menu > a {
    text-decoration: none;
    font-size:0.7rem;
    line-height: 1.5;
    color:var(--darkGrey);
}

.sidebar-menu:hover{
    border-right:2px solid var(--yellow);
    color:var(--yellow);
}

.sidebar-menu:hover > a{
    color:var(--yellow);
}

.harry-title{
    padding:0px 1rem;
}

.harry{
    height:100%;
    width:100%;
    padding-right: 0px;
    padding-left: 60px;
}

.harry-banner{
    width: 100%;
    height: 300px;
    position:relative;
    margin-top: 4rem;
    padding:1rem;
    border-radius:30px ;
    cursor: pointer;
}

.harry-banner > img{
    width:100%;
    height:100%;
    object-fit:cover;
    border-radius: 30px;
}

.harry-content{
    display: grid;
    grid-template-columns:repeat(auto-fit, minmax(250px, 1fr));
    gap:20px;
    padding:0.5rem 1rem 1rem 1rem;
}

.harry-card{
    background-color: var(--mainColor);
    box-shadow: rgb(0,0,0,0.16) 0px 1px 4px;
    border-radius: 15px;
    cursor: pointer;
}

.harry-card:hover{
    box-shadow: rgba(0,0,0,0.35) 0px 5px 15px;
}

.card-image{
    width: 275px;
    height:150px;
    object-fit:cover;
    border-radius: 15px;
}

.card-detail{
    padding: 10px;
}

.card-detail > h4 > span{
    float:right;
}

.card-detail > a:hover{
    text-transform: uppercase;
    background-color: var(--red);
}

.card-detail > a{
    float:right;
}

.button {
    background-color: var(--darkGrey);
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
  }

  table{
    width:6px;
  }


  /*index.php*/

  /*reg-php*/
</style>
        <!-- header -->

        <h3 class="logo">Admin Pannel</h3>

        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar-menu">
                <span class="fa fa-home"></span>
                <a href="home.php">Home</a>
            </div>
            <div class="sidebar-menu">
                <span class="fa fa-download"></span>
                <a href="insert.php">Insert</a>
            </div>
            <div class="sidebar-menu">
                <span class="fa fa-product-hunt"></span>
                <a href="view-product.php">Menu</a>
            </div>
            <div class="sidebar-menu">
                <span class="fa fa-comment"></span>
                <a href="view-order.php">Order</a>
            </div>
            <div class="sidebar-menu">
                <span class="fa fa-envelope"></span>
                <a href="view-feedback.php">Feedback</a>
            </div>
            <div class="sidebar-menu">
                <span class="fa fa-sign-out"></span>
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <!-- main harry-->
        <div class="harry">
            <div class="harry-banner">
                <img src="images/02.jpg">
            </div>
            <center>
            <h3 class="harry-title" align="center">Insert</h3><hr>
            <form  name="testform" method="post" enctype="multipart/form-data" >
			<table style="border-color:#000000;border-style: dotted;" class="harry-title">
				
						
				
				 <tr>
						<td height="20px"></td>
				</tr>	
				<tr>
				<td><span class="style3">Image:</span></td>
				<td>
					<input name="img" type="file">
				</td>
				</tr>
				 <tr>
						<td height="20px"></td>
				</tr>			
				
				<tr>
				  <td><span class="style3">product name: </span></td>
				  <td><label>
					<input name="t1" type="text" id="t1">
				  </label></td>
				</tr>
				 <tr>
						<td height="20px"></td>
				</tr>			
				
				<tr>
				  <td><span class="style3">Price:</span></td>
				  <td><label>
					<input name="t2" type="text" id="t2">
				  </label></td>
				</tr>
				 <tr>
						<td height="20px"></td>
				</tr>			
				
				
				
				
				<tr>
				<td  colspan="2" align="center">
					<input name="sub" type="submit" value="Submit">
					
				</td>
				</tr>
				
			</table>
			</form>
</center>
            <center><h2><?php echo $err;?></h2></center>
            </div> 
            <?php }  ?>
    </body>
</html>