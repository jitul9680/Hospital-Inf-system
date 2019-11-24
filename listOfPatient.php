<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Patient</title>
    <link rel="stylesheet" type="text/css" href="use.css">
    <link rel="stylesheet" type="text/css" href="use2.css">
<style type=text/css>
th
{
    margin-left:50;
    padding :5px;
}
body
{
background-image:url('wal7.jpeg');
}


</style>
</head>
<body>
<form method="POST" name="lop">
<center><h3 class="heading"> List of patient : </h3></center>
<table cellpadding="10">
<th>SL.No</td>
<th>PID</th>
<th>FName</th>
<th>LName</th>
<th>Age</th>
<th>Weight</th>
<th>Gender</th>
<th>Address </th>
<th>Phone No</th>
<th>Disease</th>
<th>Medicines</th>
<th> Patient Type</th>
<th> Operation</th>
<tr>
<?php   
if(strcmp($_GET['by'],"0")==0)  
{  
    
   if(strcmp($_GET['by'],"0")==0) 
   $query_str=mysqli_query($conn,"select * from patient");
	$count=0;
	while($data=mysqli_fetch_assoc($query_str))
    { 	 $count=$count+1;
      echo"
	<tr>
	<td> ". $count." </td>
	<td> ". $data['patient_id']." </td>
	<td> ". $data['fname']." </td>
	<td> ". $data['lname']." </td>
	<td> ". $data['age']." </td>
	<td> ". $data['weight']." </td>
	<td> ". $data['gender']." </td>
	<td> ". $data['address']." </td>
	<td> ". $data['mob_no']." </td>
	<td> ". $data['disease']." </td>
	<td> ". $data['medicines']." </td>
  <td> ". $data['patient_type']." </td> 
  <td><a href='uppa.php?sn=$data[patient_id] & jn=$data[patient_type]' onclick='return checkdelete()'> Delete </td>
        </tr>"
        ?>
	<?php  
 }
?>


<?php
}

 else  
 {    $searchBy=$_POST['searchBy'];
     $searchField=$_POST['searchField'];
  if(strcmp($searchBy,"patient_id")==0)
  {  


    $query_str=mysqli_query($conn,"select * from patient where patient_id='$searchField'");

    $count=0;
	while($data=mysqli_fetch_assoc($query_str))
    { 	 $count=$count+1;
      echo"
	<tr>
	<td> ". $count." </td>
	<td> ". $data['patient_id']." </td>
	<td> ". $data['fname']." </td>
	<td> ". $data['lname']." </td>
	<td> ". $data['age']." </td>
	<td> ". $data['weight']." </td>
	<td> ". $data['gender']." </td>
	<td> ". $data['address']." </td>
	<td> ". $data['mob_no']." </td>
	<td> ". $data['disease']." </td>
	<td> ". $data['medicines']." </td>
  <td> ". $data['patient_type']." </td> 
        </tr>"
        ?>
	<?php  
 }
?>

<?php
  }
  else   if(strcmp($searchBy,"pLastName")==0)
 {   


  $query_str=mysqli_query($conn,"select * from patient WHERE lName='$searchField'");

  $count=0;
	while($data=mysqli_fetch_assoc($query_str))
    { 	 $count=$count+1;
      echo"
	<tr>
	<td> ". $count." </td>
	<td> ". $data['patient_id']." </td>
	<td> ". $data['fname']." </td>
	<td> ". $data['lname']." </td>
	<td> ". $data['age']." </td>
	<td> ". $data['weight']." </td>
	<td> ". $data['gender']." </td>
	<td> ". $data['address']." </td>
	<td> ". $data['mob_no']." </td>
	<td> ". $data['disease']." </td>
	<td> ". $data['medicines']." </td>
  <td> ". $data['patient_type']." </td> 
        </tr>"
        ?>
	<?php  
 }
?>

<?php

   // echo " IN lastname "; 
 } 
  else   if(strcmp($searchBy,"pFirstName")==0)
 { 

  $query_str=mysqli_query($conn,"select * from patient where fName='$searchField'");
   // echo " In PFIrst name "; 
  $count=0;
	while($data=mysqli_fetch_assoc($query_str))
    { 	 $count=$count+1;
      echo"
	<tr>
	<td> ". $count." </td>
	<td> ". $data['patient_id']." </td>
	<td> ". $data['fname']." </td>
	<td> ". $data['lname']." </td>
	<td> ". $data['age']." </td>
	<td> ". $data['weight']." </td>
	<td> ". $data['gender']." </td>
	<td> ". $data['address']." </td>
	<td> ". $data['mob_no']." </td>
	<td> ". $data['disease']." </td>
	<td> ". $data['medicines']." </td>
  <td> ". $data['patient_type']." </td> 
        </tr>"
        ?>
	<?php  
 }
?>
<?php
 } 
}


?>



	
</table>
</body>

<script type="text/javascript">
  
function checkdelete()
{
  return confirm('Are  you sure to delte the data???');
}

</script>
</html>
