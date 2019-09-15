<?php
session_start();
error_reporting(0);
include("connection4.php");
 include ("adminHeader.php");
$userprofile= $_SESSION['username'];
$oldpic1=$_SESSION['pic'];
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
if(isset($_POST['edit']))
{
  $_SESSION['title']="";
  $_SESSION['details']="";
  $_SESSION['pic']="";
  foreach($_POST['edit'] as $key=>$val) break;
  $_SESSION['id']=$key;
  //echo $key;
  $query = "SELECT * FROM etution where id='$key'";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  if($total!=0)
  {
    //echo "Data fetched";
    while($row=mysqli_fetch_assoc($data))
    {
      $_SESSION['title']=$row['title'];
      $_SESSION['details']=$row['details'];
       $_SESSION['pic']=$row['picsource'];
       //$oldpic1=$_SESSION['pic'];
    }
  }
  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style>
.look
{
  padding-top: 50px;
}
</style>
</head>
<body>
  
  <div class="look" id="look">
    <div class="container col-lg-6">
       <form  class="form-group" action="" method="post" enctype="multipart/form-data">
       	   <h4>Place</h4>
       	   <input class="form-control" type="text" name="title" value=<?php echo $_SESSION['title'];?>>
       	   <h4>Details</h4>
       	   <textarea class="form-control" rows="5" cols="40" name="details"><?php echo($_SESSION['details']);?></textarea>
       	   <br/>
           <img src="<?php  echo $_SESSION['pic']; ?>" height="150" width="150" /></p>
           <label class="control-label"><small>Picture must be less than 2 Mb</small></label>
       	   <input type="file" class="form-control" name="uploadfile1" value=<?php echo $_SESSION['pic'];?>>
           
           <br>
       	   <input class="btn btn-primary" type="submit" name="submit" value="update file">
       	   
       </form>
     </div>
     </div>
</body>
</html>

<?php
  if($_POST['submit'])
  {
  
    $id=$_SESSION['id'];
  	$title=$_POST['title'];
  	$details=$_POST['details'];
  	$pic=$_POST['uploadfile1'];
  	
    //echo $id;
  	
  	
    if(isset($_POST['title']))
    {
      $query = "UPDATE etution SET title='$title' where id='$id'";
      $data1=mysqli_query($conn,$query);
    }
    if(isset($_POST['details']))
    {
      $query = "UPDATE etution SET details='$details' where id='$id'";
      $data2=mysqli_query($conn,$query);
    }
  	if(isset($_FILES['uploadfile1']))
  	{
      //echo "HEllo";      
     // unlink($_SESSION['pic']);
  		$filename=$_FILES['uploadfile1']['name'];
      $tempname=$_FILES['uploadfile1']['tmp_name']; 
  		$folder = "img/".$filename;
  		echo $folder;
   		if(move_uploaded_file($tempname,$folder)) 
      {
         $query = "UPDATE etution SET title='$title', details='$details', picsource='$folder' where id='$id'";
         $data3=mysqli_query($conn,$query);
         unlink($oldpic1);
      }
   }
  	
   
  	 if($data1 || $data2 || $data3)
  	 {
  	   echo "<script type='text/javascript'> alert('Updated successfully');</script>";
?>
  		
       <script>
       window.location.href='adminEtution.php';
       </script>
  	<?php
  	 }
  	 else
  	{
  	echo "Something went wrong.Please try again later";
  	}
  }
  else
  {
  	echo " ";
  }
?>


