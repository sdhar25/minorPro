<?php
include ("adminHeader.php");
include("connection.php");
require_once 'dbconfig.php';

	error_reporting( ~E_NOTICE );	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];		
		$stmt_edit = $DB_con->prepare('SELECT bigdata, smalldata, picsource FROM historycar WHERE id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: adminhistory.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$bigdata = $_POST['bigdata'];// user name
		$smalldata = $_POST['smalldata'];// user email
			
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
					
		if($imgFile)
		{
			$folder = 'img/'.$imgFile; // upload directory	
			$imgExt = strtolower(pathinfo('img/'.$imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($edit_row['picsource']);
					move_uploaded_file($tmp_dir,'img/'.$imgFile);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}	
		}
		else
		{
			// if no image selected the old image remain as it is.
			$folder = $edit_row['picsource']; // old image from database
		}	
						
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE historycar 
									     SET bigdata=:bigdata, 
										     smalldata=:smalldata, 
										     picsource=:upic 
								       WHERE id=:uid');
			$stmt->bindParam(':bigdata',$bigdata);
			$stmt->bindParam(':smalldata',$smalldata);
			$stmt->bindParam(':upic',$folder);
			$stmt->bindParam(':uid',$id);
				
			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='adminhistory.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}
		
		}
		
						
	}
	
?>

<body>
<div class="container">
	<div class="page-header">
    	<h1 class="h2">Update Carousel Data</h1>
    </div>
<div class="clearfix"></div>
<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span><i class="fas fa-info"></i></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>
   
    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Bigdata.</label></td>
        <td><input class="form-control" type="text" name="bigdata" value="<?php echo $bigdata; ?>" required /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Small Data.</label></td>
        <td><input class="form-control" type="text" name="smalldata" value="<?php echo $smalldata; ?>" required /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Carousel Img.<br><small>Picture must be less than 2 Mb</small></label></td>
        <td>
        	<p><img src="<?php  echo $_GET['ps']; ?>" height="150" width="150" /></p>
        	<input class="input-group" type="file" name="user_image" accept="image/*" />
        </td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-default">
        <span><i class="fa fa-save"></i></span> Update
        </button>       
        </td>
    </tr>
    
    </table>
    
</form>
</div>
</body>
