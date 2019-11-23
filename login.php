<?php
session_start();
include ("connect.php");

?>
<form action="" method="post">
	Username: <input type="text "name="username" value=""/><br><br>
	Password: <input type="text "name="password" value=""/><br><br>
	<input type="submit" name="submit" value="Login"/>
</form>

<?php
if(isset($_POST['submit']))
{
	$used=$_POST['username'];
	//echo $used;
	$pwd=$_POST['password'];
	$query="SELECT * FROM myacc WHERE userid='$used' && password='$pwd'  ";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$user;
		header('location: page1.php');
	}
	else
	{
		echo 'login failed';
	}

}
?>
