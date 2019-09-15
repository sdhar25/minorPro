<?php
error_reporting(0);
session_start();
include("connection.php");

?>

<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
       <form action="" method="post" enctype="multipart/form-data">
       	   <h4>websites</h4>
       	   <input type="text" name="website">
       	   
       	   
           <h4>Details please-</h4>           
          <textarea  class="form-control" rows="7" cols="50" name="details"></textarea>
          <p></p>
       	   <input type="file" name="uploadfile" value="">
       	   <input type="submit" name="submit" value="upload file">
       </form>
</body>
</html>

<?php
   //$folder="img2/";
   //echo $_FILES["uploadfile"];  //printing array which consist of details of all image
   $filename=$_FILES['uploadfile']['name'];
   $tempname=$_FILES['uploadfile']['tmp_name']; 
   $folder = "img/".$filename;
   echo $folder;
   move_uploaded_file($tempname,$folder);
   //copy($_FILES['uploadfile']['tmp_name'], $folder);

   if($filename!="")
   {
	$website=($_POST["website"]);
	
  $details=($_POST["details"]);
	$sql="INSERT INTO nexcon(website,details,picsource) VALUES('$website','$details','$folder')";
	$data=mysqli_query($con,$sql);
	  if($data)
	  {
	  	echo "<br>data inserted</br>";
	  }
    }
   else
    {
   echo "files are required";
    }
?>



