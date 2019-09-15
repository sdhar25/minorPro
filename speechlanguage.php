<?php
include ("header.php");
include("connection.php");
error_reporting(0);
?>
<style>
.car1 img{
	padding-top: 50px;
	width: 1500px;
	height: 450px;

}
.car1 h1{
	color:black;
	font-size: 42px;
	background: rgba(100,200,200,0.7);
    height: 50px;
    
	}

.car1 h2{
	color: black;
	font-size: 22px;	
    background: rgba(100,200,200,0.7);
    height: 50px;
    padding-top: 10px;
    
}
.maintext{
    padding-top: 80px;
	}
.accordiantext{
	padding-top: 10px;
}
.accordion{
	padding-bottom: 50px;
}
</style>
<?php
                  function make_query($con)
                  {
         	  
                       $query="SELECT * from speechcar ORDER BY id ASC";
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
								<img src="'.$row["picsource"].'"class="img-fluid" width="1200" height="300"">
								<div class="carousel-caption">
								  <h1>'.$row["bigdata"].'</h1>
								  <h2>'.$row["smalldata"].'</h2>
								</div>
								</div>
								';
								$count = $count + 1;
							}
							return $output;
						}
?>

              <div class="container-fluid">
              	<div id="car1" class="car1">
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
               </div>

            <div class="container">
                <div class="maintext" id="maintext">
			              <h1 class="display-5 text-center">Diploma program on Speech Therapy </h1>
			              
			              <p class="lead">
			                    <?php

					               $query="SELECT * from speechinto";
							       $data=mysqli_query($con,$query);
							       $total=mysqli_num_rows($data);
							       if($total!=0)
			                       {
							       while($result=mysqli_fetch_assoc($data))
							       {
							       	echo $result['intro'];
							       }
							       }
							       else
									   {
									     echo " ";
									   }

			                     ?>
			                     	<div id="accordion">
									    <div class="card">
									      <div class="card-header">
									        <a class="card-link" data-toggle="collapse" href="#collapseOne">

						        	<?php
								          $query="SELECT * from speechsub";
									       $data=mysqli_query($con,$query);
									       $total=mysqli_num_rows($data);
									       if($total!=0)
					                       {
									       while($result=mysqli_fetch_assoc($data))
									       {
									       	echo "<i class='fa fa-angle-down'></i>".$result['coursename'];
						        	?>
						          
						        </a>
						      </div>
						      <div id="collapseOne" class="collapse hide" data-parent="#accordion">
						      <div class="card-body">
                               <?php
						       	echo "<b><i>Course Code- </i></b>".$result['coursecode'];
                                echo "<br><br/><b><i>Course Duration- </i></b>".$result['coursedu'];
                                ?>
                                <?php

				                                }
				                                }
				                                else
				                                {
				                                	echo " ";
				                                }
				                    ?>

			                                <?php

			                                       $query4="SELECT * from bsdiplomafirst";
											       $data4=mysqli_query($con,$query4);
											       $total4=mysqli_num_rows($data4);

											      if($total4!=0)
											        {
			                               ?>
			                                         <div class="table-responsive-sm-md-lg-xl">
			                                         	<table class="table table-bordered table-hover">
			                                         		<thead class="thead-dark">
			                                         			<tr>
			                                         				<th>S.No</th>
			                                         				<th>Subject Code</th>
			                                         				<th>Subject</th>

			                                         			</tr>
			                                         			<tr>
			                                         				<th colspan="3">First Year</th>
			                                         			</tr>
			                                         		</thead>
			                                         		<tbody>
			                            <?php		
                                              while($result4=mysqli_fetch_assoc($data4))
												{
													echo "<tr>
													<td>".$result4['id']."</td>
													<td>".$result4['subjectcode']."</td>
													<td>".$result4['subject']."</td>                    
												    </tr>";
												}
												     }
															         
												else
												{
												  echo " ";
												}
										?>
															         
			                                         		</tbody>
			                                         		
			                                         	</table>
			                                         </div>
			                                <?php

			                                       $query4="SELECT * from bsdiplomasec";
											       $data4=mysqli_query($con,$query4);
											       $total4=mysqli_num_rows($data4);

											      if($total4!=0)
											        {
			                               ?>
			                                    <div class="container-fluid">
			                                         <div class="table-responsive">
			                                         	<table class="table table-bordered table-hover">
			                                         		<thead class="thead-dark">
			                                         			<tr>
			                                         				<th>S.No</th>
			                                         				<th>Subject Code</th>
			                                         				<th>Subject</th>

			                                         			</tr>
			                                         			<tr>
			                                         				<th colspan="3">SECOND YEAR</th>
			                                         			</tr>
			                                         		</thead>
			                                         		<tbody>
			                            <?php		
                                              while($result4=mysqli_fetch_assoc($data4))
												{
													echo "<tr>
													<td>".$result4['id']."</td>
													<td>".$result4['subjectcode']."</td>
													<td>".$result4['subject']."</td>                    
												    </tr>";
												}
												     }
															         
												else
												{
												  echo " ";
												}
										?>
											</tbody>
			                               </table>
			                             </div>
			                         </div>
                              </div>
                              </div>
                            </div>
			              </p>
                         </div>
                </div></div>
                                 <?php
                                  include ("footer.php");
                                  ?>
                         <script type="text/javascript">
		            	     $(document).ready(function(){
		                       $('.collapse').on('shown.bs.collapse',function(){
		                        $(this).parent().find('.fa-angle-down').removeClass('fa-angle-down').addClass('fa-angle-up');
		                   }).on('hidden.bs.collapse',function(){
		                        $(this).parent().find('.fa-angle-up').removeClass('fa-angle-up').addClass('fa-angle-down');
		                   })
		            	});
                </script>