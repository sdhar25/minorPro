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
	</style>
</head>
<div class="carou" id="carou">
	<div class="container">
	<h1 class="display-5 text-center">CAROUSEL IMAGES</h1>
	  <?php
        $query="SELECT * FROM bastrocar";
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
                               	<td>".$result[userID]."</td>
                               	<td>".$result['bigdata']."</td>
                               	<td>".$result['smalldata']."</td>
                               	<td><img src='".$result['userPic']."' height='100' width='100'/></td>
                               	<td><a href='editBastroBankCar.php?edit_id=$result[userID]&bd=$result[bigdata]&sd=$result[smalldata]&ps=$result[userPic]'>EDIT</a></td>
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

<div class="maintext" id="maintext">
	<div class="container">
		<?php
		$query="SELECT * FROM bastrotext";
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
                        	<td>".nl2br($result['bastrotxt'])."</td>
                        	<td><a href='editBastroBank.php?id=$result[id]&txt=$result[bastrotxt]'>EDIT</a></td>
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