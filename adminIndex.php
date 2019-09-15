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
    .carou
		{
			padding-top: 50px;
		}
	.carou.img
		{
			border: solid;
		} 
		.maintext
		{
			padding-top: 50px;
		}
		.advisory1
		{
			padding-top: 20px;
		}
		.partner1
		{
			padding-top: 20px;
		}
		.partner2
		{
			padding-bottom: 20px;
		}
   </style>
</head>

<!--carousel begin-->
<div class="carou" id="carou">
	<div class="container">
	<h1 class="display-5 text-center">CAROUSEL IMAGES</h1>
	  <?php
        $query="SELECT * FROM homecar";
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
        if($total!=0)
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
                              while($result=mysqli_fetch_assoc($data))
                              {
                              	echo "<tr>
                               	<td>".$result[id]."</td>
                               	<td>".$result['bigdata']."</td>
                               	<td>".$result['smalldata']."</td>
                               	<td><img src='".$result['picsource']."' height='100' width='100'/></td>
                               	<td><a href='editIndexCarousel.php?edit_id=$result[id]&bd=$result[bigdata]&sd=$result[smalldata]&ps=$result[picsource]'>EDIT</a></td>
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
<!--paragraphed text begin-->
<!--main text begin-->
<div class="maintext" id="maintext">
	<div class="container">
		<?php
		$query1="SELECT * FROM hometext";
		$data1=mysqli_query($con,$query1);
		$total1=mysqli_num_rows($data1);
		if($total1!=0)
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
                        while ($result1=mysqli_fetch_assoc($data1))
                         {
                        	# code...
                        	echo "<tr>
                        	<td>".$result1[id]."</td>
                        	<td>".nl2br($result1['hometxt'])."</td>
                        	<td><a href='editIndexIntro.php?id=$result1[id]&txt=$result1[hometxt]'>EDIT</a></td>
                        	</tr>";
                        }
					?>
				</tbody>
            </table>
         </div>
     </div>
        <?php
		}
		
		?>	
</div>
<!--main text ends-->
<!--paragraphed text ends-->

<!--Advisory body begins-->
<!-- first advisory-->
<div class="advisory1">
	<div class="container">
		<?php
		$query2="SELECT * FROM homecard1";
		$data2=mysqli_query($con,$query2);
		$total2=mysqli_num_rows($data2);
		if($total2!=0)
		{
        ?>
        <h1 class="display-5 text-center">Advisory Body</h1>
        <div class="table-responsive-sm-md-lg-xl">
			<table class="table table-bordered table-hover">
        		<thead class="thead-dark">
        			<tr>
        				<th>SNo.</th>
        				<th>Name</th>
        				<th>Post</th>
        				<th>Organization</th>
        				<th>Place</th>
        				<th>Details</th>
        				<th>Picsource</th>
        				<th>Operations</th>
        			</tr>
        			
        		</thead>
        		<tbody>
        			<?php
                      while($result2=mysqli_fetch_assoc($data2))
                      {
                      	echo "<tr>
                      	<td>".$result2[id]."</td>
                      	<td>".$result2['name']."</td>
                      	<td>".$result2['post']."</td>
                      	<td>".$result2['organization']."</td>
                      	<td>".$result2['place']."</td>
                      	<td>".$result2['details']."</td>
                      	<td><img src='".$result2['picsource']."' height='100' width='100'/></td>
                        <td><a href='editHomecard1.php?edit_id=$result2[id]&nm=$result2[name]&pt=$result2[post]&og=$result2[organization]&pl=$result2[place]&det=$result2[details]&ps=$result2[picsource]'>EDIT</a></td>
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
<!--1st advisory ends-->

<!--2nd advisory starts-->
<div class="advisory2">
	<div class="container">
		<?php
		$query3="SELECT * FROM homecard2";
		$data3=mysqli_query($con,$query3);
		$total3=mysqli_num_rows($data3);
		if($total3!=0)
		{
        ?>
        
        <div class="table-responsive-sm-md-lg-xl">
			<table class="table table-bordered table-hover">
        		<thead class="thead-dark">
        			<tr>
        				<th>SNo.</th>
        				<th>Name</th>
        				<th>Post</th>
        				<th>Organization</th>
        				<th>Place</th>
        				<th>Details</th>
        				<th>Picsource</th>
        				<th>Operations</th>
        			</tr>
        			
        		</thead>
        		<tbody>
        			<?php
                      while($result3=mysqli_fetch_assoc($data3))
                      {
                      	echo "<tr>
                      	<td>".$result3[id]."</td>
                      	<td>".$result3['name']."</td>
                      	<td>".$result3['post']."</td>
                      	<td>".$result3['organization']."</td>
                      	<td>".$result3['place']."</td>
                      	<td>".$result3['details']."</td>
                      	<td><img src='".$result3['picsource']."' height='100' width='100'/></td>
                        <td><a href='editHomecard2.php?edit_id=$result3[id]&nm=$result3[name]&pt=$result3[post]&og=$result3[organization]&pl=$result3[place]&det=$result3[details]&ps=$result3[picsource]'>EDIT</a></td>
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
<!--2nd Advisory ends-->

<!--3rd Advisory begin-->
<div class="advisory3">
	<div class="container">
		<?php
		$query4="SELECT * FROM homecard3";
		$data4=mysqli_query($con,$query4);
		$total4=mysqli_num_rows($data4);
		if($total4!=0)
		{
        ?>
        
        <div class="table-responsive-sm-md-lg-xl">
			<table class="table table-bordered table-hover">
        		<thead class="thead-dark">
        			<tr>
        				<th>SNo.</th>
        				<th>Name</th>
        				<th>Post</th>
        				<th>Organization</th>
        				<th>Place</th>
        				<th>Details</th>
        				<th>Picsource</th>
        				<th>Operations</th>
        			</tr>
        			
        		</thead>
        		<tbody>
        			<?php
                      while($result4=mysqli_fetch_assoc($data4))
                      {
                      	echo "<tr>
                      	<td>".$result4[id]."</td>
                      	<td>".$result4['name']."</td>
                      	<td>".$result4['post']."</td>
                      	<td>".$result4['organization']."</td>
                      	<td>".$result4['place']."</td>
                      	<td>".$result4['details']."</td>
                      	<td><img src='".$result4['picsource']."' height='100' width='100'/></td>
                        <td><a href='editHomecard3.php?edit_id=$result4[id]&nm=$result4[name]&pt=$result4[post]&og=$result4[organization]&pl=$result4[place]&det=$result4[details]&ps=$result4[picsource]'>EDIT</a></td>
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
<!--3rd Advisory ENds-->
<!--Advisory body ends-->

<!--partners Starts-->
<!--partner 1 begin-->

<div class="partner1">
	<div class="container">
		<?php
		$query5="SELECT * FROM helpage";
		$data5=mysqli_query($con,$query5);
		$total5=mysqli_num_rows($data5);
		if($total5!=0)
		{
        ?>
        <h1 class="display-5 text-center">Partners</h1>
        <div class="table-responsive-sm-md-lg-xl">
			<table class="table table-bordered table-hover">
        		<thead class="thead-dark">
        			<tr>
        				<th>SNo.</th>
        				<th>Details</th>
        				<th>Website</th>
        				<th>Picsource</th>
        				<th>Operations</th>
        			</tr>
        			
        		</thead>
        		<tbody>
        			<?php
                      while($result5=mysqli_fetch_assoc($data5))
                      {
                      	echo "<tr>
                      	<td>".$result5[id]."</td>
                      	<td>".$result5['details']."</td>
                      	<td>".$result5['website']."</td>
                      	<td><img src='".$result5['picsource']."' height='100' width='100'/></td>
                        <td><a href='editPartner1.php?edit_id=$result5[id]&det=$result5[details]&wb=$result5[website]&ps=$result5[picsource]'>EDIT</a></td>
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
<!--partner1 ends-->
<!--partner 2 begins-->
<div class="partner1">
	<div class="container">
		<?php
		$query6="SELECT * FROM nexcon";
		$data6=mysqli_query($con,$query6);
		$total6=mysqli_num_rows($data6);
		if($total6!=0)
		{
        ?>
        <div class="table-responsive-sm-md-lg-xl">
			<table class="table table-bordered table-hover">
        		<thead class="thead-dark">
        			<tr>
        				<th>SNo.</th>
        				<th>Details</th>
        				<th>Website</th>
        				<th>Picsource</th>
        				<th>Operations</th>
        			</tr>
        			
        		</thead>
        		<tbody>
        			<?php
                      while($result6=mysqli_fetch_assoc($data6))
                      {
                      	echo "<tr>
                      	<td>".$result6[id]."</td>
                      	<td>".$result6['details']."</td>
                      	<td>".$result6['website']."</td>
                      	<td><img src='".$result6['picsource']."' height='100' width='100'/></td>
                        <td><a href='editPartner2.php?edit_id=$result6[id]&det=$result6[details]&wb=$result6[website]&ps=$result6[picsource]'>EDIT</a></td>
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
<!--partner 2 ends-->
<!--partners ends-->