<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		
		td
		{
			padding: 20px;
		}
	</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Of Doctor </title>
    <link rel="stylesheet" type="text/css" href="use.css">
    <link rel="stylesheet" type="text/css" href="use2.css">
<style type=text/css>

th
{
    margin-left:50;
    padding :5px;
}



</style>
</head>
<body> 
  <div id="back">
<form method="POST" name="lod">
<br>
<center><h3 class="heading"> List of Doctor : </h3></center><br>
<table cellpadding="10">
<th>SL.No</td>
<th>doctor_ID</th>
<th>FName</th>
<th>LName</th>
<th>Age</th>
<th>dob</th>
<th>Gender</th>
<th>Phone No</th>
<th>Doctor U.ID </th>
<th> Specialization</th>
<th>Address</th>
<th>Operations</th>
<tr>
<?php
if(strcmp($_GET['by'],"0")==0)
{

 if(strcmp($_GET['by'],"0")==0)
 $query_str=mysqli_query($conn,"select * from doctor");

        $count=0;

        while($data=mysqli_fetch_assoc($query_str))
    {   

     $count=$count+1;
     echo "
        <tr>
        <td> ".$count. "</td>
        <td> ".$data['doctor_id']." </td>
        <td> ".$data['fname']." </td>
        <td> ".$data['lname']." </td>
        <td> ".$data['age']. "</td>
        <td> ".$data['dob']. "</td>
        <td> ".$data['gender']. "</td>
        <td> ".$data['phoneno']. "</td>
        <td> ".$data['id']. "</td>
        <td> ".$data['specialization']." </td>
        <td> ".$data['address']. "</td>

       <td><a href='updat.php?sn=$data[doctor_id]'onclick='return checkdelete()'> Delete </td>
        </tr>"

        ?>
        <?php
      }
         ?>

    <?php
}
 else
 {   

 	$searchBy=$_POST['searchBy'];
     $searchField=$_POST['searchField'];
     if(strcmp($searchBy,"Doctor_id")==0)
   {  


   		$query_str=mysqli_query($conn,"select * from doctor where doctor_id='$searchField'");  
   		     $count=0;

        while($data=mysqli_fetch_assoc($query_str))
    {   

     $count=$count+1;
     echo "
        <tr>
        <td> ".$count. "</td>
        <td> ".$data['doctor_id']." </td>
        <td> ".$data['fname']." </td>
        <td> ".$data['lname']." </td>
        <td> ".$data['age']. "</td>
        <td> ".$data['dob']. "</td>
        <td> ".$data['gender']. "</td>
        <td> ".$data['phoneno']. "</td>
        <td> ".$data['id']. "</td>
        <td> ".$data['specialization']." </td>
        <td> ".$data['address']. "</td>
        </tr>"

        ?>
        <?php
      }
         ?>

    <?php                                      // echo " IN D.id "; 
   }
     else   if(strcmp($searchBy,"dLastName")==0)
   {  


   			$query_str=mysqli_query($conn,"select * from doctor WHERE lName='$searchField'");
   			     $count=0;

        while($data=mysqli_fetch_assoc($query_str))
    {   

     $count=$count+1;
     echo "
        <tr>
        <td> ".$count. "</td>
        <td> ".$data['doctor_id']." </td>
        <td> ".$data['fname']." </td>
        <td> ".$data['lname']." </td>
        <td> ".$data['age']. "</td>
        <td> ".$data['dob']. "</td>
        <td> ".$data['gender']. "</td>
        <td> ".$data['phoneno']. "</td>
        <td> ".$data['id']. "</td>
        <td> ".$data['specialization']." </td>
        <td> ".$data['address']. "</td>
        </tr>"

        ?>
        <?php
      }
         ?>

    <?php
  //    echo " IN lastname ";
    }
     else if(strcmp($searchBy,"dFirstName")==0)
   {  


   			$query_str=mysqli_query($conn,"select * from doctor where fName='$searchField'");
   			     $count=0;

        while($data=mysqli_fetch_assoc($query_str))
    {   

     $count=$count+1;
     echo "
        <tr>
        <td> ".$count. "</td>
        <td> ".$data['doctor_id']." </td>
        <td> ".$data['fname']." </td>
        <td> ".$data['lname']." </td>
        <td> ".$data['age']. "</td>
        <td> ".$data['dob']. "</td>
        <td> ".$data['gender']. "</td>
        <td> ".$data['phoneno']. "</td>
        <td> ".$data['id']. "</td>
        <td> ".$data['specialization']." </td>
        <td> ".$data['address']. "</td>
        </tr>"

        ?>
        <?php
      }
         ?>

    <?php
    }


}

?>

</tr>
</th>
</table>
</div>
</body>

<script type="text/javascript">
	
function checkdelete()
{
	return confirm('Are  you sure to delte the data???');
}

</script>
</html>
