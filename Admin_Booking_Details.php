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
 <center><h1>View Booking Details</h1>
<input type="text" name="uid" placeholder="Enter User ID" required> 
<input type="submit" name="btnsearch" value="Search" /></center>  <br> <br>




<TABLE ALIGN="CENTER" BORDER="2" WIDTH="90%" HEIGHT="100PX">

     <TR >
         <TH>BOOKING ID</TH>
           <TH>DESTINATION ID</TH>
         <TH>PLACE </TH>
         <TH> DAYS and Nights</TH>
         
         <TH>DATE OF TRAVELLING</TH>
	 <TH>TOTAL AMOUNT</TH>
	 
	 <TH>USER ID</TH>
    </TR>
    
     <TR WIDTH="100%" HEIGHT="100PX">
         <TD> </TD>
         <TD> </TD>
         
         <TD></TD>
         <TD> </TD>
         <TD> </TD> 
	 <TD></TD>
        
         <TD> </TD>
</TR>
<?php
         $link = mysqli_connect("localhost","root","","project2022");
         if(isset($_GET['btnsearch']))
         {
             $qry="select * from booking_master where user_id like '%$_GET[uid]%'";
         }
 else {
         $qry = "select * from booking_master";
 }
         /*if(isset($_POST ['btn_search']))
         $qry ="select * from dst_master where dst_name like '$_POST[place_name]%' ";
             // echo $qry; */ 
         $r = mysqli_query($link, $qry);
         while($row = mysqli_fetch_assoc($r))
         {
         ?>
            <tr>
                <td><?php echo $row["b_id"]?></td>
                <td><?php echo $row["dst_name"]?></td>
                <td><?php echo $row["dst_id"]?></td>
                <td><?php echo $row["Days_Nights"]?></td>
                <td><?php echo $row["date"]?></td>
                <td><?php echo $row["total_amt"]?></td>
                <td><?php echo $row["user_id"]?></td>
                
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