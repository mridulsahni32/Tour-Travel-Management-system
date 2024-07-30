<?php
session_start();
extract ($_POST);
$r=null;


$link = mysqli_connect("localhost","root","","project2022");


         $qry = "select * from booking_master where user_id = '$_SESSION[User_ID]'"; 
      
         $r = mysqli_query($link, $qry);
         

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>My Bookings</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
        
    </head>
    <body style="background-color: white;">
        <?php include_once 'Header.php'; ?>
        <h1 class="text-center text-capitalize pt-5" style=" text-shadow: 2px 3px 8px  #D7D6C8;">My Bookings</h1><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1" style=" width:100%; text-align :center;height: 150px;">
                    <div class="table-responsive">
                    <table class= "table  table-hover">
                        <tr>
                            
                            <td><b>Booking Id</b></td>
                            <td><b>Destination Name</b></td>
                            <td><b>Date Of Traveling</b></td>
                            <td><b>Days and Nights</b></td>
                            <td><b>Total_Amt</b></td>
                            
                        </tr>
                      <?php 
                      while ($row=mysqli_fetch_array($r))
                      {
                          echo "<tr>";
                          
                          echo "<td>$row[0]</td>";
                          echo "<td>$row[1]</td>";
                          echo "<td>$row[4]</td>";
                          echo "<td>$row[3]</td>";
                          echo "<td>$row[5]</td>";
                          
                          
                          echo "</tr>";
                      }
                      
                      ?>
                    </table>
                    </div>
                </div>             
            </div>
        </div>
       
    </body>
</html>
