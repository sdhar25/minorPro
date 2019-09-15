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
		.subject
		{
			padding-top: 50px;
		}
		.dipFirst
		{
			padding-top: 50px;
		}
		.therapy{
			padding-top: 50px;
			padding-bottom: 50px;
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
<!--carousel data begins-->
<div class="carou" id="carou">
	<div class="container">
	<h1 class="display-5 text-center">CAROUSEL IMAGES</h1>
	  <?php
        $query5="SELECT * FROM physiocar";
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
                               	<td><a href='editPhysioCarousel.php?edit_id=$result5[id]&bd=$result5[bigdata]&sd=$result5[smalldata]&ps=$result5[picsource]'>EDIT</a></td>
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

<!--carousel data ends-->

<!--main text begins-->
<div class="maintext" id="maintext">
	<div class="container">
		<?php
		$query="SELECT * FROM physiotherapyinto";
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
                        	<td>".nl2br($result['intro'])."</td>
                        	<td><a href='editPhysiointro.php?id=$result[id]&txt=$result[intro]'>EDIT</a></td>
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
<!--main text ends-->
<!--physio subject start-->
<div class="subject" id="subject">
	<div class="container">
		<?php
		$query_sub="SELECT * FROM physiosub";
		$data_sub=mysqli_query($con,$query_sub);
		$total_sub=mysqli_num_rows($data_sub);
		if($total_sub!=0)
		{
		?>
		<h1 class="display-5 text-center">SUBJECTS</h1>
		<div class="table-responsive-sm-md-lg-xl">
			<table class="table table-bordered table-hover">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>COURSE CODE</th>
						<th>COURSE NAME</th>
						<th>COURSE DURATION</th>
						<th>OPERATIONS</th>
					</tr>
					
				</thead>
				<tbody>
					<?php
                       while($result_sub=mysqli_fetch_assoc($data_sub))
                       {
                       	    echo "<tr>
                        	<td>".$result_sub[id]."</td>
                        	<td>".nl2br($result_sub['coursecode'])."</td>
                        	<td>".nl2br($result_sub['coursename'])."</td>
                        	<td>".nl2br($result_sub['coursedu'])."</td>
                        	<td><a href='editPhysiosub.php?id=$result_sub[id]&cc=$result_sub[coursecode]&cn=$result_sub[coursename]&cd=$result_sub[coursedu]'>EDIT</a></td>
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
	
</div>
<!--physio subject ends-->
<!--diploma begin-->
<div class="dipFirst" id="dipFirst">
	<div class="container">
		<?php
          $query1="SELECT * FROM physiosub";
          $data1=mysqli_query($con,$query1);
		  $total1=mysqli_num_rows($data1);
		  if($total1!=0)
		  {
		  	$result1=mysqli_fetch_assoc($data1);
		  ?>
            <h3 class="display-5 text-center"><?php echo $result1['coursename']?></h3>
            <!--first year begin-->
                <?php
                    $query2="SELECT * FROM diplomafirst";
					$data2=mysqli_query($con,$query2);
					$total2=mysqli_num_rows($data2);
					if($total2!=0)
					{
					?>
                      <div class="table-responsive-sm-md-lg-xl">
                      	<table class="table table-bordered table-hover">
                      		<thead class="thead-dark">
                      			<tr>
                      			<th colspan="4" class="text-center">First Year</th>
                      			</tr>
                      			<tr>
                      				<th>ID</th>
                      				<th>Subject Code</th>
                      				<th>Subject</th>
                      				<th>Operations</th>
                      			</tr>
                      		</thead>
                      		<tbody>
                      			<?php
                                  while($result2=mysqli_fetch_assoc($data2))
			                       {
			                       	    echo "<tr>
			                        	<td>".$result2[id]."</td>
			                        	<td>".nl2br($result2['subjectcode'])."</td>
			                        	<td>".nl2br($result2['subject'])."</td>
			                        	<td><a href='editDiploFirst.php?id=$result2[id]&sc=$result2[subjectcode]&sub=$result2[subject]'>EDIT</a></td>
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
            <!--first year ends-->
            <!--second year begins-->
               <?php
                    $query3="SELECT * FROM diplomasec";
					$data3=mysqli_query($con,$query3);
					$total3=mysqli_num_rows($data3);
					if($total3!=0)
					{
					?>
                      <div class="table-responsive-sm-md-lg-xl">
                      	<table class="table table-bordered table-hover">
                      		<thead class="thead-dark">
                      			<tr>
                      			<th colspan="4" class="text-center">Second Year</th>
                      			</tr>
                      			<tr>
                      				<th>ID</th>
                      				<th>Subject Code</th>
                      				<th>Subject</th>
                      				<th>Operations</th>
                      			</tr>
                      		</thead>
                      		<tbody>
                      			<?php
                                  while($result3=mysqli_fetch_assoc($data3))
			                       {
			                       	    echo "<tr>
			                        	<td>".$result3[id]."</td>
			                        	<td>".nl2br($result3['subjectcode'])."</td>
			                        	<td>".nl2br($result3['subject'])."</td>
			                        	<td><a href='editDiploSec.php?id=$result3[id]&sc=$result3[subjectcode]&sub=$result3[subject]'>EDIT</a></td>
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
            <!--second year ends-->
          <?php
		  }
		  else
		  {

		  }
		?>
		
	</div>
	
</div>
<!--diploma ends-->
<!--therapy starts-->
<div class="therapy" id="therapy">
	<div class="container">
		<?php
		  $query4="SELECT * FROM physiosub WHERE id=2";
          $data4=mysqli_query($con,$query4);
		  $total4=mysqli_num_rows($data4);
		  if($total4!=0)
		  {
            $result4=mysqli_fetch_assoc($data4);
           ?>
           <h3 class="display-5 text-center"><?php echo $result4['coursename']?></h3>

           <!--therapy courses starts-->
              <?php
                    $query6="SELECT * FROM physiostudytbl2";
					$data6=mysqli_query($con,$query6);
					$total6=mysqli_num_rows($data6);
					if($total6!=0)
					{
					?>
                      <div class="table-responsive-sm-md-lg-xl">
                      	<table class="table table-bordered table-hover">
                      		<thead class="thead-dark">
                      			<tr>
                      				<th>ID</th>
                      				<th>Subject Code</th>
                      				<th>Subject</th>
                      				<th>Operations</th>
                      			</tr>
                      		</thead>
                      		<tbody>
                      			<?php
                                  while($result6=mysqli_fetch_assoc($data6))
			                       {
			                       	    echo "<tr>
			                        	<td>".$result6[id]."</td>
			                        	<td>".nl2br($result6['subjectcode'])."</td>
			                        	<td>".nl2br($result6['subject'])."</td>
			                        	<td><a href='editTherapy.php?id=$result6[id]&sc=$result6[subjectcode]&sub=$result6[subject]'>EDIT</a></td>
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
           <!--therapy courses ends-->
           <?php
		  }
		  else
		  {

		  }
		?>
	</div>
	
</div>

<!--therapy ends-->