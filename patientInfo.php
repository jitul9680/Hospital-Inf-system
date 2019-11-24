<?php
include("connect.php");
?>
<?php
if($_POST['submit'])
{  
    $fname=$_POST['fname'];
  //  echo "fname : ".$fname;
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $phoneno=$_POST['phoneNo'];
    $disease=$_POST['disease'];
    $doctorid=$_POST['doctorId'];
    $address=$_POST['address'];
    $medicine=$_POST['medicine'];
    $pattype=$_POST['patType'];
   
if(strcmp($pattype,"in")==0)
{
    $addate=$_POST['admDate'];
    $didate=$_POST['disDate'];
    $roomno=$_POST['roomNo'];
    $bedno=$_POST['bedNo'];
}
else if(strcmp($pattype,"out")==0)
{  
    $outpatdate=$_POST['outPatDate'];
}
else if(strcmp($pattype,"reffered")==0)
{ 
    $refto=$_POST['refferedTo'];
    $refdate=$_POST['refferedDate'];
}
$rn=uniqid();
$q="INSERT INTO PATIENT VALUES('$rn','$fname','$lname','$age','$weight','$gender','$address','$phoneno','$disease','$medicine','$pattype')";
$q_str=mysqli_query($conn,$q);
if($q_str)
{  
    echo "inserted sucessfully";
}

if(strcmp($pattype,"in")==0)
{ 
    $rn2=uniqid();
$q="INSERT INTO INDOR VALUES('$rn','$rn2','$addate','$didate','$roomno','$bedno')";
$q_str=mysqli_query($conn,$q);
if($q_str)
{  
    echo "inserted sucessfully";
}
}
else if(strcmp($pattype,"out")==0)
{

 $rn3=uniqid();
$q="INSERT INTO OUTDOOR VALUES('$rn','$rn3','$outpatdate')";
$q_str=mysqli_query($conn,$q);
if($q_str)
{  
    echo "inserted sucessfully";
}
}
else   
{ 
  $rn4=uniqid();
$q="INSERT INTO REFFERED VALUES('$rn4','$refdate','$refto','$rn')";
$q_str=mysqli_query($conn,$q);
if($q_str)
{  
    echo "inserted sucessfully";
}
}
}   
 else echo "please submit first";
?>
