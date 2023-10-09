<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- style -->
        <link rel="stylesheet" href="style3.css" type="text/css">
        <!-- font: Notosans -->
        <link href="https://fonts.googleapos.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <!-- icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Food Online Service</title>
    </head>
    <body>

        <!-- navbar -->
        <div id="header">
            <nav class="navbar">
                <div class="navbar-box">
                    <img src="images/logo1.jpg" width="35px" height="35px">
                    <h3>Food Online Service</h3>
                    <div class="btn">
                <ul>
                <a href="register.php"><button id="btn">Register</button></a>
                <ul>
            </div>
                </div>
            </nav>
        </div>
        <!-- navbar end -->

        <!-- banner -->
        <div id="hma-slider">
            <div class="hma-slider">
                <div class="slider-box">
                        <img src="images/slider/p9.png">
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- menu -->
        <div id="menu">
            <div class="menu">
            <a href="contact.php"><span class="fa fa-comment" style="font-size:24px"></span></a>
                <h3 class="hma">All Item</h3>
                <p>.</p>
            </div>
        </div>
        <!-- menu end -->

        <!-- Item -->
        <div id='content'>
<?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from item ");
						echo"<form method='post'><div class='harry'>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%3==0)
	{
	echo "";
	}
   echo "
   <section class='items'>
   <div class='item'>
   <img src='admin/image/$i'>
 <div class='card-datail'>
 <h4>".$arr['prod_no'].$arr['price']."</h4>".
 "<a class='btn2' href='log_in.php?img=$i'>Buy Now</a>
   
 </div></section>";
  
  $n++;

   }
   	  echo "</div>
       </form>";
	?>	
        </div>
        
        <!-- Item end -->

        <!-- Template end -->
        <div id="footer">
            <center>
                <font color="white"><p>Developed By Htoo Myat Aung</p></font>
            </center>
        </div>
    </body>
</html>