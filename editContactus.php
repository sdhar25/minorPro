<?php
include ("adminHeader.php");
include("connection.php");
error_reporting(0);
?>
<?php
$_GET['id'];
$_GET['ad'];
$_GET['em'];
$_GET['ph'];
?>
<style>
      .contactus{
            padding-top: 50px;
      }
</style>
 <div class="contactus" id="contactus">
      <div class="container">
            <h1 class="display-5 text-center">"CONTACT US" DETAILS</h1>
             <form name="appform"  onsubmit="return validateForm();" method="GET" action="">
                 <div class="col-md-6">
                   <div class="form-group">
                              <label>Address</label>
                              <textarea class="form-control" rows="3" name="address" required/><?php echo $_GET['ad'];?></textarea> 
                  </div>
                   <div class="form-group">
                        <label>Email-id</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $_GET['em'];?>" required/>
                   </div>   
                   <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" value=" <?php echo $_GET['ph']; ?>" required/>
                  </div> 
                  <input type="submit"  class="btn btn-primary" name="submit" value="UPDATE">   
               </div>
<?php

  if($_GET['submit'])
  {
     $address=$_GET['address'];
     $email=$_GET['email'];
     $phone=$_GET['phone'];
     $query="UPDATE CONTACTUS SET ADDRESS='$address', EMAIL='$email', PHONE=$phone";
     $data=mysqli_query($con,$query);
      if($data)
      {
         echo "<script>
               alert('Data updated');
               window.location.assign('admincontact.php');
         </script>";
         
         
      }
      else
      {
          echo "<script>alert('Something Wrong Check Properly ');</script>";
      }
  }
  else
  {
      echo "  ";
  }
 ?>
             </form>
      </div>      
 </div>
 <script>
 function validateForm()
{
      var phone = document.forms["appform"]["phone"].value;
      var email = document.forms["appform"]["email"].value;
      if(phone.length != 10)
                  {
                        alert("Please provide a valid mobile number.");
                        return false;
                  }
      if(email=="" || !validateEmail(email))
                  {
                        alert("Please provide a valid email.");
                        document.forms["appform"]["email"].focus();
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