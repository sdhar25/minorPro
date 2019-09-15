<?php
include ("header.php");
include("connection.php");
error_reporting(0);
?>
<head>
	<style>
.car1 img{
	
	width: 1500px

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

</head>
<?php
                  function make_query($con)
                  {
         	  
                       $query="SELECT * from healthcar ORDER BY id ASC";
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
								<img src="'.$row["picsource"].'"class="img-fluid" width="1200"">
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
            	<div class="maintext">
			              <h1 class="display-5 text-center">HEALTH CAMPS</h1>
			              
			              
			              	<div class="text-justified lead wow fadeInLeft" data-wow-delay="1.2s">
			                    <?php

					               $query="SELECT * FROM healthcaretext";
							       $data=mysqli_query($con,$query);
							       $total=mysqli_num_rows($data);
							       if($total!=0)
			                       {
							       while($result=mysqli_fetch_assoc($data))
							       {
							       	
							       	echo nl2br($result['healthcaretxt'],false);
							       }
							       }
							       else
									   {
									     echo " ";
									   }

			                     ?>
			                     	</div>

                <?php
                             $query="SELECT * FROM health_tbl ORDER BY post_id ASC";
                             $query2="SELECT * FROM health_tbl2015 ORDER BY post_id ASC";
                             $query3="SELECT * FROM health_tbl2016 ORDER BY post_id ASC";
                             $query4=" SELECT * FROM health_tabel2017 ORDER BY post_id ASC";
							
							 $result=mysqli_query($con,$query);
							 $result2=mysqli_query($con,$query2);
			                 
			                 $data3=mysqli_query($con,$query3);
							 $data4=mysqli_query($con,$query4);
							 
							 $total=mysqli_num_rows($result);
                ?>
 
                <div class="accordiantext">
                	<div class="display-6 text-justified"><b>Various Health Camps organized by INCD </b>
			       </div>
                </div>  
                <div class="accordion" id="accordion">
                  
                <div class="card" id="posts">  
                <?php  
                	
                while(($row = mysqli_fetch_array($result))&&($row2 = mysqli_fetch_array($result2)))  
                {  
                ?>  
                     <div class="card card-default">  
                            
                               <div class="card-header">  
                                
                                    <a class="card-link"  data-toggle="collapse" href="#collapseOne"><i class="fa fa-angle-down"></i><?php echo $row["post_title"]; ?></a>  
                               </div>  
                            
                  
                          <div id="collapseOne" class="collapse hide" data-parent="#accordion">  
                               <div class="card-body">  
                               <li><?php echo nl2br( nl2br($row["post_desc"],false));
                                ?>  
                               </li>
                               </div>
                                
                          </div>  
                     </div> <!--2014ends-->
                       <!--2015-->
                           <div class="card card-default">  
                            
                               <div class="card-header">  
                                
                                    <a class="collapsed card-link"  data-toggle="collapse" href="#collapse2015"><i class="fa fa-angle-down"></i><?php echo $row2["post_title"]; ?></a>  
                               </div>  
                            
                  
                          <div id="collapse2015" class="collapse" data-parent="#accordion">  
                               <div class="card-body">  
                               <li><?php echo nl2br( nl2br($row2["post_desc"],false));
                                ?>  
                               </li>
                               </div>
                                 
                          </div>  
                     </div>
                     <?php
                      }
                      ?>

                       <!--2015 end-->
                       <!--2016-->
                         <?php
                         $result3=mysqli_fetch_assoc($data3);
                         
                         ?>
                         <div class="card card-default">  
                            
                               <div class="card-header">  
                                
                                    <a class="collapsed card-link"  data-toggle="collapse" href="#collapse2016"><i class="fa fa-angle-down"></i><?php echo $result3["post_title"]; ?></a>  
                               </div>
                               <div id="collapse2016" class="collapse" data-parent="#accordion">  
		                        <div class="card-body">
                          <?php 
                          while ($result3=mysqli_fetch_assoc($data3))
                          {
                         ?>                
		                            
		                               <p class="text-justify text-no"><ul class=""><li class="list-group-item-circle"><?php echo(nl2br($result3["post_desc"]));?>  
		                               </li></ul></p>
		                               
                            <?php
                          }
                          ?>
                                   </div>
		                                 
		                          </div>  
                            </div>
                       <!--2016 ends-->
                         <!--2017 start-->
                         <?php
                         $result4=mysqli_fetch_assoc($data4);
                         
                         ?>
                         <div class="card card-default">  
                            
                               <div class="card-header">  
                                
                                    <a class="collapsed card-link"  data-toggle="collapse" href="#collapse2017"><i class="fa fa-angle-down"></i><?php echo $result4["post_title"]; ?></a>  
                               </div>
                               <div id="collapse2017" class="collapse" data-parent="#accordion">  
		                        <div class="card-body">
                          <?php 
                          while($result4=mysqli_fetch_assoc($data4))
                          {
                         ?>                
		                            
		                               <p class="text-justify text-no"><ul class=""><li class="list-group-item-circle"><?php echo(nl2br($result4["post_desc"]));?>  
		                               </li></ul></p>
		                               
                            <?php
                          }
                          ?>
                                   </div>
		                                 
		                          </div>  
                            </div>
                         <!--end 2017-->  
                           
				                                          
                  
                </div> 
                </div> 
                </div>
            </div>
            <?php
                  include ("footer.php");
                  ?>