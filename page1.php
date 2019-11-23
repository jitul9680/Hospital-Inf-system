<?php
session_start();
error_reporting(0);
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
         body
{
      background-image: url("back5.jpeg"); 
      /*  background-repeat: no-repeat;
       /* background-size: auto;    */
      /*  background-size: 300px 100px; */
} 
#mainHeader
{
   width:100%;
   background-color:url("back5.jpeg");
   border-color:red;
   border-width:2px;
}
img
{
    opacity:0.3;
}

#header1
{
    width:100%;
    height: 200;
    border-bottom-style: solid ;
}
li
{
    margin-top:30px;
    float:right;
    margin-left:50px; 
    list-style:none;
    color:black;
    text-decoration:none;
}
a:link
{
    text-decoration: none;
}
a:active
{
    color:black;
}
li:visited
{
    color:black;
}
#hello
{
	min-height: 500px;
}
#marq1
{
  
  font-size:20px;
  font-weight:bold;
  size:23;
  color:black;
}
form
{  
    background-color: transparent
    background-color: hsla(89, 43%, 51%, 0.3);
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
   <!-- <link rel="stylesheet" type="text/css" href="index.css">--> 
    <style type=text/css>

    </style>
</head>
<body>
<div id="mainHeader">
<div id="header1" style="align-content: center;">
    <img weight=100px height=100px src="tu.jpeg" alt="TU">
    <li><a href='#'> About </a></li>
    <li><a href='search.php'>search</a></li>
    <li><a href='doctor.php'>Doctor</a></li>
    <li><a href='patient.php'>Patient</a></li>
    <li><a href='index.php'>Home</a></li>
</div> 
<center><marquee id="marq1">Hospital Management System </marquee> </center>
</div>


<div id="hello">
    <h1>Welcome to Tezpur Hospital</h1>

    <p>The International Patient Department at Narayana Health is dedicated to ensuring that international patients have a hassle-free, comfortable medical journey. Our department works extensively with doctors, companies, and NGOs around the world to provide access to quality healthcare at affordable prices.</p>


    <p>
        Baby Miracle from Nigeria was treated for a condition known as "Tetralogy of Fallot (TOF)" which is one of the common causes of "blue babies", Dr. Debasis Das Consultant - Cardiac Surgery along with his multidisciplinary...
    </p>
</div>
</body>
<footer style="text-align: center;">
	<a href="index.php">logout</a>
</footer>
</html>
