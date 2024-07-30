

<?php
 session_start();
 
 
 ?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <title>Admin</title>
       <style>
        .button {
          display: inline-block;
          border-radius: 4px;
          background-color: navy;
          border: none;
          color: #FFFFFF;
          text-align: center;
          font-size: 28px;
          padding: 20px;
          width: 130px;
          transition: all 0.5s;
          cursor: pointer;
          margin: 20px;
        }

        .button span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
        }

        .button span:after {
          content: '\00bb';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
        }

        .button:hover span {
          padding-right: 25px;
        }

        .button:hover span:after {
          opacity: 1;
          right: 0;
        }
        
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12">
                <img src="bg_img.jpg" width="100%" height="300px">
            </div>
        </div>
       <hr style="background-color:navy; height: 17px; margin: 0px;">
        <div class="row">
            <form action="Admin_Login.php">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <input type="submit" name="admin" value="Admin" class="button"/>                
            </div>
            <div class="col-sm-5"></div>
            </form>
            <!--<form action="Minor_Project/front.php">
            <div class="col-sm-2">
                <input type="submit" name="user" value="User" class="button"/>                
            </div>
            <div class="col-sm-4"></div>
            </form>-->
        </div>
    </body>
</html>
