<?php 
session_start();
  $_SESSION;

   include ("connection.php");
   include ("functions.php");

   $user_data= check_login($con);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title> Car sparepart website</title>
 </head>
 <body>
 	<a href="logout.php">Logout</a>
 	<h1> this is the index page</h1>

 	<br>
 	Hello, <<?php echo $user_data["user_name"];?>
 
 </body>
 </html>