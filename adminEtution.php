<?php
session_start();
include ("adminHeader.php");
include ("connection4.php");
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
.details
{
	padding-top: 50px;
}
</style>
</head>
<?php
$query = "SELECT * FROM etution";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
		<div class="details" id="details">
			<div class="container">
              <div class="table-responsive-sm-md-lg-xl">
                 	<table class="table table-bordered table-hover">
                 		<thead class="thead-dark">
                          <tr>
                          	<th>Id</th>
							<th>Title</th>
							<th>Picsource</th>
							<th>Details</th>
							<th>Operations</th>

                          </tr>
                 		</thead>
                 		<tbody>
							<?php
									$i=1;
									while($result = mysqli_fetch_assoc($data))
									{
									
									
										echo "<tr>
												<td>".$result['id']."</td>
												<td>".$result['title']."</td>
												<td><img src='".$result['picsource']."' height='250' width='300'</td>
												<td>".nl2br($result['details'])."</td>
												<td>";
										echo "<form action='editEtution.php' method='POST'>";
										echo "<input type='submit' name='edit[".$result['id']."]'value='Edit'/>";
										echo "</form></td></tr>";
												
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