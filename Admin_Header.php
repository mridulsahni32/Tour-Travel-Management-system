<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <title>Admin</title>
    </head>
    <style>
        .main-nav{
            float:right;
            margin-top: 10px;
            align:center;
            
    }
    .main-nav li{
            display: inline-block;
            list-style: none;
            margin-left: 40px;
            margin-right: 40px;
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
            /*border:1px solid red;
            top:55%;
            left: 50%;*/
            transform:translate(-50%, -50%); 
    }
</style>
    <body>
        <div class="row">
            <div class="col-sm-12" style="background-color: navy; color:white;">   
              	<ul class="main-nav animated slideInDown" id="check-class">
                    <li><a href="Admin_Package_Details.php">Add Package Details</a></li>
                    <li><a href="View_Package_Details.php">View Package Detail</a></li>
                    <li><a href="Admin_Booking_Details.php">View Booking Detail</a></li>
                    <li><a href="Admin_User_Details.php">View User Detail</a></li>
                           
                    <li><?php 
                    if(isset($_SESSION['uid']))
                    {
                        echo "<a href='Logout1.php'>Logout</a>";
                    }
                    ?>
                    </li>     
		</ul>	
            </div>
        </div>
         
    </body>
</html>
