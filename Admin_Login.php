<?php
session_start();
$m=null;
if(isset($_POST['btn_sub']))
{
    if($_POST['Ad-id']=="Admin"&& $_POST['Ad-pass']=="ABC123")
    {
        $_SESSION['uid']=1;
        header("location:Admin_Package_Details.php");
    }
 else {
        $m="Invalid Username and Password";
    }
        
}

?>


<?php include_once 'Admin_Header.php'; ?>
<div class="row">
    <div class="col-sm-12">
        <form name="Admin_Login" method="post" action="" align="center">
            <h1>Admin Login</h1><br><br>
            <?php echo $m;?>
            <lable>Admin-Id</lable>
            <input type="text" name="Ad-id" placeholder="Enter-id" required><br><br>
            <lable>Password</lable>
            <input type="password" name="Ad-pass" placeholder="Enter-Password" required><br><br>
            <input type="submit" name="btn_sub" value="login" >
        </form>
    </div>
</div>
