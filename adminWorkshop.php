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
			padding-bottom: 50px;
		}
    </style>
</head>

<!--carousel data begins-->
<div class="carou" id="carou">
	<div class="container">
	<h1 class="display-5 text-center">CAROUSEL IMAGES</h1>
	  <?php
        $query5="SELECT * FROM workshopcar";
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
                               	<td><a href='editWorkshopCarousel.php?edit_id=$result5[id]&bd=$result5[bigdata]&sd=$result5[smalldata]&ps=$result5[picsource]'>EDIT</a></td>
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

<!--main text begin-->
<div class="maintext" id="maintext">
	<div class="container">
		<?php
		$query1="SELECT * FROM workshoptext";
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
                        	<td>".nl2br($result1['workshoptxt'])."</td>
                        	<td><a href='editWorkshoptext.php?id=$result1[id]&txt=$result1[workshoptxt]'>EDIT</a></td>
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