<?php
session_start();
    include("connection.php");
	include("functions.php");
	
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Username = $_POST['Username'];
		$Password = $_POST['password'];
		
		if(!empty($Username) && !empty($Password) && !is_numeric($Username))
		{
			
		    //save to database
			$user_id = random_num(20);
            $query = "insert into Users (user_id,Username,Password) values ('$user_id','$Username','$Password')";

			mysqli_query($con, $query);
			
			header("Location: login.php");
			die;
		}else
		    echo "Please enter some valid information!";	
		
	}
?>


<!doctype html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <style type=""text/css>
	    #text{
		    height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}
		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
			
		}
		#box{
			background-color: #9dedec;
			margin: auto;
			width: 300px;
			padding: 20px;
			
		}
	</style>
    <div id="box">
	    <form method="post">
		    <div style="font-size: 20px; margin: 10px;">Signup</div>
		    <input id="text" type="text" name="Username"><br><br>
			<input id="text" type="Password" name="password"><br><br>
			
			<input id="button" type="submit" value="Signup"><br><br>
			
			<a href="login.php">Login</a><br><br>
		</form>
	
	
	</div>
     

</body>

</html>