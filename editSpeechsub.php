<?php
include ("adminHeader.php");
include("connection.php");
error_reporting(0);
?>
<?php
$_GET['id'];
$_GET['cc'];
$_GET['cn'];
$_GET['cd'];
?>

<div class="maintext" id="maintext">
	<div class="container">
		<h1 class="display-5 text-center">"SUBJECTS" DETAILS</h1>
		 <form action="" method="GET">
		 	<div class="col-md-6">
		 		<div class="form-group">
		 			<label><b>ID</b></label>
		 			<input type="text" name="id" class="form-control" required="" readonly="true" value="<?php echo $_GET['id']?>">
		 		</div>
		 	</div>
		 	<div class="col-md-6">
		 		<div class="form-group">
		 			<label><b>Course Code:- </b></label>
		 			<input type="text" class="form-control" name="coursecode" required="" value="<?php echo $_GET['cc'];?>">
		 		</div>
		 	</div>
		 	<div class="col-md-6">
		 		<div class="form-group">
		 			<label><b>Course Name:- </b></label>
		 			<input type="text" class="form-control" name="coursename" required="" value="<?php echo nl2br($_GET['cn']);?>">
		 		</div>
		 	</div>
		 	<div class="col-md-6">
		 		<div class="form-group">
		 			<label><b>Course Duration:- </b></label>
		 			<input type="text" class="form-control" name="coursedu" required="" value="<?php echo $_GET['cd'];?>">
		 		</div>
		 	</div>
		 		<input type="submit"  class="btn btn-primary" name="submit" value="UPDATE"> 
		 	</div>
		 	
		 </form>
		
	</div>
	
</div>
<?php
   if($_GET['submit'])
   {
     $id=$_GET['id'];
     $coursecode=$_GET['coursecode'];
     $coursename=$_GET['coursename'];
     $coursedu=$_GET['coursedu'];
     $query="UPDATE speechsub SET coursecode='$coursecode',coursename='$coursename',coursedu='$coursedu' WHERE id=$id ";
     $data=mysqli_query($con,$query);
     if($data)
     {
         echo "<script>
               alert('Data updated');
               window.location.assign('adminspeech.php');
         </script>";
     }
     else
     {
        echo "<script> alert('Something Went Wrong');</script>";
     }
   }
   else
   {

   }
?>