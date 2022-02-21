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
        //read from  database
        $query = "select * from users where user_name ='$user_name' limit 1";
        
        $result = mysqli_query($con,$query);
        //checking if it was success full
        if($result)
        {
        	if ($result && mysqli_num_rows($resullt) > 0) 
		 if ($result && mysqli_num_rows($resullt) > 0) 
		   {
			   $user_data = mysqli_fetch_assoc($result);
			   if (user_data['password'] === $password) {
			   	// code...
			   	$_SESSION['user_id']= $user_data['user_id'];
			   	header("location: index.php");
                die;

			   }
		    }

        }
        echo"wrong username or password!";


       }else
       {
        echo"wrong username or password!";

       }






       }


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
   <link rel="stylesheet" type="text/css" href="homepage.html">
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
 		<div style="font-size: 20px;margin: 10px; color: purple;">login</div>
 		<input id="text" type="text" name="username"><br><br>
 		<input id="text" type="password" name="password"><br><br>
 		<input id="button" type="submit" value="Login"><br><br>
 		<a href="sighup.php">Click to Signup</a><br><br>
      
 	</form>
 </div>
</body>
</html>