<?php
include ("adminHeader.php");
include("connection.php");
error_reporting(0);
?>
<?php
$_GET['id'];
$_GET['sc'];
$_GET['sub'];
?>

<div class="maintext" id="maintext">
	<div class="container">
		<h1 class="display-5 text-center">"SECOND YEAR" DETAILS</h1>
		 <form action="" method="GET">
		 	<div class="col-md-6">
		 		<div class="form-group">
		 			<label><b>ID</b></label>
		 			<input type="text" name="id" class="form-control" required="" readonly="true" value="<?php echo $_GET['id']?>">
		 		</div>
		 	</div>
		 	<div class="col-md-6">
		 		<div class="form-group">
		 			<label><b>Subject Code:- </b></label>
		 			<input type="text" class="form-control" name="subjectcode" required="" value="<?php echo $_GET['sc'];?>">
		 		</div>
		 	</div>
		 	<div class="col-md-6">
		 		<div class="form-group">
		 			<label><b>Subject:- </b></label>
		 			<input type="text" class="form-control" name="subject" required="" value="<?php echo nl2br($_GET['sub']);?>">
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
     $subjectcode=$_GET['subjectcode'];
     $subject=$_GET['subject'];
     $query="UPDATE diplomasec SET subjectcode='$subjectcode',subject='$subject' WHERE id=$id ";
     $data=mysqli_query($con,$query);
     if($data)
     {
         echo "<script>
               alert('Data updated');
               window.location.assign('adminphysio.php');
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