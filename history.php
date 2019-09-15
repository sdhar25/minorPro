<?php
include ("header.php");
include("connection.php");
error_reporting(0);
?>
<head>
	<style>
	
.car1 img{
	padding-top: 50px;
	width: 1500px;
	
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
	padding-top: 50px;
}
.bulletedtext{
	padding-bottom: 20px;
}
</style>
</head>

<?php
     function make_query($con)
                  {
         	  
                       $query="SELECT * from historycar ORDER BY id ASC";
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
								<img src="'.$row["picsource"].'"class="img-fluid" width="" height=""">
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
                <div class="container-fluid col-md-12 col-lg-12 col-sm-12 col-xs-12">
                	<div class="wow bounceInLeft">
                    <div class="car1" class="car1">
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
                </div>






              <div class="maintext" id="maintext">
              	<div class="container">
                 <h1 class="display-5 text-center wow fadeInUp" data-wow-delay="0.6s">OUR HISTORY</h1>             
                  
                  	<div class="row col-lg-12">
                  		<div class="text-justified wow fadeInLeft" data-wow-delay="1.0s">
                   <?php

		               $query="SELECT * from historytext";
				       $data=mysqli_query($con,$query);
				       $total=mysqli_num_rows($data);
				       if($total!=0)
                       {
				       while($result=mysqli_fetch_assoc($data))
				       {
				       	echo nl2br($result['bigtext']);
				       }
				       }
				       else
						   {
						     echo "";
						   }
						   ?>
                       </div>
                  </div>
                 
                </div>
              </div>
              <!--bulleted text-->
      <div class="bulletedtext" id="bulletedtext">
      	<div class="container">
      		<div class="row col-lg-12">
      			<div class="text-justified wow fadeInLeft" data-wow-delay="1.0s">
      				<p></p>
                   <?php
                       $query1="SELECT * FROM historybullet";
				       $data1=mysqli_query($con,$query1);
				       $total1=mysqli_num_rows($data1);
				       if($total1!=0)
				       {
                         while($result1=mysqli_fetch_assoc($data1))
                         {
                     ?>
                         	<ul class=""><li class="list-group-item-circle"><?php echo $result1['midtext'];?></li></ul>
                    <?php
				       }}
				       else
				       {

				       }


                   ?>
      			</div>
      			
      		</div>
      		
      	</div>
      	
      </div>
                 <?php
                  include ("footer.php");
                  ?>