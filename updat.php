<?php
include("connect.php");
error_reporting(0);
$mn= $_GET['sn'];
$query="DELETE FROM DOCTOR WHERE DOCTOR_ID='$mn'";
$query_str=mysqli_query($conn,$query);

if($query_str)
{
	echo "<script>alert('Record Deleted')</script>";
	?>

	<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL=http://localhost/dbms/listOfDoctor.php?by=0">

	<?php
}
else
{
	echo "delete fail";
}
?>
