<?php
session_start();
include("connection.php");

?>
<form  action="" method="post">
Username: <input type="text" name="username" value=""/><br><br>
Password: <input type="password" name="password" value=""/><br><br>
<input type="submit"  name="submit" value="LOGIN"/>
</form>

<?php
if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$pwd=$_POST['password'];
	$query="SELECT * FROM ADMINLOGIN1 where username='$user' && password='$pwd'";
	$data=mysqli_query($con,$query);
	$total=mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['username']=$user;
		//header('location:adminfirstpage.php');
		echo "<script>
               alert('Successfully logged in');
               window.location.assign('adminfirstpage.php');
         </script>";
	}
	else
	{
		echo "Login Failed";
	}
}
