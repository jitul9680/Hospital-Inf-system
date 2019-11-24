<?php
include("connect.php");
?>
<?php
if($_POST['submit'])
{   



  $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $phoneNo=$_POST['phoneNo'];
    $did=$_POST['doctorId'];
    $spec=$_POST['spec'];
     $address=$_POST['address'];


     if($fname!="" && $lname!="" && $age!="" && $dob!="" && $gender!="" && $phoneNo!="" && $did!="" && $spec!="" && $address !="")

     {
   //echo $fname.$lname.$age.$dob.$gender.$phoneNo.$doctorId.$spec.$address;
    $rn=uniqid();
   //echo "random Num = ".$rn;
    $que="INSERT INTO DOCTOR VALUES ('$rn','$fname','$lname','$age','$dob','$gender','$phoneNo','$did','$spec','$address')";
$data = mysqli_query($conn, $que);

if($data)
{
  echo "data inserted into database";
}


}
else

{


  echo "all fields are required";
}
}


?>