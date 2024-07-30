
<?php
session_start();
 if(!isset($_SESSION['uid']))
 {
     header("location:Admin_Front.php");
 }
extract ($_POST);
$imgPath=null;
if (isset($subbtn))
{
$link = mysqli_connect("localhost","root","","project2022");
$img = uploadImage();

         $qry = "insert into dst_master (dst_id, dst_name, dst_heading, dst_wiki, dst_location, dst_deity, dst_state, dst_desc , dst_photo) values ($pid,'$place','$phead','$wiki','$location' ,'$deity','$pstate','$pdesc','$img' )";
         echo $qry;
         $r = mysqli_query($link, $qry);
         
}

 function uploadImage()
{
    global $imgPath;
    
    $tmp = $_FILES['image']['tmp_name']; 
    
    //C:\wamp\www\Jagran2022\UploadData
    
    $finalPath = $_SERVER['DOCUMENT_ROOT']."Minor_Project/Images/".$_FILES['image']['name'] ;
     
    echo $finalPath;
    
    if($_FILES['myfile']['error'] == 0)
    {        
        move_uploaded_file($tmp ,$finalPath);
        $imgPath = "Images/".$_FILES['image']['name'] ;        
    }
    
    return $imgPath;
    
}        
?>

<?php include_once 'Admin_Header.php'; ?>
<!DOCTYPE html>
 <html> 
<head> 
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
 </head>
 <style>
 
.form
{ 
  background-color: white;
width: 320px;
border: 1px solid black;
padding: 40px 20px;/* box-sizing: border-box;
 position: fixed; left: 50%; top: 50%;
 transform: translate(-50%, -50%);*/
}
 h1
{
text-align: center; color: black; 
font-weight: normal; margin-bottom: 20px;
}
input{
width: 100%; 
background: none;
 border: 1px solid black; 
border-radius: 3px; 
padding: 6px 15px; 
box-sizing: border-box; 
margin-bottom: 20px; 
font-size: 16px; 
color: #fff;
text-align: center;
} 
input[type="submit"]
{ 
background: orchid; 
border: 0; 
cursor: pointer; 
color: navy;
} 
input[type="submit"]:hover
{
 background:skyblue; 
} 
::placeholder{color:white;
font-family:monospace;
}
label
{
color:navy; 
text-align: center;
}
.opt{
    text-align: center;
}
 </style>
 <body>
 <div class="form" > 
     <form  method="post" enctype="multipart/form-data" >
 <h1>Add Tour Packages</h1> 
<label>Package Id</label><input type="number"  placeholder="Package Id" required name="pid"> 
<label>Add Place</label><input type="text" placeholder="Place Name" required  name="place">
<label> Heading </label><input type="text" placeholder="Heading" required  name="phead">
<label>Description</label><input type="text" placeholder="Description of a Place" required  name="pdesc">
<label> Wikipedia</label><input type="text" placeholder="Wikipedia link" required name="wiki">
<label> Location</label><input type="text" placeholder="Map link" required name="location">
<label> State Name</label><input type="text" placeholder="State Name " required name="pstate">
<label> Deity</label><input type="text" placeholder="Deity name" required name="deity">

<label>Number of Days</label> 
<select name="days" >
<option disabled>~select~</option>&nbsp;&nbsp;&nbsp;&nbsp;
<option >1</option>
<option>2</option>
<option>3</option> 
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option></select><br><br>

<label>Number of Nights</label>
 <select name="nights">
<option disabled>~select~</option>
<option>1</option>
<option>2</option>
<option>3</option> 
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option></select><br> <br>

<label> Persons</label><input type="text" placeholder="Persons" required name="person">
<label>Image</label><input type="file" name="image">

 <input type="submit" value="Add Destination Details" name="subbtn" /> 
</form>
 </div> 
</body>

 </html>