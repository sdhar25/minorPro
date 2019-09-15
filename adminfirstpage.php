<?php
session_start();
error_reporting(0);
include("connection.php");
$userprofile= $_SESSION['username'];
include("adminHeader.php");
if ($userprofile==true)
{

}
else
{
?>
	<script>
       window.location.href='Admin.php';
     </script>
	<!--header('location:Admin.php');-->
	<?php
}
$query="SELECT * FROM LOGIN where username='$userprofile'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
//$result['name']="UPASANA";
//echo "Welcome ".$result['name'];
?>

<!DOCTYPE HTML>
<body>

<div style="background-color: #e8e0e0; height:100px;"><div style="text-align: center;font-size: 32px;"><p style="padding-top: 25px;">WELCOME<?php echo " ".$result['name'];?></p></div></div>



<div style=" float: right;margin-left: 10px;margin-top: 25px;  border: solid 1px #d0c7c7; padding: 45px;    padding-top: 20px;    margin-right: 10px; width: 1120px;" >
<div>
<p style="padding: 10px;" align="justify">
	Hello<br/><br/>
	From now on you can change the content of ICDN.
	On top there is a navigation bar.Using it 
	navigate the website and perform all the editing.<br/><br/>
	Thank You<br></br>
	From<br>
	Website Creators<br></br>
	(Note:Any problem,please contact us through email or phone number)
	
</p></div>
</div>

</body>
</html>