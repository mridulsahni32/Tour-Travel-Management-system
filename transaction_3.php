<?php
session_start();
if(!isset($_SESSION['User_Name'])){
    header("location:Login.php");
}

    extract($_POST);
?>
<!DOCTYPE lang=" html">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tour Packages </title>
        <meta name="viewport" content="width=device-width, initial-scale=1/">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </head>
    <body> 
        <?php include_once 'Header.php'; ?>
    <form action="/action_page.php">
        <div class="form-group">
            <center>  <br><br>
                <div class="thumbnail"  style="width:50%; height:70%">
                <img src="Images/Confirm_Tra.png" alt="" style="width:30%; height:60%"/>
                <div class="caption">
                <h2>
                    <p style="color:black; font-family:georgia; text-align: center;">Transaction Successful !!<br></p>
                </h2>
                </div> 
                
                </div>
            </center>
       </div>
    </form>
        <?php include_once 'Footer.php'; ?>
    </body>
</html>
<?php 
extract ($_POST);
if (isset($paybtn))
{
    $link = mysqli_connect("localhost","root","","project2022");
    $qry= "insert into booking_master(dst_id, dst_name, Days_Nights, date, total_amt, user_id ) values ($rst, '$dname', '$DN', '$Date ', $total_amt, '$_SESSION[User_ID]'  )";
    echo $qry;
    $r = mysqli_query($link, $qry);
    
}


