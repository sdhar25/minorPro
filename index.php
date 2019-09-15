<?php
include ("header.php");
include("connection.php");
?>
<head>
	<style>

.jumbotron1{
	background-color: #3333CC;
	color: #fff;
}
.maintext{
	padding-top: 50px;
}
.team
{
	padding: 50px 80px;
	text-align: center;

}
.team b,
.team h2,
.team h4{
	margin: 20px 0 10px;
	color: #4c4c4c;
}
.team .h2{
	margin: 20px 0 10px;
	color: #4c4c4c;
}
.team p{
	color: #737373;
}
.team img{
	height: 150px;
	width: 150px;
	margin: 50px;
	border: 1px solid;
	box-shadow: 0px 2px 3px rgba(0,0,0,0.5);
			transition-duration: 0.7s;
}
.team img:hover
		{
			-webkit-transform:scale(1.4);
			transition-duration: 0.7s;
		}
.team button
{
	margin-top: 10px;
	margin-bottom: 20px;
}


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
.car1 h4{
	color: white;
	font-size: 32px;
}
.clients
{
  padding-top: 20px;
  padding: 50px 0 70px;
  background-color: #3399ff;
  
  color: #fff;
}
.clients .h2{
	color: white;
}
.clients h4{
	color: #ffffff;
}
.clients p
{
	padding-bottom: 40px;
}
.clients img
{
	width: 200px;
	
	cursor: pointer;
	margin: 40px 0;
	border: 1px solid black;
	transition: all 500ms ease-in-out;
	margin-left: 100px;
	box-shadow: 0px 2px 3px rgba(0,0,0,0.5);
			transition-duration: 0.7s;
}
.clients img:hover
		{
			-webkit-transform:scale(1.4);
			transition-duration: 0.7s;
		}
.stats
{
  padding-top: 80px;
  background: #8FBC8F;
  padding-bottom: 80px;
  color: black;
  background-attachment: fixed;
 
  
}
.stats i
{
  font-size: 40px;
  padding-left: 40px;
}

.stats p
{
  font-weight: bold;
  letter-spacing: 1px;
  padding-left: 10px;
 
}
.charity-info
{
  padding-left: 100px;
}
.charity-info h1
{
	padding-left: 10px;
}
.stats h1
{
	padding-left: 30px;
}
	
	</style>


</head>
<!--crousel part--->
<?php
                  function make_query($con)
                  {
         	  
                       $query="SELECT * from homecar ORDER BY id ASC";
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
								<img src="'.$row["picsource"].'"class="img-fluid" width=""">
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
<div id="car1" class="car1">
   <div class="container-fluid">
            <div class=" row wow bounceInLeft">
              
                   <div id="demo" class="carousel slide " data-ride="carousel">
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
<!--end of carousel-->
<!--main text part-->
                <div class="container ">
                	<div class="maintext" id="maintext">
			              <h1 class="display-5 text-center wow fadeInUp" data-wow-delay="0.5s"  >SKILLING FOR EMPLOYMENT & DIGNITY </h1>
			              
			              <p class="lead">
			              	<div class="text-justified wow fadeInLeft" data-wow-delay="1.2s">
			                    <?php

					               $query="SELECT * from hometext";
							       $data=mysqli_query($con,$query);
							       $total=mysqli_num_rows($data);
							       if($total!=0)
			                       {
							       while($result=mysqli_fetch_assoc($data))
							       {
							       	echo nl2br($result['hometxt']);
							       }
							       }
							       else
									   {
									     echo " ";
									   }

			                     ?></p>
			                 </div>
			                </div>
            
                </div>
<!--end of main text-->
<!--counter starts-->
<div class="stats wow fadeInUp data-wow-delay="0.3s"" id="stats">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-4 sm-text-left">
                    <div class="charity-info">
                        <!--Start Single charity info-->
                        
                            <i class="fa fa-users"></i>
                            <div class="single-charity-info pb-sm-30">
                                <div class="fix charity-count aligncenter">
                                    <h1 class="timer" data-from="1" data-to="250" data-speed="5000" data-refresh-interval="50">250+</h1>
                                </div>
                                <div class="fix charity-text pl-20">
                                    <p>Passing Students Per Year</p>
                                </div>
                            </div>
                        
                      </div>
                     </div>
                        <!--Start Single charity info-->
                        <div class="col-lg-4 sm-text-left">
                        <div class="charity-info">
                        <!--Start Single charity info-->
                        
                            <i class="fa fa-camera-retro"></i>
                            <div class="single-charity-info pb-sm-30">
                                <div class="fix charity-count aligncenter">
                                    <h1 class="timer" data-from="1" data-to="350" data-speed="5000" data-refresh-interval="50">350+</h1>
                                </div>
                                <div class="fix charity-text pl-20">
                                    <p class="sm-text-left">Approximate Views</p>
                                </div>
                            </div>
                        </div>
                      </div>
                        <!--Start Single charity info-->
                        <div class="col-lg-4 sm-text-left">
                      <div class="charity-info">
                        <!--Start Single charity info-->
                        
                            <i class="fa fa-handshake"></i>
                            <div class="single-charity-info pb-sm-30">
                                <div class="fix charity-count aligncenter">
                                    <h1 class="timer" data-from="1" data-to="500" data-speed="5000" data-refresh-interval="50">500</h1>
                                </div>
                                <div class="fix charity-text">
                                    <p>Total Volunteer</p>
                                </div>
                            </div>
                        
                      </div>
                        <!--Start Single charity info-->
                        </div>
                    
                
            </div>
        </div>
    </div><!--counter ends-->
<!--advisory body-->
<?php
 $query1="SELECT * FROM homecard1";
 $query2="SELECT * FROM homecard2";
 $query3="SELECT * FROM homecard3";

 $data1=mysqli_query($con,$query1);
 $data2=mysqli_query($con,$query2);
 $data3=mysqli_query($con,$query3);
 
 $total1=mysqli_num_rows($data1);
 $total2=mysqli_num_rows($data2);
 $total3=mysqli_num_rows($data3);
 
 if($total1!=0 or $total2!=0 or $total3!=0)
 {
 	while(($result1=mysqli_fetch_assoc($data1)) and $result2=mysqli_fetch_assoc($data2) and $result3=mysqli_fetch_assoc($data3))
 	{?>

<!-- -->
  <div id="team" class="team">
  	<div class="container">
  		<div class="row">
  			<h2 class="col-md-4"></h2>
  			<h2 class="col-md-4 display-5 text-center wow fadeInUp data-wow-delay="0.5s"">Advisory body</h2>
  			<h2 class="col-md-4"></h2>
  		</div>
  		<div class="row">
  			<div class="col-lg-4 col-md-4 wow fadeInLeft data-wow-delay=0.7s"">
  				<img  src="<?php echo($result1['picsource']);?>" class="rounded-circle" alt="Card image cap">
  				<h4><?php echo($result1['name']);?></h4>
  				<b>(<?php echo($result1['post']);?>)</b><br/>
  				<!--<b>(President)</b><br>-->
  				<b><?php echo($result1['organization']);?></b>
  				<b>,<?php echo($result1['place']);?></b><br/>
  				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
							  Show More
				</button>
				<!-- modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h4 class="modal-title text-center" id="exampleModalLabel"><?php echo($result1['name']); ?></h4>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								      	<img class="card-img-top img-fluid" src="<?php echo nl2br($result1['picsource']);?>" alt="Card image cap its me"><p></p>
								        <?php
								          echo nl2br($result1['details']);
								        ?>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Close</button>
								        
								      </div>
								    </div>
								  </div>
								</div>
								<!-- modal 1-- ends-->
  			</div>
  			<div class="col-lg-4 col-md-4 wow fadeInLeft data-wow-delay=1.0s"">
  				<img  src="<?php echo($result2['picsource']);?>" class="rounded-circle" alt="Card image cap">
  				<h4><?php echo($result2['name']);?></h4>
  				<!--<b>(Secretory)</b><br>-->
  				<b>(<?php echo($result2['post']);?>)</b><br>
  				<b><?php echo($result2['organization']);?></b>
  				<b>,<?php echo($result2['place']);?></b></br>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
							  Show More
				</button>

  				<!--modal-->
							<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel"><?php echo($result2['name']); ?></h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								      	<img class="card-img-top img-fluid" src="<?php echo($result2['picsource']);?>" alt="Card image cap its me"><p></p>
								        <?php
								          echo nl2br($result2['details']);
								        ?>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Close</button>
								        
								      </div>
								    </div>
								  </div>
								</div>
  			</div>
  			<div class="col-lg-4 col-md-4 wow fadeInLeft data-wow-delay=1.3s"">
  				<img  src="<?php echo($result3['picsource']);?>" class="rounded-circle" alt="Card image cap">
  				<h4><?php echo($result3['name']);?></h4>
  				<!--<b>(Advisor)</b><br>-->
  				<b>(<?php echo($result3['post']);?>)</b></br>
  				<b><?php echo($result3['organization']);?></b>
  				<b>,<?php echo($result3['place']);?></b></br>
  				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal3">
							  Show More
				</button>
                 <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel3"><?php echo($result3['name']); ?></h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								      	<img class="card-img-top img-fluid" src="<?php echo nl2br($result3['picsource']);?>" alt="Card image cap its me"><p></p>
								        <?php
								          echo nl2br($result3['details']);
								        ?>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Close</button>
								        
								      </div>
								    </div>
								  </div>
								</div>

  			
  		</div>
  	</div>
  </div>
<!--card3 ends-->
	



 	


 		<?php

 		//--card --//
 	}
 }
 else
 {
 	echo "";
 }
?>
<!--advisory body ends-->
<!-- partners start-->
<?php
 $query7="SELECT * FROM helpage";
 $query8="SELECT * FROM nexcon";
 $data7=mysqli_query($con,$query7);
 $data8=mysqli_query($con,$query8);
 $total7=mysqli_num_rows($data7);
 $total8=mysqli_num_rows($data8);
 if($total7!=0 or $total8!=0)
 {
 	while(($result7=mysqli_fetch_assoc($data7)) and $result8=mysqli_fetch_assoc($data8))
 	{
?>
   <div id="clients" class="clients">
   	 <div class="container-fluid">
   	 	<div class="row">
  			<h2 class="col-md-4"></h2>
  			<h4 class="col-md-4 wow fadeInUp data-wow-delay="0.5s"">PARTNERS</h4>
  			<h2 class="col-md-4"></h2>
  		</div>
  	 </div>
  		<div class="container">
   	 	<div class="row">
		
           <!--partner1-->
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 hidden-sm-up">
				
				<div class="wow fadeInLeft data-wow-delay=0.7s"">
                   <img data-toggle="modal" data-target="#exampleModal5"" src="<?php echo($result7['picsource']);?>" alt="partner1">
                  
               </div>              
		      <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
								<div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body text-justified">
								      	<img class="card-img-top img-fluid" src="<?php echo($result7['picsource']);?>" alt="Card image cap its me"><p></p>
								      	<div class="text-justified">
								        <?php
								         
								          echo "<font color=black>".nl2br($result7['details']);
								       ?></br>
								       <?php
								          echo "website- <a href='".$result7['website']."'>".$result7['website']."</a>";
								        ?>
								    </div>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Close</button>
								        
								      </div>
								    </div>
								  </div>
								</div>
                        </div>
                  

				<!--partner1 ends-->
				
				
			
				<!--partner2-->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm-up">
                  	<div class="wow fadeInLeft data-wow-delay=0.9s"">
                  		<img data-toggle="modal" data-target="#exampleModal6"" src="<?php echo($result8['picsource']);?>" alt="partner2">
                  		
                  	</div>
                  	
		               <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
								<div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								      	<img class="card-img-top" src="<?php echo($result8['picsource']);?>" alt="Card image cap its me"><p></p>
								        <?php
								          
								          echo "<font color=black>".nl2br($result8['details']);
								       

								          echo "website- <a href='".$result8['website']."'>".$result8['website']."</a>";
								        ?>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Close</button>
								        
								      </div>
								    </div>
								  </div>
								</div>
<!--partner2-- ends--></div>
                  </div>
          </div>
				
		</div>
	
   	
 


<!--partners end-->
<?php

 		//-- --//
 	}
 }
 else
 {
 	echo "";
 }
?></div>

       <script src="js/jquery-1.11.1.min.js"></script>
    
    <script src="js/jquery.appear.js"></script>
    <!-- count to -->
    <script src="js/jquery.countTo.js"></script>
    
    
    <!-- thm custom script -->
    <script src="js/custom.js"></script>
<!--counter-->


<?php
include ("footer.php");
?>