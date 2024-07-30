<?php 
session_start();
if(!isset($_SESSION['User_Name'])){
    $id=$_GET['id'];
    header("location:Login.php?id=$id");
}

    extract($_POST);
    //var_dump($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <script>
             function cfun()
             {
              clen = document.cfrm.cardno.value.length;
              //alert(clen);
              if(clen!=16)
              {
                  //alert("Invalid Value");
                  document.getElementById('cno').innerHTML= "Invalid Card_No";
              }
              else
                  
        {   document.getElementById('cno').innerHTML= "Valid";
        }
             }
        </script>
         <script>
             function cvvfun()
             {
              cvvlen = document.cfrm.cvv.value.length;
              //alert(clen);
              if(cvvlen!=3)
              {
                  //alert("Invalid Value");
                  document.getElementById('cvvno').innerHTML= "Invalid Card_No";
              }
              else
                  
        
       {   document.getElementById('cvvno').innerHTML= "Valid";
        }
             }
        </script>
        <meta charset="UTF-8">
        <title>Tour Packages</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include_once 'Header.php'; ?>
        <form name="cfrm" method="post" action="transaction_3.php">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12" style=" margin-top:5px; background-color:navy;height:80px;">
                    <h2> <p style="color:WHITE;font-family:georgia;text-align: center; ">Booking Details</p></h2>
                </div>
            </div><br>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>PLACE</th>
                    <th>Number of Persons</th>
                    <th>Days & Nights</th>  
                    <th>Date of Travelling</th>
                    <th>Total Amount</th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <td><input type="text" name="dname" value="<?php echo $dname; ?>" /></td>
                    <td><input type="text" name="persons" value="<?php echo $persons; ?>"/></td>
                    <td><input type="text" name="DN" value="<?php echo $DN." Days and ".$Ngt." Nights"; ?>"/></td>
                    <td><input type="text" name="Date" value="<?php echo $Date; ?>"/></td>
                    <td><input type="text" name="total_amt" value="<?php echo $total_amt; ?>"/></td>
                  </tr>
                </thead>
            </table>
        <center>                                                                                              
            <table style=" color:#ed900e; font-family: cursive; text-transform: uppercase"  >  
                <h1 style="color:navy; font-weight: bold; font-family:georgia; font-size: 30px;">Card Payment</h1>
                <tr>
                    <td align="center">
                      <label >Card No</label>&nbsp;
                    </td>
                    <td align="center">                           
                        <input type="text" required maxlength="16" name="cardno" placeholder="" onkeyup="cfun()"  />
                        <b id="cno"></b>
                    </td>
                </tr>
               
                <tr>
                    <td align="center">
                        <label>CVV No</label>
                    </td>
                    <td align="center">                        
                        <input type="text" maxlength="3" name="cvv" placeholder="" required onkeyup="cvvfun()"/>
                        <b id="cvvno"></b>
                    </td>
                </tr>
                
                <tr>
                    <td align="center">
                      <label>Expiration MM/YYYY</label>&nbsp;
                    </td>
                    <td align="center">      
                      <input type="month" name="name" placeholder="" required />
                    </td>
                </tr>
                 <tr>
                    <td align="center">
                      <label>Total Cost:</label>&nbsp;
                    </td>
                    <td align="center">      
                      <input type="number" name="name" placeholder="" value="<?php echo $total_amt; ?>" readonly />
                    </td>
                </tr>
            </table>           
        </center>       
        <center>
            <div class="row">
                <div class="col-sm-12" style="background-color:navy; height:60px; margin-top:5px;">
                <br>  <!--<input type="submit" name="name" value="Pay"  style="background-color:#12a138; color:white; height:25px; width:90px; border-style:none "/> </center>-->
                    <input type="hidden" name="rst" value="<?php echo $rst; ?>"><input type="submit" value="Pay" class="btn" name="paybtn" style=" height:30px; width:150px; border-style:none; color:navy; background-color: white ;  " />
                </div>
            </div><br>
                          
        </center>    
    </div>		  
<?php include_once 'Footer.php'; ?>             
        </form>
    </body>
</html>


