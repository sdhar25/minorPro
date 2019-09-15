<?php
session_start();
include ("adminHeader.php");
include("connection.php");
error_reporting(0);
$userprofile= $_SESSION['username'];

if ($userprofile==true)
{

}
else
{
?>
  <script>
       window.location.href='Admin.php';
     </script>
  <!--header('location:Admin.php');-->
  <?php
}
?>
<head>
	<style>
      .maintext
		{
			padding-top: 50px;
		}
		.year2014
		{padding-top: 20px;
			padding-bottom: 20px;
		}
		.year2015
		{
			padding-bottom: 20px;
		}
		.year2016
		{
			padding-bottom: 20px;
		}
		.year2017
		{
			padding-bottom: 20px;
		}
		.carou
		{
			padding-top: 50px;
		}
		.carou.img
		{
			border: solid;
		}
    </style>
</head>
<!--carousel edit begin-->

<div class="carou" id="carou">
	<div class="container">
	<h1 class="display-5 text-center">CAROUSEL IMAGES</h1>
	  <?php
        $query5="SELECT * FROM healthcar";
        $data5=mysqli_query($con,$query5);
        $total5=mysqli_num_rows($data5);
        if($total5!=0)
        {
        ?>
           <div class="table-responsive-sm-md-lg-xl">
                 	<table class="table table-bordered table-hover">
                 		<thead class="thead-dark">
                 			<tr>
                 				<th>SNo.</th>
                 				<th>Big Data Text</th>
                 				<th>Small Data Text</th>
                 				<th>Images</th>
                 				<th>OPERATION</th>
                 			</tr>           			
           		         </thead>
           		         <tbody>
           		         	<?php
                              while($result5=mysqli_fetch_assoc($data5))
                              {
                              	echo "<tr>
                               	<td>".$result5[id]."</td>
                               	<td>".$result5['bigdata']."</td>
                               	<td>".$result5['smalldata']."</td>
                               	<td><img src='".$result5['picsource']."' height='100' width='100'/></td>
                               	<td><a href='editHealthCarousel.php?edit_id=$result5[id]&bd=$result5[bigdata]&sd=$result5[smalldata]&ps=$result5[picsource]'>EDIT</a></td>
                               	</tr>";
                              }
           		         	?>
           		         </tbody>
           		
           	</table>
           	</div>
           </div>
        <?php
        }
        else
        {

        }
	  ?>
		
	
	
</div>

<!--carousel ends-->

<div class="maintext" id="maintext">
	<div class="container">
		<?php
		$query="SELECT * FROM healthcaretext";
		$data=mysqli_query($con,$query);
		$total=mysqli_num_rows($data);
		if($total!=0)
		{
        ?>
        <h1 class="display-5 text-center">MAIN TEXT</h1>
		<div class="table-responsive-sm-md-lg-xl">
			<table class="table table-bordered table-hover">
				<thead class="thead-dark">
					<tr>
						<th>SNo.</th>
						<th>Text</th>
						<th>Operation</th>
					</tr>
				</thead>
				<tbody>
					<?php
                        while ($result=mysqli_fetch_assoc($data))
                         {
                        	# code...
                        	echo "<tr>
                        	<td>".$result[id]."</td>
                        	<td>".nl2br($result['healthcaretxt'])."</td>
                        	<td><a href='editHealthCare.php?id=$result[id]&txt=$result[healthcaretxt]'>EDIT</a></td>
                        	</tr>";
                        }
					?>
				</tbody>
            </table>
         </div>
     </div>
        <?php

		}
		else
		{

		}
		?>
</div>

<div class="tabletyear" id="tableyear">
	<div class="container">
		<h1 class="text-center">YEARS</h1>
		<!--2014 starts-->
		<div class="year2014" id="year2014">
			<?php
			$query1="SELECT * FROM health_tbl";
			$data1=mysqli_query($con,$query1);
			$total1=mysqli_num_rows($data1);
			if($total1!=0)
			{
			?>
			 <div class="table-responsive-sm-md-lg-xl">
			 	<table class="table table-bordered table-hover">
			 		<thead class="thead-dark">
			 			<tr>
			 				<?php 
                               while($result1=mysqli_fetch_assoc($data1))
                               {
                               	echo "<th style='text-align:center' colspan=3>".$result1['post_title']."</th>";
                               
			 				?>
			 			</tr>
			 			<tr>
			 				<th>SNo.</th>
			 				<th>Post Description</th>
			 				<th>Operations</th>
			 			</tr>			 			
			 		</thead>
			 		<tbody>
			 			<?php
			 			echo "<tr>
			 			<td>".$result1['post_id']."</td>
			 			<td>".$result1['post_desc']."</td>
			 			<td><a href='edit2014.php?id=$result1[post_id]&txt=$result1[post_desc]'>EDIT</a></td>
			 			</tr>";
			 		        }
			 			?>
			 		</tbody>
			 	</table>
			 	
			 </div>
            <?php
			}
			else
			{

			}
			?>
		</div>
        <!--2014 ends-->
		<!--2015 begins-->
		<div class="year2015" id="2015">
			<?php
			$query2="SELECT * FROM health_tbl2015";
			$data2=mysqli_query($con,$query2);
			$total2=mysqli_num_rows($data2);
			if($total2!=0)
			{
			?>
			<div class="table-responsive-sm-md-lg-xl">
				<table class="table table-hover table-bordered">
					<thead class="thead-dark">
						<tr>
							<?php
                              while($result2=mysqli_fetch_assoc($data2))
                              {
                              	echo "<th style='text-align:center' colspan=3>".$result2['post_title']."</th>";
                              
 

							?>
						</tr>
						<tr>
							<th>SNo.</th>
							<th>Post Description</th>
							<th>Operations</th>
						</tr>
					</thead>
					<tbody>
						<?php
                           echo "<tr>
			 			<td>".$result2['post_id']."</td>
			 			<td>".$result2['post_desc']."</td>
			 			<td><a href='edit2015.php?id=$result2[post_id]&txt=$result2[post_desc]'>EDIT</a></td>
			 			</tr>"; 
			 		         }
						?>
					</tbody>
					
				</table>
				
			</div>
            <?php  
			}
			else
			{

			}
			?>
			
		</div>
		<!--2015 ends-->
		<!--2016 begin-->
         <div class="year2016" id="year2016">
         	<?php
         	$query3="SELECT * FROM health_tbl2016";
         	$data3=mysqli_query($con,$query3);
         	$total3=mysqli_num_rows($data3);
         	if($total3!=0)
         	{
            ?>
            <div class="table-responsive-sm-md-lg-xl">
            	<table class="table table-hover table-bordered">
            		<thead class="thead-dark">
            			<tr>
            				<?php
                               $result3=mysqli_fetch_assoc($data3);
                               
                               	echo "<th style='text-align:center' colspan=3>".$result3['post_title']."</th>";
                               
            				?>
            			</tr>
            			<tr>
            				<th>SNo.</th>
            				<th>Post Description</th>
            				<th>Operation</th>
            			</tr>

            		</thead>
            		<tbody>
            			<?php
            			while($result3=mysqli_fetch_assoc($data3))
            			{
            			echo "<tr>
			 			<td>".$result3['post_id']."</td>
			 			<td>".$result3['post_desc']."</td>
			 			<td><a href='edit2016.php?id=$result3[post_id]&txt=$result3[post_desc]'>EDIT</a></td>
			 			</tr>";
			 		   }
			 		   ?>
            		</tbody>
            		
            	</table>
            	
            </div>
            <?php
         	}
         	else
         	{

         	}
         	?>
         </div>
		<!--2016 end-->
		<!--2017 begins-->
            <div class="year2017" id="year2017">
            	<?php
		            $query4="SELECT * FROM health_tabel2017";
		         	$data4=mysqli_query($con,$query4);
		         	$total4=mysqli_num_rows($data4);
		         	if($total4!=0)
		         	{
		         	?>
                      <div class="table-responsive-sm-md-lg-xl">
                      	<table class="table table-bordered table-hover">
                      		<thead class="thead-dark">
                      			<tr>
                      			<?php
                                 $result4=mysqli_fetch_assoc($data4);
                               	 echo "<th style='text-align:center' colspan=3>".$result4['post_title']."</th>";
                               ?>
                      			</tr>
                      			<tr>
                      				<th>SNo.</th>
                      				<th>Post Description</th>
                      				<th>Edit</th>
                      			</tr>
                      		</thead>
                      		<tbody>
                             <?php
		            			while($result4=mysqli_fetch_assoc($data4))
		            			{
		            			echo "<tr>
					 			<td>".$result4['post_id']."</td>
					 			<td>".$result4['post_desc']."</td>
					 			<td><a href='edit2017.php?id=$result4[post_id]&txt=$result4[post_desc]'>EDIT</a></td>
					 			</tr>";
					 		   }
					 		   ?>                      			
                      		</tbody>
                      	</table>
                      	
                      </div>
                    <?php
		         	}
		         	else
		         	{

		         	}
            	?>
            	
            </div>
		<!--2017 ends-->
	</div>
	
</div>