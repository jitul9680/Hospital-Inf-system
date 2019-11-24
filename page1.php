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
      background-image: url("3.jpg"); 
      /*  background-repeat: no-repeat;
       /* background-size: auto;    */
      /*  background-size: 300px 100px; */
} 
#mainHeader
{
   width:100%;
   min-height: 200px;
   background-color:url("3.jpg");
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
    min-height: 150px;
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
  min-height: 400px;
}
#marq1
{
  
  font-size:40px;
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
<div id="header1" style="align-content: center; border-width: 10px;">
    <img weight=130px height=130px src="tu.jpeg" alt="TU">
     <li style="font-size: 20px;background-color:#A7FDB0 ;"><a href='#'> About </a></li>
    <li style="font-size: 20px;background-color:#A7FDB0 ;"><a href='search.php'>search</a></li>
    <li style="font-size: 20px;background-color:#A7FDB0 ;"><a href='doctor.php'>Doctor</a></li>
    <li style="font-size: 20px;background-color:#A7FDB0 ;"><a href='patient'>Patient</a></li>
    <li style="font-size: 20px;background-color:#A7FDB0 ;"><a href='page1.php'>Home</a></li>
</div> 
<center><marquee id="marq1">Hospital Management System </marquee> </center>
</div>


<div id="hello">
    <h1 style="font-size: 60px;text-align: center;">Welcome to ADMIN PAGE</h1>
    
    <p style="font-size: 20px;text-align: center;"> here you can edit,add or delete data</p>
    <p style="font-size: 20px;text-align: center;"> Let's Begin</p>
</div>
</body>
<footer style="text-align: center;">
  <p style="font-size: 20px;text-align: center;background-color: #28F1FC  "><a href="index.php">logout</a></p>
</footer>
</html>
