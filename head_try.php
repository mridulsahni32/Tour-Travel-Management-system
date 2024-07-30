<html>
    <head>
        <title>Shraddha Travels</title>
        <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="Header_Style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale">
	<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="full">
            <nav>
                <div class="row clearfix">
                <img src="Images/logo.jpg" class="logo" style="border-radius: 360px;"> 
                    <ul class="main-nav animated slideInDown" id="check-class">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="Packages.php">Tour Places</a></li>
                        <li><a href="ContactUs.php">Contact</a></li>
                        <li><a href="Login.php">Login</a></li>					
                    </ul>
                    <a href="#" class="mobile-icon" id="check-class" onclick="slideshow()"> 
                        <i class="fa fa-bars"></i>
                    </a>          			
                </div>
            </nav>
        </div>
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