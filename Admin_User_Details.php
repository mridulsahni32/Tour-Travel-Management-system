<?php
 session_start();
  if(!isset($_SESSION['uid']))
 {
     header("location:Admin_Front.php");
 }
 ?>
<?php include_once 'Admin_Header.php'; ?>
<!DOCTYPE html>
 <html> 
<head> 
<title>Sign Up</title>
 </head>

 <body>
 <div class="form-wrap"> 
<form>
 <center><h1>View User Details</h1>
<input type="text"  placeholder="Enter User Name" name="uid" required> 
<input type="submit" value="Search" name="btnsearch" /></center>  <br> <br>



<TABLE ALIGN="CENTER" BORDER="2" WIDTH="50%" HEIGHT="100PX">

     <TR WIDTH="100%" HEIGHT="100PX">
         <TH>NAME</TH>
         <TH>DATE OF BIRTH </TH>
         <TH>Email Id</TH>
         
    </TR>
    
   <?php
         $link = mysqli_connect("localhost","root","","project2022");
        if(isset($_GET['btnsearch']))
         {
             $qry="select * from user_master where u_name like '%$_GET[uid]%'";
         }
 else {
         $qry = "select * from user_master";
 }
         /*if(isset($_POST ['btn_search']))
         $qry ="select * from dst_master where dst_name like '$_POST[place_name]%' ";
             // echo $qry; */ 
         $r = mysqli_query($link, $qry);
         while($row = mysqli_fetch_assoc($r))
         {
         ?>
            <tr>
                <td><?php echo $row["u_name"]?></td>
                <td><?php echo $row["u_dob"]?></td>
                <td><?php echo $row["u_email"]?></td>
           
            </tr>
            <?php 

         }
?>
</TABLE>
</BODY>
</HTML>  
    




</form>
 </div> 
</body>
 </html>