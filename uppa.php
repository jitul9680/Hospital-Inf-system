<?php
include("connect.php");
error_reporting(0);
$mn= $_GET['sn'];
$query="DELETE FROM PATIENT WHERE PATIENT_ID='$mn'";
$q2="DELETE FROM INDOR WHERE pid='$mn'";
$q3="DELETE FROM OUTDOOR WHERE pid='$mn'";
$q4="DELETE FROM REFERRED WHERE pid='$mn'";
$query_str=mysqli_query($conn,$query);
$quer=mysqli_query($conn,$q2);
$que=mysqli_query($conn,$q3);
$qu=mysqli_query($conn,$q4);

if($query_str)
{
	echo "<script>alert('Record Deleted')</script>";
	?>

	<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL=http://localhost/dbms/listOfPatient.php?by=0">

	<?php
}
else
{
	echo "delete fail";
}
?>
