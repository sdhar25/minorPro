<?php
include ("adminHeader.php");
include("connection.php");
error_reporting(0);
?>
<?php
$_GET['id'];
$_GET['txt'];
?>

<div class="maintext" id="maintext">
	<div class="container">
		<h1 class="display-5 text-center">"MAIN TEXT" DETAILS</h1>
		 <form action="" method="GET">
		 	<div class="col-md-6">
		 		<div class="form-group">
		 			<label><b>ID</b></label>
		 			<input type="text" name="id" class="form-control" required="" readonly="true" value="<?php echo $_GET['id']?>">
		 		</div>
		 	</div>
		 	<div class="col-md-6">
		 		<div class="form-group">
		 			<label><b>Paragraphed Text:- </b></label>
		 			<textarea class="form-control" rows="19"  name="hometxt" required=""><?php echo (nl2br($_GET['txt']));?></textarea>
		 		</div>
		 		<div class="col-md-6">
		 			<input type="submit"  class="btn btn-primary" name="submit" value="UPDATE"> 
                </div>
		 	</div>
		 	
		 </form>
		
	</div>
	
</div>
<?php
   if($_GET['submit'])
   {
     $id=$_GET['id'];
     $hometxt=$_GET['hometxt'];
     $query="UPDATE hometext SET hometxt='$hometxt' WHERE id=$id ";
     $data=mysqli_query($con,$query);
     if($data)
     {
         echo "<script>
               alert('Data updated');
               window.location.assign('adminIndex.php');
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