<?php
session_start();
?>
<?php
                          
$d=null;
$rate=null;
$id= $_GET['id'];
$link = mysqli_connect("localhost","root","","project2022");
         $qry = "select * from dst_master where dst_id=$id";
         $r = mysqli_query($link, $qry);
         while($row = mysqli_fetch_assoc($r))
         {
             $d= $row ['dst_name'];
             $rate = $row ['Rate' ];
         
?>

<html>
    <head>
        <script>
            function fun(val)
            {
                //alert(val);
                r = document.frm.Rate.value;
                document.frm.total_amt.value = val*r;
            }
           
       function validate()
       {
         dob = new Date(document.getElementById("dob").value ) ;
     
       obj = new Date();
       cdate = new Date(obj.getFullYear().toString(),obj.getMonth(),obj.getDate())
      // alert(cdate);
       if(dob>cdate)
       {
           
           return true;
       }
       else
       {
           document.getElementById("dob1").innerHTML="Invalid Date !!!!";
         return false;
     }
       }
      
      
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <title>Dwarka</title>
    </head>
    <?php include_once 'Header.php'; ?>
    <div class="container">
             <h1 class="text-center text-capitalize pt-5" style="text-shadow: 2px 3px 8px  #EAE9E0; font-family: Algerian; font-size:45px;"><?php echo $row["dst_name"]?> </h1>
             <hr class="w-25 mx-auto pt-5" >	
                <div class="row mb-5">
                 <div class="col-lg-6 col-md-6 col-12">
                   <img src="<?php echo $row['dst_photo' ]?> " class="img-fluid"  height="390px" width="100%"/>
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                     <h1 style="color: #FC4804; text-shadow: 2px 3px 8px #FACD53; font-size: 34px; font-family: Berlin Sans FB Demi; "><?php echo $row["dst_heading"]?></h1>
                   <hr>
                   <p class="text-justify" style="letter-spacing: 1px; font-size:18px; text-transform:capitalize;">
                   <?php echo $row['dst_desc']?>
                   </p>
                   <a href=<?php echo $row["dst_wiki"]?> class="btn btn-warning" style="margin-bottom: 10px;">
                       Wanna Know More</a><br>
                   <p style="float: left;">                   
                       <i class="bi bi-geo-alt"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" 
                             class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                   </p>
                   <lable style="font-size: 20px; float: left; margin-left: 7px; margin-top: 5px;"> 
                       <a href=<?php echo $row["dst_location"]?> style="text-decoration:none; color:#5F6262 ;"><?php echo $row["dst_name"]?></a>
                   </lable>
                   
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                   <p style="float: left; font-weight:bold; font-size:20px; margin-top: 3px; ">Deity: </p>
                   <p style="float: left; font-size:18px ; margin-top: 5px;"><?php echo $row["dst_deity"]?> &nbsp;</p>    
                  
                 </div>
                    <div class="col-lg-6 col-md-6 col-12" style="margin-bottom: 20px;">
                        <p style="float: left; font-weight:bold; font-size:20px; margin-top: 3px; ">State: </p>
                        <p style="float: left; font-size:18px ; margin-top: 5px;"> &nbsp;<?php echo $row["dst_state"]?> </p>   
                    </div>
                </div>
                 <?php 
         }
                 ?>
        </div>
         <div class="container">
                    <div class="row"> 
                        <div class="col-sm-12" style="background-color:navy; height:60px;">
                            <h2> <p style="color:WHITE; font-family:georgia; text-align: center; ">PLACE DETAILS</p></h2>
                        </div>
                    </div>

             <form onsubmit="return validate()" action="transaction_2.php?id=<?php echo $id; ?>" name="frm" method="post">
                    <div class="form-group">
                    <div class="row">
                        <!--<div class="col-sm-4" style="background-color:white; height:300px">
                            <br>
                            <div class="thumbnail" style="width:100%; height:280px;">
                                <img src="Images/Dwarka_Tra.jpg" alt="" style="width:100%; height:200px;"/>
                                <div class="caption">
                                 <p style="color:black;font-family:georgia;text-align: center">The Dwarkadhish temple, also known as the Jagat Mandir and occasionally spelled Dwarakadheesh, is a Hindu temple dedicated to the god Krishna.</p>
                                </div>
                            </div>
                        </div>-->
                        <div class="thumbnail" style="width:100%; height:300px">
                        <div class="col-sm-12" style="background-color:white; height:300px">
                            <table width="100%" height="300px" cellspacing="15" style= "background-color:white; color:#ed900e; font-family: cursive; text-transform: uppercase;"  >
                            <tr align="center" >
                            <td> Name</td>
                            <td align="center"><input type="text" name="dname" value="<?php echo $d;?>"style="width:250px" /></td>
                            </tr>

                            <!--<tr align="center">
                            <td>Description</td>
                            <td align="center"><input type="text" name="name"style="width:250px" placeholder=""/></td>
                            </tr>-->

                            <tr align="center">
                            <td>Days and Nights </td>
                            <td align="center"><input type="text" value="2" readonly name="DN" style="width:67px"/>&nbsp;DAYS &nbsp;<input type="text" name="Ngt" value="1" readonly style="width:67px"/>&nbsp;NIGHTS</td>
                            </tr>
                            <tr align="center">
                                <td>Date of Travelling</td>
                                <td align="center">
                            <input type="date" id="dob" name="Date"style="width:250px" placeholder="" required/>
                            <div id="dob1" style="color:red"></div>
                            </td></tr>

                            <tr align="center">
                            <td>Persons</td>
                            <td align="center"><input type="number" placeholder="1" name="persons" onchange="fun(this.value)" value="1" style="width:150px"/> &nbsp;
                            </tr>
                                
                            <tr align="center">
                            <td>Rate</td>
                            <td align="center"><input type="text" placeholder="" value=" <?php echo $rate ?> " name="Rate" style="width:150px"/> &nbsp;
                            </tr>
                            <!--<tr align="center">
                            <td>Food</td>
                            <td align="center"><input type="checkbox" name="gender"/>YES &nbsp; &nbsp; RS.3000/PERSON </td>
                            </tr>
                            <tr align="center">
                            <td>Stay</td>
                            <td align="center"><input type="checkbox" name="gender"/>YES  &nbsp; &nbsp; RS.2500/PERSON</td>
                            </tr>
                            <tr align="center">
                            <td>Mode of Transport</td>
                            <td align="center"><input type="radio" name="gender"/>BUS &nbsp;<input type="radio" name="gender"/>TRAIN&nbsp;<input type="radio" name="gender"/>FLIGHT</td>
                            </tr>-->



                            <tr align="center">
                                <td></td>
                                <td align="center"><p style="color:#114dad;"><b>TOTAL AMOUNT</b></p><input type="text" name="total_amt" value="<?php echo $rate ?>" style="width:250px" placeholder=""/></td>
                            </tr>

                            <tr align="center">
                            <td></td>

                            <td align="center"><input type="hidden" name="rst" value="<?php echo $id ?>"><input type="reset" name="" placeholder="RESET AGAIN" class="btn-primary" style="width:80px; color:white"/></td>

                            </tr>
                            </table>
                        </div>

                        </div>

                        <div class="row">
                        <div class="col-sm-12" style="background-color:navy; height:60px; width: 99%;">
                            <br>
                            <center> 
                                <input type="submit" class="btn " value="Book Now"  style="color:navy; background-color: white ;">
                            </center>
                        </div>
                            
                            
                        </div>

                    </div>                              
                    </div>
                    
                </form>
            </div>
    <?php include_once 'Footer.php'; ?>
    </body>
</html>
