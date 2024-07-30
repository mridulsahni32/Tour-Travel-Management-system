<?php
session_start();
$msg = "";
if(isset($_GET['btn']))
{
    $name = $_GET['name'];
    $dob = $_GET['dob'];
    $email=$_GET['email'];
    $pwd = $_GET['password'];
    $cpwd = $_GET['cpassword'];
    $que = $_GET['question'];
    $ans = $_GET['ans'];
    $link = mysqli_connect("localhost","root","","project2022");
    $qry = "insert into user_master values('$name','$dob','$email','$pwd','$cpwd','$que','$ans')";
    mysqli_query($link, $qry);
    if(mysqli_affected_rows($link)>0)
        header("location:Login.php");
    else
        $msg ="Not Inserted !!!!". mysqli_error($link);
    mysqli_close($link);
}






?>
<!DOCTYPE html>
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
        <title>Sign Up</title>
        
        <style>
            *{
            color:#0871EF;
            
            }
            h1{
            text-align: center; 
            color: #17109B; 
            font-weight: bold; 
            margin-bottom: 20px;
            text-shadow:5px 3px 5px whitesmoke;
            margin-top:50px;
            font-family: Berlin Sans FB Demi;
            } 
            input,select{
		width:280px;
		height:35px;
		color:#0871EF;
		text-transform:uppercase;
                margin: 10px;
                border:1px solid #A4BCFC;
                box-shadow: 2px 4px 5px  #A4BCFC;
                border-radius: 5px;
            }
            label {
            font-size: 17px;
            font-weight:bold;
            margin: 10px;
            
            }
            .btn{
		width:150px;
		height:40px;
		background-color:whitesmoke ;
                color: #0871EF;
		font-weight:bold;
                margin-bottom: 60px;
                border-radius: 5px;
                box-shadow: 2px 4px 5px  #A4BCFC;
                margin: 15px;
            }
            .btn:hover{
		
		background-color:#0871EF;
		color:whitesmoke;
			
        }
        </style>
        <script>
            function ValidatePasssword(){
                pwd = document.getElementById("p1").value;
                cpwd = document.getElementById("p2").value;
                if(pwd==cpwd){
                    return true;
                }
                else{
                    document.getElementById("p3").innerHTML="Password Not Match";
                    return false;
                }
            }
        </script>
    </head>
    <body style=" background-image:url('Images/signup_bg.jpg');  background-repeat:no-repeat;  background-size:100% 100%;">
            <?php include_once 'Header.php'; ?>
        <form class="form-wrap" method="get" onsubmit="return ValidatePasssword()" style="border:2px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Sign Up</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"> 
                    <label>Name</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="name" required> 
                </div>
                <div class="col-sm-3"></div>
            </div>
           
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"> 
                    <label>Date Of Birth</label>
                </div>
                <div class="col-sm-3">
                    <input type="date" name="dob"  required>
                </div>
                <div class="col-sm-3"></div>
            </div>
            
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"> 
                    <label>Email</label>
                </div>
                <div class="col-sm-3">
                    <input type="email" name="email" required> 
                </div>
                <div class="col-sm-3"></div>
            </div>
            
             <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"> 
                    <label>Password</label>
                </div>
                <div class="col-sm-3">
                    <input type="password" id="p1" name="password"  required>
                </div>
                <div class="col-sm-3"></div>
            </div>
            
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"> 
                    <label>Confirm Password</label>
                </div>
                <div class="col-sm-3">
                    <input type="password" id="p2" name="cpassword"  required>
                </div>
                <div class="col-sm-3"><div style="color:red" id="p3"></div></div>
            </div>
            
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"> 
                    <label>What's Your Secret Ques?</label>
                </div>
                <div class="col-sm-3">
                    <select name="question">
                        <option></option>
                        <option disabled>~select~</option>
                        <option>What is Your School Name?</option>
                        <option>What is Your Nickname?</option>
                        <option>What is Your Dob?</option>
                        <option>What is Your Favourite Place To Visit?</option> 
                    </select>
                </div>
                <div class="col-sm-3"></div>
            </div>
            
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"> 
                    <label>Your Answer</label>
                </div>
                <div class="col-sm-3">
                   <input type="text" name="ans" required>
                </div>
                <div class="col-sm-3"></div>
            </div>
            
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-7">
                    <button type="submit" name="btn" class="btn ">Submit</button>
                </div>
            </div>
            <?php echo $msg; ?>
        </div>
       </form>
       
    </body>
</html>
