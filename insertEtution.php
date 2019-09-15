<?php
error_reporting(0);
include("connection4.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
       <form action="" method="post" enctype="multipart/form-data">
       	   <h4>Title</h4>
       	   <input type="text" name="title">
       	   <h4>details</h4>
       	   <textarea rows="5" cols="40" name="details" required=""></textarea>
       	   <br/>
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
	$title=($_POST["title"]);
	$details=($_POST["details"]);
	$sql="INSERT INTO etution(title,details,picsource) VALUES('$title','$details','$folder')";
	$data=mysqli_query($conn,$sql);
	  if($data)
	  {
	  	echo "<br><p><b>data inserted<b><p></br>";
	  }
    }
   else
    {
   echo "files are required";
    }
?>



