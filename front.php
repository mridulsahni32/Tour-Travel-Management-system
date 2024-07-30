<?php
session_start();
?><!DOCTYPE html>
<!--
<html>
<head>
	<title>Shraddha Travels</title>
        <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css1/front_Style.css">
	<link rel="stylesheet" type="text/css" href="style.css"> 
	<meta name="viewport" content="width=device-width, initial-scale">
	<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
        .main-nav{
            float:right;
            margin-top: 60px;
    }
    .main-nav li{
            display: inline-block;
            list-style: none;
            margin-left: 40px;
    }
    .main-nav li a{
            padding: 5px 0;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 90%;
            font-weight: 100;

    }
    .main-nav li a:hover{
            border-bottom: 2px solid #fff;
    }
    .main-content-header{
            width: 1180px;
            position: absolute;
            /*border:1px solid red;*/
            top:55%;
            left: 50%;
            transform:translate(-50%, -50%); 
    }
</style>
<body>
	<header>
		<nav>
			<div class="row clearfix">
                            <img src="Images/logo.jpg" class="logo" style="border-radius: 60px;"> 
                            
                        	<ul class="main-nav animated slideInDown" id="check-class">
						<li><a href="#">Home</a></li>
                                                <li><a href="#">About</a></li>
						<li><a href="Packages_new.php">Packages</a></li>
						<li><a href="ContactUs.php">Contact</a></li>
						<li><a href="Login.php">Login</a></li>
				</ul>
				<a href="#" class="mobile-icon" id="check-class"onclick="slideshow()"> 
                                    <i class="fa fa-bars"></i>
				</a>
			</div>
		</nav>
		<div class="main-content-header">
			<h1>WELCOME TO <span class="colorchange">Shraddha-Travels</span><br>
				 your spiritual journey partner. </h1>
			<a href="Packages_new.php" class="btn btn-full"><b>Plan Your Trip</b></a>	 
			<!--<a href="transaction_1.php" class="btn btn-nav">Tickets Booking</a>	--> 
		<!--</div>	
	</header>

	<script type="text/javascript">
		function slideshow(){
			var x = document.getElementById('check-class');
			if(x.style.display ==="none"){
				x.style.display ="block";
			}else{
				x.style.display ="none";
			}
		}
	</script>
     
</body>
</html>
-->
<div class="container-fluid">
<?php include_once 'Header.php'; ?>
    <div class="row">
        
            <img src="new111.jpg" height='450px' width="100%"/>
        
    </div>
 
  <?php include_once 'Footer.php'; ?>
</div>