
<?php
session_start();
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tour Packages</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   
      
    </head>
    <body>
        
        
           <div class="container">
                    <div class="row"> 
                        <div class="col-sm-12" style="background-color:#114dad; height:60px;">
                            <h2> <p style="color:WHITE; font-family:georgia; text-align: center; ">PLACE DETAILS</p></h2>
                        </div>
                    </div>

                <form action="/action_page.php" style="margin: auto;">
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
                        <div class="thumbnail" style="width:100%; height:300px; ">
                        <div class="col-sm-12" style="background-color:white; height:300px; ">
                            <table width="100%" height="300px" cellspacing="15" style= "background-color:white; color:#ed900e; font-family: cursive; text-transform: uppercase;"  >
                            <tr align="center" >
                            <td> Name</td>
                            <td align="center"><input type="text" name="name" value="<?php echo $d;?>"style="width:250px" /></td>
                            </tr>

                            <!--<tr align="center">
                            <td>Description</td>
                            <td align="center"><input type="text" name="name"style="width:250px" placeholder=""/></td>
                            </tr>-->

                            <tr align="center">
                            <td>Days and Nights </td>
                            <td align="center"><input type="number" name="age" style="width:67px"/>&nbsp;DAYS &nbsp;<input type="number" name="age" style="width:67px"/>&nbsp;NIGHTS</td>
                            </tr>
                            <tr align="center">
                                <td>Date of Travelling</td>
                                <td align="center">
                            <input type="date" name="name"style="width:250px" id="dob" placeholder=""/>
                            <div id="dob1">
                                
                            </div>
                            
                            </td></tr>

                            <tr align="center">
                            <td>Persons</td>
                            <td align="center"><input type="number" name="gender" style="width:250px" placeholder="" /> &nbsp;
                                
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
                                <td align="center"><p style="color:#114dad;"><b>TOTAL AMOUNT</b></p><input type="text" name="amt" style="width:250px" placeholder=""/></td>
                            </tr>

                            <tr align="center">
                            <td></td>

                            <td align="center"><input type="reset" name="" placeholder="RESET AGAIN" class="btn-primary" style="width:80px; color:white"/></td>

                            </tr>
                            </table>
                        </div>

                        </div>

                        <div class="row">
                        <div class="col-sm-12" style="background-color:#114dad; height:50px; width: 99%;">
                            <br>
                            <center> 
                            <input type="submit" value="Book Now" class="btn-success" style="background-color:#12a138; color:white; height:25px; width:100px; border-style:none "/>
                            </center>
                        </div>

                            
                        </div>

                    </div>                              
                    </div>
                    
                </form>
            </div>
    </body>
</html>
