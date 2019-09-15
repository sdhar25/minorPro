<?php
include ("header.php");
include("connection.php");
error_reporting(0);
?>

<?php
                  function make_query($con)
                  {
         	  
                       $query="SELECT * from backgroundcar ORDER BY id ASC";
				       $result=mysqli_query($con,$query);
				       return $result;
		           }

		           function make_slide_indicator($con)
						{
							$output='';
							$count=0;
							$result=make_query($con);
							while($row = mysqli_fetch_array($result))
							 {
							 	if($count == 0)
							 	{
							 		$output .='
							 		<li data-target="#demo" data-slide-to="'.$count.'" class="active"></li>
							 		';
							 	}
							 	else
							 	{
							 		$output .='
							 		<li data-target="#demo" data-slide-to="'.$count.'"></li>
							 		';
							 	}
							 	$count = $count + 1;			 	
							 }
							 return $output;
						}
						function make_slide($con)
						{
							$output = '';
							$count = 0;
							$result = make_query($con);
							while($row = mysqli_fetch_array($result))
							{
								if($count == 0)
								{
									$output .= '<div class="carousel-item active">';
								}
								else
								{
									$output .= '<div class="carousel-item">';
								}
								$output .='
								<img src="'.$row["picsource"].'"class="img-fluid" width="1200" height="400"">
								<div class="carousel-caption">
								  <h3>'.$row["bigdata"].'</h3>
								  <p>'.$row["smalldata"].'</p>
								</div>
								</div>
								';
								$count = $count + 1;
							}
							return $output;
						}
?>
        
              <div class="ml-5 mr-4">
                   <div id="demo" class="carousel slide" data-ride="carousel">
			                      <ol class="carousel-indicators">
			                        <?php echo make_slide_indicator($con); ?>
			                      </ol>
			            
				                 <div class="carousel-inner">
				            	  <?php echo make_slide($con); ?>
				                </div>
			            	
		                         <a class="carousel-control-prev" href="#demo" data-slide="prev">
		                              <span class="carousel-control-prev-icon"></span>
		                         </a>
		                         <a class="carousel-control-next" href="#demo" data-slide="next">
		                              <span class="carousel-control-next-icon"></span>
		                         </a>
                    </div>
               </div>

                







           
             <div class="jumbotron ml-5 mr-4">
             	
			              <h1 class="display-5 text-center">Organizational background; cultivating skills since 1999 </h1>
			              <hr class="my-4">
			              <p class="lead">
			                    <?php

					               $query="SELECT * from backgroundtext";
							       $data=mysqli_query($con,$query);
							       $total=mysqli_num_rows($data);
							       if($total!=0)
			                       {
							       while($result=mysqli_fetch_assoc($data))
							       {
							       	echo nl2br($result['backgroundtxt']);
							       }
							       }
							       else
									   {
									     echo " ";
									   }

			                     ?></p>
            
              </div>
