<?php
include ("header.php");
include("connection.php");
error_reporting(0);
?>
<head>
   <style>
	    body{
	    	background-image: url(img/back.jpg);
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
			padding-bottom:50px; 
		}
   </style>
</head>
                            
	


<div class="container contact-form">
	<h1>Contact Form</h1>
	<form name="appform" action="" onsubmit="return validateForm();" method="POST">
	<hr>

	<div class="row">
   
       <div class="col-md-6">
                        	<?php

					               $query="SELECT * from contactus";
							       $data=mysqli_query($con,$query);
							       $total=mysqli_num_rows($data);
							       if($total!=0)
			                       {
							       while($result=mysqli_fetch_assoc($data))
							       {?>
							       	
							       	<address><?php  echo $result['address'];?></address>
							       	<p> <?php echo "Email:-". $result['email'] ?></p>
							       	<p> <?php echo "Phone:-". $result['phone']?></p>
							       </div>
							       <?php
							         }
							         }
							         else
							         {
							         	echo " ";
							         }
							       ?>



       <div class="col-md-6">
       	
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" name="name" class="form-control">
         </div>
         <div class="form-group">
         	<label>Mobile Number</label>
         	<input type="text" name="mobno" class="form-control">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="text" name="emailid" class="form-control">
         </div>

         <div class="form-group">
         	<label>Message</label>
         	<textarea  class="form-control" rows="7" name="msg"></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block" name="send">Send</button>
         </div>

       </div>

    </div>
</form>
</div>
<script>    
			function validateForm()
			{

				var name = document.forms["appform"]["name"].value;
								
				var mobno = document.forms["appform"]["mobno"].value;
		
				var emailid = document.forms["appform"]["emailid"].value;
				
		    	if (name == "" || /\d+/.test(name))
		    	{
		    		alert("Name required; must contain only alphabets.");
		    		document.forms["appform"]["name"].focus();
		    		return false;

		    	}
		   		
		   	 	if(mobno.length != 10)
		    	{
		    		alert("Please provide a valid mobile number.");
		    		return false;
		    	}
		    	if(emailid=="" || !validateEmail(emailid))
		    	{
		    		alert("Please provide a valid email.");
		    		document.forms["appform"]["emailid"].focus();
		    		return false;
		   		 }
		   		 return true;
			}
		   	function validateEmail(x)
		   	{
		   	  		var atPos = x.indexOf("@");  
					var ldotPos = x.lastIndexOf(".");  
					if(atPos < 1 || ldotPos < (atPos + 2) || (ldotPos + 2) > (x.length - 1))
						return false;
					else
						return true;
		   	}
  
	</script>

	<?php
    if(isset($_POST["send"]))
      {
                  $name=($_POST["name"]);
                  $mobno=($_POST["mobno"]);
                  $emailid=($_POST["emailid"]);
                  $msg=($_POST["msg"]);      

                  $sql="INSERT INTO contactform(name,mobno,emailid,msg) values('$name',$mobno,'$emailid','$msg')";

                  if($con->query($sql)===TRUE)
 
                   {
         
                    echo "<script>alert('We will contact you soon ');</script>";

                   }
       
                 else 
       
                 { 

                      echo "<script>alert(' Please try again later');</script>";
                  }
           
         }
?>

<?php
include("footer.php");
?>