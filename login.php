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
			
		    //read from database
            $query = "Select * from Users where Username = '$Username' limit 1";

			$result = mysqli_query($con, $query);
			
			if($result)
			{
				
				if($result && mysqli_num_rows($result) > 0)
		        {
		            $user_data=mysqli_fetch_assoc($result);
			        
					if($user_data['Password'] === $Password)
			        {
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
			            die;
					}
		        }
			}
			echo "Wrong Username or Password!";	
		}else
		{   echo "Wrong Username or Password!";		
	    }
	}	
?>




<!doctype html>
<html>
    <head>
        <title>Login</title>
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
		        <div style="font-size: 20px; margin: 10px;">Login</div>
		        <input id="text" type="text" name="Username"><br><br>
			    <input id="text" type="Password" name="password"><br><br>
			
			    <input id="button" type="submit" value="login"><br><br>
			
			    <a href="signup.php">Signup</a><br><br>
		    </form>
	    </div>
    </body>
</html>