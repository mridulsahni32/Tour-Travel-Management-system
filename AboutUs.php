<?php
session_start();
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Simple About-Us Page</title>
  <!--<link rel="stylesheet" href="./style.css">-->
  <link rel="stylesheet" href="AboutUs_Style.css">
  <style>
      body{
	margin: 0;
	padding: 0;
}
.container{
	width:100%;
	height:auto;
	display: flex;
	align-items: flex-start;
	flex-wrap: wrap;
}
.about{
	width:100%;
	height: 500px;
	background-image: url(https://i.ibb.co/9bZPZgp/dsc4641-copy-880074f1fd6d9422f6c3fded126a54c8.jpg); 
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
}
.text{
	font-size: 30px;
	color:white;
	font-family: sans-serif;
	text-shadow: 0px 15px 12px #000;
        
}
.line{
	width:250px;
	height: 8px;
	background-color: whitesmoke;
	display: block;
	position: relative;
	border-radius: 5px;
	left:3%;
	box-shadow: 0px 15px 12px 0px #000;
}
.content{
	width:100%;
	height:auto;
	background-color:#fff;
	font-size: 23px;
	font-family: audiowide;
	color:navy;
	line-height: 30px;
	text-align: center;
       
}
b{
	font-size: 50px;
	color:navy;
	font-weight: 500px;
}
p{
    color:navy; background-color: white; text-align: justify;
}
  </style>
</head>

<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>About-us Page</title>
</head>
<body>
    <?php include_once 'Header.php'; ?>
	<div class="container">
		<div class="about">
			<div class="text">
				<h1>About Us</h1>
                                <div  style="color:whitesmoke;"></div> 
			</div>
		</div>
		<div class="content">
			<p ><b style="color:navy;">W</b>e at Shraddha tour believe in providing you with not only the right holy travel package but we provide you with a complete holistic and spiritually uplifting experience. Our driving force lies in our purpose and aim of providing you with a pilgrimage of a lifetime. We give you the opportunity to indulge and completely immerse yourself in the lord’s light and vibe. We work through unpredictable hours to provide you with the most spiritual pilgrimage experience. We are backed up by our incredibly talented and hard working team of individuals who are undoubtedly the best in the business. We also present you with valuable travel tips, crucial travel news among packages which cover almost all the important pilgrimage destinations.	</p>
                        <h3 style="color:navy; margin:3px; background-color: white;">Why choose us?</h3>
      <p >We are all ready to help you out anywhere and anytime and to clarify all your doubts regarding your journey. For us customer is our top notch priority and we leave no stone unturned in providing you with a memorable user experience. All you have to do is choose where you wish to go and leave the rest to us. We create and establish a trustworthy rapport with our clients while offering them with only best choices. Each member of our team is client centric and does everything with incredible hard work and vigor. We have bring to you specially curated and uniquely created travel content which is eventually beneficial to your travel plans.</p>
		</div>
		</div>
    
</html>
<!-- partial -->
  
</body>
</html>
