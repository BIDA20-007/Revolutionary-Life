<?php
session_start();
    include("connection.php");
	include("functions.php");
	
	$user_data = check_login($con);
 

?>
<!doctype html>
<html>
    <head>
        <title>Home</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="login.html">
        <style>
			body{
				padding: 2.5%;
			}
			header{
			    height: 100px;
				width: 100%;
                boarder: solid thin #000;
			}
			
            
			nav{
			    height: 60px;
				width: 100%;
				background:#4b9c89;
				border: solid thin #000;
			}
			ul{
	            display: flex;
	       }
		   li{
	         	list-style-type: none; 
	        	margin: 0 12px;
		        font-size: 23px;
	   	        position: relative;
	        }
			li:hover{
			    padding-top: 8px;
		        background-color: #33bd9d;
			 
			}
			a{
			    text-decoration: none;
		        color: #ffffff;
			}
			article{
			    height: 800px;
				width: 100%;
				background: #ffffff;
				border: solid thin #000;
			}
			.imagecontainer{
			    position: absolute;
			    height: 800px;
				width: 45%;
			}
			.imagecontainer1{
			    position: absolute;
			    height: 265px;
				width: 17%;
				margin-left: 630px;
				margin-top: 2px;
			}
			.imagecontainer2{
			    position: absolute;
			    height: 330px;
				width: 17%;
				margin-left: 650px;
				margin-top: 400px;
			}
			.imagecontainer3{
			    position: absolute;
			    height: 300px;
				width: 20%;
				margin-left: 900px;
				margin-top: 100px;
			}
			footer{
			    height: 200px;
				width: 100%;
				background: #4b9c89;
				border: solid thin #000;
				display: flex;
			}
			footer ul{
			    list-style: none;
		        display: list-item;
			}
			.footer li a: hover{
           		padding-right: 5px;
				background-color: #5fe8d1;
	        }
		    .row{
		        display: flex;
		    }
		    .footer-col{
		        padding: ;
		    }
			.footer-col h4{
			    font-size: 25px;
		        text-transform: capitalize;
		        margin-bottom: 30px;
		        margin-left: 30px;
                font-weight: 400;
                position: relative;		
				color: #ffffff;
			}
			p{
			    color: #ffffff;
				margin-left: 30px;
				font-size: 15px;
				font-family: cursive;
			}
			.fa{
			    padding: 10px;
                font-size: 30px;
                width: 40px;
                text-align: center;
                text-decoration: none;
			}
			.fa:hover{
			padding-top: 5px;
			background-color: #5fe8d1;
			}
		</style>
	</head>
	<body>
	    <header>
		    <div>
			   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnQaUfUWH5uoQBbm0m4PzJ_FYrx1X8pCe07w&usqp=CAU" style="height: 100px; width: 300px; float: left;">
			    <div class="topnav">
                    <a class="active" href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                    <input type="text" placeholder="Search..">
                </div> 
			</div>
		</header>
		<nav>
		    <ul>
			    <li><a href="">HOME</a></li>
				<li><a href="">CALCULATORS</a></li>
				<li><a href="">INSIGHTS</a></li>
				<li><a href="">DASHBOARD</a></li>
				<li><a href="">FOOD DIARY</a></li>
				<li><a href="">CONTACT US</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<article>
		    <section>
			    <div class="imagecontainer">
			        <img src="https://www.useyournoodles.eu/wp-content/uploads/food-photography-composition-techniques-lines.jpg" height= "800px" width="100%">
			    </div>
			</section>
			<section>
			     <div class="imagecontainer1">
			    <img src="https://www.onelovelylife.com/wp-content/uploads/2020/05/Peach-Berry-Fruit-Salad1C.jpg" height= "265px" width="100%">
				<h1 style="" >Importance of vitamins in your body</h1>
			    </div>
			</section>
			<section>
			     <div class="imagecontainer2">
			    <img src="https://i.pinimg.com/236x/a1/8e/88/a18e88e147d04205a10f3c979486fcc2.jpg" height= "310px" width="100%">
			    <h1>know your calorie intake</h1>
				</div>
			</section>
			<section>
			    <div class="imagecontainer3">
			        <img src="https://i.pinimg.com/236x/68/d1/ae/68d1ae8ca1901e85cefa21001f5b2419.jpg" height= "300px" width="100%">
					<h1>Weekly/monthly calorie intake</h1>
			    </div>
				
			</section>
			
		</article>
		<footer>
		   
		     <div class="container2">
			    <div class="row">
				    <div class="footer-col">
                     <h4>Revolutionary life</h4>
					 <p>Food is a life source</p>
					 <p>Calorie counting</p>
					 <p>is a life sentence</p>
					</div>
					<div class="footer-col">
					    <h4>Helpful links</h4>
						<ul>
						    <li><a href="">Calculators</a></li>
				            <li><a href="">Insights</a></li>
							<li><a href="">Invite friends</a></li>
						</ul>
					</div>
					<div class="footer-col">
					    <h4>Copyright policy</h4>
					        <a href=""></a>
				    </div>
				    <div class="footer-col">
				        <h4>Privacy Rights</h4>
				            <a href=""></a>
				    </div>
				    <div class="footer-col">
				        <h4>Connect with us</h4>
					        <a href="https://www.facebook.com/TiendasParis" class="fa fa-facebook"></a>
						    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                            <a href="https://twitter.com/" class="fa fa-twitter"></a>
					</div>
				</div>
			</div>
	 
		</footer>
   
    </body>
</html>	