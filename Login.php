<!DOCTYPE html>

<?php
session_start();

//extract($_POST);
if(isset($_POST['btnlogin']))
{
   
    if(!empty($_POST['username'])  && !empty($_POST['password']))  
    {
         $link =  mysqli_connect("localhost","root","","project2022");   
         $qry = "select * from user_master where u_email='$_POST[username]' and u_pwd='$_POST[password]'";     
         $resultset =  mysqli_query($link,$qry);
         
         $count = mysqli_num_rows($resultset);
         
         $data =  mysqli_fetch_assoc($resultset);
         
         if($count)
         {
            session_start();
            $_SESSION['User_Name'] =  $data['u_name']  ;         
            $_SESSION['User_ID'] =  $data['u_email']  ; 
            $_SESSION['login_time'] =  time() ;
            
                       
            header("location:Explore.php?id=$_POST[h1]");
         }
         else
            echo "Invalid UserId or Password....";           
        
         mysqli_close($link);
    }
    else
    {
        echo "Fields can't be left blank....";
    }
}

?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'><link rel="stylesheet" href="css1/Login_Style.css">
</head>
<body>
  <?php include_once 'Header.php'; ?>
  <!-- partial:index.partial.html -->
   <div class="wrapper">
    <form method="post" class="form-signin" style="margin-bottom:120px;">  <input type="hidden" name="h1" value="<?php echo $_GET['id']; ?>"/>     
      <h2 class="form-signin-heading" align="center" style="color:#162466; font-size:40px; font-family:serif; text-shadow:5px 3px 5px whitesmoke;"> Login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required="" 
	  style="margin-top:20px;"/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"/> Remember me
      </label>
	  
		<a href="forget_pass.php" ><p style="color:#20307E; margin-right:5px; "><b>Forget Password?</b></p></a>     	  
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnlogin">Login</button> 
	  <p class="para" style="color:#20307E;">Are You a new customer?<a href="SignUp.php"><b>Click Here</b></a></p>
    </form>
  </div>
<!-- partial -->
 
</body>
</html>
