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
         <meta name="viewport" content="width=device-width,initial"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="quickaccess.css">
        <title>ContactUs</title>
        <style>
            
            h1{
                color: black;
                text-shadow:5px 5px 6px #B8CAFE;
                font-family: Bell MT;
            }
            .addr,.Phone,.Email,.Website{
                color:#716F6E;
                background-color: #fff;
                padding: 30px;
                margin: 7px;
                height: 150px;
                
                box-shadow: 2px 4px 5px  #B8CAFE;
            }
            form{
                display: block;
                margin: 20px;
            }
            .contact-form {
                width: 100%;
            }
            .p-5 {
                padding: 3rem !important;
            }
            .bg-white {
                background-color: #fff !important;
            }
            
            .btn{
                background-color: #81B821;
                color: white;
                padding: 5px;
                height: 50px;
                width:40%;
            }
            .btn:hover{
                background-color: white;
                color: #81B821;
                border:1px solid #81B821;
            }
        </style>
    </head>
    <body>
        <?php include_once 'Header.php'; ?>
        <div class="container-fluid">
            <!-- 1st row -->
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <h1>Contact Information</h1>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4"></div>
            </div>
            <!-- 2nd row -->
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2 addr">
                    Address:<br>
                    198 West 21th Street, Suite 721 New York NY 10016
                </div>
                <div class="col-sm-2 Phone">
                    Phone:<br>
                    +1234 5789 01
                </div>
                <div class="col-sm-2 Email">
                    Email:<br>
                    info@yourwebsite.com
                </div>
                <div class="col-sm-2 Website">
                    Website:YourWebsite.com
                </div>
                <div class="col-sm-2"></div>
            </div>
            <!-- 3rd row -->
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <img src="Images/img_contact.jpg" height="430px" width="100%" style="margin-top:20px;"/>
                </div>
                <div class="col-sm-5">
                    <form action="#" class="bg-white p-5 contact-form">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                          <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group" style="background-color:white;">
                            <input type="submit" value="Send Message" class="btn" >
                        </div>
                    </form>
                </div>
                <div class="col-sm-1"></div>
            </div>
            
        
            <div class="row" style="border-top:2px solid navy;">
                <div class="col-sm-12" >
                     <label ><h1 style="color:navy; margin-bottom:40px; text-shadow: 2px 2px 3px navy;"> Quick access </h1> </label>
                </div>
            </div>
             <div class="row " style="height:180px; ">
                <div class="col-sm-3   text-center" style="color:navy; text-decoration:none ;" >
                    <label > <a href="https://www.railyatri.in/bus-booking" style="color:navy; text-decoration:none">
                    <i class='iconbtn fa fa-bus ' style='font-size:60px;color:navy'></i> <br> <h4> Bus Services </h4>   </a>   </label>
                </div>
                <div class="col-sm-3  text-center" style="color:navy; text-decoration:none"  >
                     <label ><a href="https://www.irctc.co.in/nget/train-search" style="color:navy; text-decoration:none" >
                      <i class="iconbtn fa fa-train" style="font-size:60px;color:navy "></i><br> <h4> Book Your Tickets </h4>  </a> </label>
                 </div>
    
                <div class="col-sm-3  text-center" style="color:navy; text-decoration:none" >
                  <label ><a href="https://www.goindigo.in/" style="color:navy; text-decoration:none">
                  <i class="iconbtn fa fa-plane" style="font-size:60px;color:navy"></i> <br> <h4> Getting Here </h4>  
                 </a></label>
                </div>

                <div class="col-sm-3 text-center" style="color:navy; text-decoration:none" >
                   <label> <a href="Partnership_Form.php" style="color:navy; text-decoration:none">
                           <i class="iconbtn far fa-handshake" style="font-size:60px;color:navy; "></i><br> <h4 style="color:navy;"> Partnership </h4> </a> </label>
                 </div>
             </div>
  <hr size="10" color="">
        <div class="row" style="background-color:navy; padding-left:10px;" >
                <div class="col-sm-4 text-justify "  >

                    <label style="color:white" ><h3> Information</h3> </label>
                      <a href="Term&Conditions.php" style="color:whitesmoke; text-decoration:none"><h6> Terms & Conditions </h6> </a> 
                      <a href="Privacy.php" style="color:whitesmoke; text-decoration:none"><h6> Privacy Policy </h6> </a>
                      <a href="Partnership_Form.php" style="color:whitesmoke; text-decoration:none"><h6> Partnership </h6> </a>
                      <a href="AboutUs.php" style="color:whitesmoke; text-decoration:none"><h6> About Us </h6> </a>
                </div>
              
                <div class="col-sm-4 text-center  "  >

                    <label style="color:white"> <h3>Contact</h3> </label> <br>
                        
                    <a href="ContactUs.php" style="color:whitesmoke; text-decoration:none"> <h6> Contact Us </h6>  </a>
                       
                </div>
            
                <div class="col-sm-4 text-center fa-2x " >

                    <label style="color:white"> <h3> Follow </h3> </label> <br>
                        
                            <a href="https://www.instagram.com/instagram/?hl=en" style="color:whitesmoke; text-decoration:none">
                                <i class=" fa fa-instagram" style='font-size:16px;color:'> Instagram </i></a> <br>
                            <a href="https://api.whatsapp.com/send?phone=918887079347" style="color:#1318C0; text-decoration:none">
                            <i class="fa fa-whatsapp" style="font-size:16px;color:WHITESMOKE"> Whatsapp </i> </a><br>
                            <!--<a href="https://twitter.com/verified" style="color:#1318C0; text-decoration:none">
                            <i class="fa fa-twitter" style="font-size:16px;color:whitesmoke"> Twitter </i> </a><br>-->
                            <a href="https://www.facebook.com/Meta/" style="color:#1318C0; text-decoration:none">
                            <i class="fa fa-facebook" style="font-size:16px;color:whitesmoke"> Facebook </i> </a><br>
                            <!--<a href="https://www.youtube.com/" style="color:#1318C0; text-decoration:none">
                            <i class="fa fa-youtube" style="font-size:16px;color:whitesmoke"> Youtube </i></a> <br>
                            <a href="https://www.linkedin.com/company/linkedin/" style="color:#1318C0; text-decoration:none">
                            <i class="fa fa-linkedin" style="font-size:16px;color:whitesmoke"> Linkedin </i></a> <br>-->
                   
                </div>
        </div>
     <div class="row" style="background-color:whitesmoke; border-bottom: 2px solid navy;">
        <div class="col-sm-12 text-center" >
            <label style="color:navy;">© 2022 Shraddha Travels | All rights reserved </label> 
        </div>
    </div>
    
        </div>
       
    </body>
   
</html>
