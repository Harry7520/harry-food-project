<?php 
$host="localhost";
$user="root";
$pwd="";
$con=mysql_connect($host,$user,$pwd) or die(mysql_error());
mysql_select_db("hmafooddb",$con);
?>