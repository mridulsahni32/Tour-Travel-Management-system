<?php
session_start();
?><!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, intial-scale=1.0">

<title> contact us </title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
<link rel="stylesheet" href="css1/Partnership_Style.css">
</head>

<body>
    <?php include_once 'Header.php'; ?>
<div class="container">

<h1>Connect With Us</h1>
<p> Feel free to get in touch with us </p>

<div class="contact-box">

<div class="contact-left">

<h3>Send Your Request </h3>

<form>

<div class="input-row">

<div class="input-group">

<label>Name</label>

<input type="text" placeholder="EnterName">

</div>

<div class="input-group">

<label>Phone</label>

<input type="number" placeholder="EnterPhone">

</div>

<div class="input-group">

<label>Email</label>

<input type="email" placeholder="EnterEmail">

</div>

<div class="input-group">

<label>Message</label>

<textarea rows="5" placeholder="EnterMessage"></textarea>

</div>

<button type="submit">SEND</button>

</div>

</form>

</div>

<div class="contact-right">

<h3>Reach Us</h3>

<table>

<tr>

<td>Email</td>

<td>abc@gmail.com</td>

</tr>

<tr>

<td>Phone</td>

<td>+916756878587</td>

</tr>

<tr>

<td>Address</td>

<td>112/26 ground floor,Ratanlal Road,<br>Kanpur<br></td>

</tr>

</div>
   
</body>
</html>