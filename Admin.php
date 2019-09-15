<?php 

//ob_start();
session_start();
include("connection.php");
if(isset($_POST['submit']))
{
    $user=$_POST['username'];
    $pwd=$_POST['password'];
    $query="SELECT * FROM login where username='$user' && password='$pwd'";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        $_SESSION['username']=$user;
        echo "<script>alert('Login Success');</script>";
        //header('location:adminfirstpage.php');
        ?>
         <script>
       window.location.href='adminfirstpage.php';
       </script><?php
    }
    else
    {
        echo "<script> alert('Login Failed');</script>";
    }
}
include("header.php");
?>
<style>
.form-container{
 border-radius: 10px;
 padding: 30px;
 box-shadow: 0px 0px 10px 0px #000;
 position: absolute;
 top: 15vh;
 background: #fff;

}
.bg
{
 background:url('img/back.jpg') no-repeat;
 width: 100%;
 height: 100vh;
 background-size: 200%;
}
/*@media only screen and (max-width: 678px)
{
  .bg
  {
    background-size: 30px;
  }
}*/

</style>
<p></p>
<p></p>
<div class="container-fluid bg">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-3" >
        
            
             <form action="" method="POST" class="form-container">
              <div class="form-group">
                <h1 class="text-center font-weight-bold">LOGIN</h1>
              </div>
                <div class="form-group">
                  
                  <input class="form-control" placeholder="Username" type="text" name="username"/>
                </div>
                <div class="form-group">
                  
                  <input class="form-control" placeholder="Password" type="password" name="password"/>
                </div>
                <input type="submit"  class="btn btn-primary btn-block" name="submit" value="submit">
              </form>
        
        
    </div> 
    </div>                     
</div>




 