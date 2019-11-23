<?php
include("connect.php");
error_reporting(0);
$mn= $_GET['sn'];
$query="DELETE FROM PATIENT WHERE PATIENT_ID='$mn'";
$q2="DELETE FROM INDOR WHERE pid='$mn'";
$q2="DELETE FROM OUTDOOR WHERE pid='$mn'";
$q2="DELETE FROM REFERRED WHERE pid='$mn'";
$query_str=mysqli_query($conn,$query);

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
