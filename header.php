
<html>
    <head>
        <title>Shraddha Travels</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <style>
        .full{
            background-color:navy;
            color:white;
            height: 100px;
            max-width:100%;
            padding:5px;
        }
        .clearfix:after{
                content: ".";
                visibility: hidden;
                display: block;
                height: 0px;
                clear:both;

        }
        .row{
                max-width: 100%;
                margin: 0 auto;
        }
        .logo{
            height: 90px;
            border-radius: 360px;
        }
        .h1{
          
        }
        .main-nav{
                float:right;
                margin-top: 40px;
        }
        .main-nav li{
                display: inline-block;
                list-style: none;
                margin-left: 40px;
        }
        .main-nav li a{
                padding: 5px 0;
                color: white ;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 90%;
                font-weight: 100;

        }
        .main-nav li a:hover{
                border-bottom: 2px solid whitesmoke;
        }
        .mobile-icon{display: none;}


        /*//////////////responsve queries////////////*/

        @media only screen and (max-width: 768px){
                h1 {font-size: 180%; }
                
                .main-nav{display: none;}

                .mobile-icon{
                        display: inline-block;
                        color: green;
                        float: right;
                        margin-top: 30px;
                        margin-right: 20px;
                }
                .main-nav{float: left;}
                .main-nav li{
                        display: block;
                        margin-top: 10px;
                }

        }
        </style>
    </head>
    <body>
       
        <div class="row full clearfix">
            <div class="col-sm-1">
                <img src="Images/log.jpeg" class="logo"  > 
            </div>
            <div class="col-sm-3">
                <h1 style="font-size: 28px; text-shadow:2px 0px whitesmoke;">Shraddha Travels</h1>
                <p class="para">Your Spiritual Journey Partner</p>
            </div>
            <div class="col-sm-8">
                <nav>
                    <ul class="main-nav animated slideInDown" id="check-class">
                        <li><a href="front.php">Home</a></li>
                        <li><a href="AboutUs.php">About Us</a></li>
                        <li><a href="Packages_new.php">Tour Places</a></li>
                        <li><a href="ContactUs.php">Contact Us</a></li>
                        
                    
                        <li>
                            <?php
                            if(isset($_SESSION['User_Name']))
                                echo"<a href='Logout.php'>Logout</a></li>";
                            else {
                            echo "<a href='Login.php'>Login</a></li>";    
                            }
                            ?>
                            <li>
                            <?php
                            if(isset($_SESSION['User_Name']))
                                echo"<a href='My_Bookings.php'>My Bookings</a></li>";
                            
                            ?>
                            
                            
                    </ul>
                    <a href="#" class="mobile-icon" id="check-class" onclick="slideshow()"> 
                        <i class="fa fa-bars"></i>
                    </a>  
                </nav>
            </div>
        </div>
        <!--<img src="new111.jpg" height='450px' width="100%"/>-->
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

