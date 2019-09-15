<?php
include ("Header.php");
include ("connection.php");
error_reporting(0);
?>
<style>
.look
{
	padding-top: 90px;
	padding-bottom: 10px;
}
.look img
{
	border: 1px solid;
	box-shadow: 0px 2px 3px rgba(0,0,0,0.5);
    transition-duration: 0.7s;
}
.look img:hover
		{
			-webkit-transform:scale(1.4);
			transition-duration: 0.7s;
		}
</style>

<?php

$query = "SELECT * FROM digitalprogram";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
	
 <div id="look" class="look">
		<div class="container">
		<h2 class=" wow fadeInUp data-wow-delay="0.5s"" align="center">Digital  Enablement Program</h2>
		<div class="table-responsive-sm-md-lg-xl wow fadeInUp data-wow-delay="0.9s"">
			<table class="table table-primary">
				<tbody>

					<?php
							$i=1;
							while($result = mysqli_fetch_assoc($data))
							{							
								echo "<tr>
										
										<td><h3>".$result['title']."</h3></td>
										<td>"?>
										<img src="<?php echo($result['picsource'])?>" height='200' width='350'/>
										<?php echo "</td>
										<td>".nl2br($result['details'])."</td>
										<td>
									</tr>";
										
							}

					}
					else
					{
						echo "No Records Found";
					}			
					  ?>

				</tbody>


			</table>

		</div>
		</div>
</div>
	<?php
include ("footer.php");
?>
	
	