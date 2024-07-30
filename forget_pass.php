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
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <title>Forget Password</title>
        <style>
            *{
                margin:0;
                padding: 0;
            }
            .full{
                height: 580px;
                width: 100%;
                background-image:url('Images/bg_pass1.jpg');
                background-repeat:no-repeat; 
                background-size: 100% 100%;
                padding-top: 20px;
                
            }
            .main{
               
                
                height: 500px;
                width: 40%;
                margin: auto;
                margin-left:30px;    
            }
           .form-signin {
            max-width: 90%;
            height:400px;
            padding: 15px 35px 45px;
            margin: 0 auto;
            /*background-color: #fff;*/
           
            
           
          }
          .form-signin .form-signin-heading
          {
            margin-bottom: 30px;
          }
          
          .form-signin .form-control{
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            margin-bottom:20px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
          }
          .form-signin .form-control:focus{
            z-index: 2;
          }
          .form-signin input[type=email]{
              width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            
            
          }
          .form-signin input[type=number],input[type=textbox]{
            margin-bottom: 20px;
            
            width: 100%;
          }
          .option{
              height: 42px;
              width: 100%;
              margin-bottom: 20px;
              border-radius: 5px;
              border:none;
          }
          button {
            background-color: #fff; /* Green */
            border: none;
            color: #20307E;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 5px;
            border-radius: 5px;
            box-shadow: 2px 4px 5px  #045CF6;
            margin-left: 100px;
            
          }
        </style>
    </head>
    <body>
       
       <div class="container full">
           <div class="main">
              <form class="form-signin" style="margin-bottom:120px;">         
                <h1 class="form-signin-heading" align="center" style="color:white; font-size:38px; 
                    font-family:serif; text-shadow:5px 3px 8px #045CF6;"> Recover Your Account</h1>
               <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
                <input type="number" class="form-control" name="dob" placeholder="Date Of Birth" required="" autofocus="" />      
                <!--<input type="number" name="mobile" class="form-control" placeholder="Mobile number"/>-->
                <select class="option" class="form-control">
                    <option disabled  >What's Your Secret Question?</option>
                    <option>What's Your School Name?</option>
                    <option>What's Your Nick Name?</option>
                    <option>What's Your Birth Place?</option>
                    <option >Which Season do you like most? </option>
		</select>
                <input type="textbox" name="answer" placeholder="Your Answer" class="form-control" />
                <input type="number" name="newpass" class="form-control" placeholder="New Password"/>
                <input type="number" name="cfmpass" class="form-control" placeholder="Confirm Password "/>
                <button class="btn btn-lg " type="submit">Change Password</button> 
              </form>
            
           </div>
       </div>
       
    </body>
</html>
