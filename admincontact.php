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
		.contactus{
			padding-top: 50px;
		}
		.contactf{
			padding-top: 50px;
		}
	</style>
</head>

	
 <div class="contactus" id="contactus">
    <div class="container">
	<h1 class="display-5 text-center">CONTACT US</h1>

	   <?php
           $query="SELECT * FROM contactus";
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
                 				<th>Address</th>
                 				<th>EMAIL</th>
                 				<th>PHONE</th>
                 				<th>OPERATION</th>
                 			</tr>
                 		</thead>
                 		<tbody>
                 			<?php
                               while($result=mysqli_fetch_assoc($data))
                               {
                               	echo "<tr>
                               	<td>".$result[id]."</td>
                               	<td>".$result['address']."</td>
                               	<td>".$result['email']."</td>
                               	<td>".$result['phone']."</td>
                               	<td><a href='editContactus.php?id=$result[id]&ad=$result[address]&em=$result[email]&ph=$result[phone]'>EDIT</a></td>
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
           	echo " ";
           }
	   ?>
	
	</div>

<!--Contact Form-->
<div class="contactf" id="contactf">
	<div class="container">
		<h1 class="display-5 text-center">CONTACT FORM DETAILS</h1>
		<p class="text-center"><b>(PEOPLE TRIED TO CONTACT US)</b></p>
		<?php
          $query="SELECT * FROM contactform";
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
                 				<th>Name</th>
                 				<th>Mobile No.</th>
                 				<th>Email-ID</th>
                 				<th>Message</th>
                 			</tr>
                 		</thead>
             		<tbody>
             			<?php
                           while($result=mysqli_fetch_assoc($data))
                           {
                           	echo "<tr>
                           	<td>".$result[id]."</td>
                           	<td>".$result['name']."</td>
                           	<td>".$result[mobno]."</td>
                           	<td>".$result['emailid']."</td>
                           	<td>".$result['msg']."</td>
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
          	echo " ";
          }
		?>
		
	</div>
	
</div>