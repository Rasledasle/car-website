<?php
session_start();
   include ("connection.php");
   include ("functions.php");
   
   if ($_SERVER['REQUEST_METHOD'] == "POST") {
       // somthing was posted
       $user_name = $_POST['user_name'];
       $password = $_POST['password'];

       if(!empty($username) && !empty($password) && !is_numeric($username))
       {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        //connection to the query in the database
        mysqli_query($con,$query);
        //header("location: login.php");
        //die;

       }else
       {
        echo"Please enter some valid information!";

       }


       }


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sighup</title>
</head>
<body>
 <style type="text/css">
 	#text{
 		height: 25px;
 		border-radius: 5px;
 		padding: 4px;
 		border: solid thin#aaa;
 		width: 100%;
 	}
 	#button{
 		padding: 10px;
 		width: 100px;
 		color: white;
 		background-color: mediumblue;
 		border: none;
 	}
 	#box{
 		background-color: lightblue;
 		margin: auto;
 		width: 300px;
 		padding: 20px;
 	}
 </style>
 <div id="box">
 	<form method="post">
 		<div style="font-size: 20px;margin: 10px; color: purple;">Sighup</div>
 		<input id="text" type="text" name="username"><br><br>
 		<input id="text" type="password" name="password"><br><br>
 		<input id="button" type="submit" value="Sighup"><br><br>
 		<a href="login.php">Click to login</a><br><br>
 	</form>
 </div>
</body>
</html>