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
       	   <h4>Name of the person</h4>
       	   <input type="text" name="name">
       	   <h4>Organization or where he/she works </h4>
       	   <input type="text" name="organization"><br/>
           <h4>Organization's city</h4>
           <input type="text" name="place"><br/>
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
	$name=($_POST["name"]);
	$organization=($_POST["organization"]);
  $place=($_POST["place"]);
  $details=($_POST["details"]);
	$sql="INSERT INTO homecard3(name,organization,place,details,picsource) VALUES('$name','$organization','$place','$details','$folder')";
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



