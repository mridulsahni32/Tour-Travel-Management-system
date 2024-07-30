<?php
     session_start();                                
?>
<!--<html>
	<head>
		<title>First</title>
		<style>
		*{
		margin:0;
		padding:0;
		}
		
		.box{
		width:31%;
		height:450px;
		border:1px solid #E2E6E6;
		float:left;
		margin:10px;
		box-shadow:0px 2px 2px 0px #FDB5C6;
		}
		.img{
		padding:50px;
		}
		.HD1{
		padding-top:5px;
		margin:center;
		text-shadow: 2px 2px #E2E6E6;
		color:gray;
		font-size:28px;
		font-family:monotype cursiva;
		}
		</style>
	</head>
	
	<body>
		<h1 align=center style="font-size:50px; height:70px; color:white; background-color:#F53362; line-height:center;">Hotel Booking</h1>
		<div class="main">
		<div class="box">
          
			<div class="img">
				<img src="<?php echo $row['h_img' ]?>" height="300px" width="90%" /><br>
			</div>
			<h2 class="HD1"><?php echo $row["h_name"]?>  </h2>
			<p>$25000</p>
		</div>
		<div class="box">
			<div class="img">
				<img src="kedarnath_h2.jpg" height="300px" width="90%" /><br>
			</div>
			<h2 class="HD1"> Kedarkashi cottage </h2>
		</div>
		<div class="box">
			<div class="img">
				<img src="kedarnath_h3.jpg" height="300px" width="90%" /><br>
			</div>
			<h2 class="HD1">StayApart </h2>
		</div>
		</div>
	</body>
</html>-->
<html>
	<head>
		<style>
		*{
		margin:0;
		padding:0;
		}
		.main{
		 background-color:whitesmoke;
		 height:1000px;
		 padding-top:20px;
		}
		.box1{
		 height:250px;
		 width:80%;
		 background-color:white;
		 margin:auto;
		 box-shadow:0px 2px 2px 0px #FDB5C6;
		 border-radius:5px; 
		 margin-bottom:20px;
         padding-right: 20px;;
		}
        .para1{
            font-size: 20px;
        }
		.btn{
		 height:30px;
		 width:10%;
		 background-color:blue;
		 color:white;
		 border:none;
		 border-radius:5px;
		}
		</style>
	</head>
	<body>
		<h1 align=center style="font-size:50px; height:70px; color:white; width:100%; background-color:#1318C0;">Hotel Booking</h1>
        <div class="main">
         <?php
         $link = mysqli_connect("localhost","root","","project2022");
         $qry = "select * from hotel_master";
         $r = mysqli_query($link, $qry);
         while($row = mysqli_fetch_assoc($r))
         {
         ?>
			
        <div class="box1">
        
		
				<table>
					<tr>
						<td>
							<img src="<?php echo $row["h_img"]?>" height="200px" style="padding:20;"/><br/>
						</td>
						<td>
							<h2 style="font-size:30px;"><?php echo $row["h_name"]?></h2>
							<p class="para1"><?php echo $row["h_desc"]?></p>
                            
							<h3><a href="<?php echo $row["h_map"]?>" style="text-decoration:none;">Show on map </a></h3>
							<p style="font-size: 22px;">13.7 km from Kedarnath</p> 
                            <p style="font-size: 22px;color:purple;"><b>Price</b> &nbsp;<b  style="color: blue;">  <?php echo $row["h_price"]?> </b> </p>
                            
							
							
							<br>
							<input type="button" value="Book Now" class="btn" />
						</td>
						<td></td>
					</tr>
				</table>
                 
                    
			</div>
			 <?php
                
                    
                }
                ?>  
			<!--<div class="box1">
				<table>
					<tr>
						<td>
							<img src="kedarnath_h2.jpg" height="200px" style="padding:20;"/><br>
						</td>
						<td>
							<h2>Kedarkashi cottage</h2>
							<p>Kedarkashi cottage is located in Rudraprayag. Gaurikund is 10 km from the tented camp, 
							while Joshimath is 43 km away.</p>
							<h3>Rudraprayag .<a href="" style="text-decoration:none;">Show on map </a>
							12.3 km from Kedarnath</h3>
							<h5 style="color:navy;">Double Room with Mountain View</h5>
							<p>1 double bed<br>
							<font color="red">Only 1 room left at this price on our site</font>
							</p><br>
							<input type="button" value="Book Now" class="btn" />
						</td>
						<td></td>
					</tr>
				</table>
			</div>
			
			<div class="box1">
				<table>
					<tr>
						<td>
							<img src="kedarnath_h3.jpg" height="200px" style="padding:20;"/><br>
						</td>
						<td>
							<h2>StayApart</h2>
							<p>Situated in Gaurikund in the Uttarakhand region, StayApart - Atharva Villa Gateway to
							Kedarnath features accommodation with free private parking. The lodge offers a terrace.</p>
							<h3>Gaurikund .<a href="" style="text-decoration:none;">Show on map </a>
							13.8 km from Kedarnath</h3>
							<h5 style="color:navy;">Deluxe Room</h5>
							<p>1 extra-large double bed.<br>
							<font color="red">Only 3 rooms left at this price on our site</font>
							</p><br>
							<input type="button" value="Book Now" class="btn" />
						</td>
						<td></td>
					</tr>
				</table>
			</div>-->
		</div>
          
	</body>
</html>