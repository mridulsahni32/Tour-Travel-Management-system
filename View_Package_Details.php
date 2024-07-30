<?php
 session_start();
  if(!isset($_SESSION['uid']))
 {
     header("location:Admin_Front.php");
 }
 ?>
<?php include_once 'Admin_Header.php'; ?>
<div class="row">
    <div class="col-sm-12">
        <form name="View_Package_Details" method="post" action="" align="center">
            <h1>View Packages</h1><br>
            <lable>Place-Name</lable>
            <input type="text" name="place_name" placeholder="Enter-Place" required>
            <input type="submit" name="btn_search" value="Search" ><br><br>
        </form>
        <table border="2" align="center" height="100px" width="80%">
           

            <tr>
                
                 <th > <center>Package_Id </center></th>
             
            
                    <th> <center>Place </center></th>
                
             
                    <th> <center>Number of Days </center></th>
               
              
                    <th> <center>Number of Nights </center></th>
               
               
                    <th> <center>Rate </center></th>
               
            
                    <th><center>Image </center></th>
              
            </tr>
             <?php
         $link = mysqli_connect("localhost","root","","project2022");
         $qry = "select * from dst_master";
         if(isset($_POST ['btn_search']))
         $qry ="select * from dst_master where dst_name like '$_POST[place_name]%' ";
             // echo $qry;  
         $r = mysqli_query($link, $qry);
         while($row = mysqli_fetch_assoc($r))
         {
         ?>
            <tr>
                <td><?php echo $row["dst_id"]?></td>
                <td><?php echo $row["dst_name"]?></td>
                <td><?php echo $row["Days"]?></td>
                <td><?php echo $row["Nights"]?></td>
                <td><?php echo $row["Rate"]?></td>
                <td><?php echo $row["dst_photo"]?></td>
                
            </tr>
            <?php 

         }
?>
            
        </table>
</div>
