<?php
session_start();
?><!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <title>Shraddha Travels</title>
        <style>
            element.style {
            }
            .card-img, .card-img-top {
                border-top-left-radius: calc(.25rem - 1px);
                border-top-right-radius: calc(.25rem - 1px);
            }
            .card-img, .card-img-bottom, .card-img-top {
                -ms-flex-negative: 0;
                flex-shrink: 0;
                width: 100%;
            }
            img {
                vertical-align: middle;
                border-style: none;
            }
            *, ::after, ::before {
                box-sizing: border-box;
            }
            .card {
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 1px solid rgba(0,0,0,.125);
                border-radius: .25rem;
            }
            .text-center {
                text-align: center!important;
            }
            body {
                margin: 0;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: left;
                background-color: #fff;
            }
            :root {
                --blue: #007bff;
                --indigo: #6610f2;
                --purple: #6f42c1;
                --pink: #e83e8c;
                --red: #dc3545;
                --orange: #fd7e14;
                --yellow: #ffc107;
                --green: #28a745;
                --teal: #20c997;
                --cyan: #17a2b8;
                --white: #fff;
                --gray: #6c757d;
                --gray-dark: #343a40;
                --primary: #007bff;
                --secondary: #6c757d;
                --success: #28a745;
                --info: #17a2b8;
                --warning: #ffc107;
                --danger: #dc3545;
                --light: #f8f9fa;
                --dark: #343a40;
                --breakpoint-xs: 0;
                --breakpoint-sm: 576px;
                --breakpoint-md: 768px;
                --breakpoint-lg: 992px;
                --breakpoint-xl: 1200px;
                --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
            }
            html {
                font-family: sans-serif;
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
                -webkit-tap-highlight-color: transparent;
            }
            *, ::after, ::before {
                box-sizing: border-box;
            }
            *, ::after, ::before {
                box-sizing: border-box;
            }
            .column{
                box-shadow: 2px 3px 8px  #FDF06A;
            }
        </style>
    </head>
    <body>
         <?php include_once 'Header.php'; ?>        
        <section>

        	<div class="container">
            <h1 class="text-center text-capitalize pt-5" style=" text-shadow: 2px 3px 8px  #D7D6C8;">Destinations</h1>
		<hr class="w-25 mx-auto pt-5" >	
        <!-- 1st row  -->
		<div class="row text-center mb-5"  style="margin-top:50px; margin-bottom: 10px;">
       
        <?php
         $link = mysqli_connect("localhost","root","","project2022");
         $qry = "select * from dst_master";
         $r = mysqli_query($link, $qry);
         while($row = mysqli_fetch_assoc($r))
         {
         ?>
    <!--service part-->

                    <div class="col-lg-4 col-md-4 col-12 ">
                        <div class="card column" >
                            <img class="card-img-top" src=<?php echo $row["dst_photo"]?> height="260px" width="360px" alt="Card image">
                              <div class="card-body">
				<h4 class="card-title" style="font-family:Franklin Gothic Medium; font-size:20px;"><?php echo $row["dst_name"]?></h4>
				<p class="card-text"> <?php echo $row["dst_state"]?></p>
                                <a href="Explore.php?id=<?php echo $row['dst_id']
                                       ?>" class="btn btn-primary" style="margin-bottom: 10px;">Explore</a>
                              </div>
                        </div>
                    </div>	

                <?php
                
                    
                }
                ?>    
                    				
		</div>
         <!-- 1st row completed -->
       
            </div>
	</section>	
<!--service part end-->
   <?php include_once 'Footer.php'; ?>
    </body>
</html>
 