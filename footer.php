<head>
	<style>
.footer{
	padding:30px;
	color:white;
	background-color: #282828;
}
  </style>
</head>

<!--footer-->
<div id=footer" class="footer">
  <div class="container">
  	<div class="row">
  		<div class="col-lg-4 col-md-4">
  			<h4>Contact Us</h4>
  			
  				<?php
                                   $query="SELECT * from contactus";
							       $data=mysqli_query($con,$query);
							       $total=mysqli_num_rows($data);
							       if($total!=0)
			                       {
							       while($result=mysqli_fetch_assoc($data))
							       {?>
							       	
							       	<p><i class="fa fa-home" aria-hidden="true"></i><?php  echo $result['address'];?></p>
							       	<p> <i class="fa fa-envelope" aria-hidden="true"></i><?php echo " ". $result['email'] ?></p>
							       	<p> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo " ". $result['phone']?></p>
							       
							       <?php
							         }
							         }
							         else
							         {
							         	echo " ";
							         }
  				?>
  			
  		</div>
  		<div class="col-lg-4 col-md-4">
  			<h4>About</h4>
  			<a href="history.php" class="text-white"><i class="fa fa-square-o" aria-hidden="true" href="history.php"></i>
        Our History</a>
        <p></p>
  			<a href="missviss.php" class="text-white"><i class="fa fa-square-o" aria-hidden="true"></i>Mission&Vision</a>
  		</div>
  		<div class="col-lg-4 col-md-4">
  			<h4>&copy July,2018- <?php echo date("Y"); ?></h4>
  		</div>
  		
  	</div>
  	
  </div>
</div>