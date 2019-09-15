<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CustomStyle.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;

  margin-left: .1rem;
  margin-right: .1rem;
}
.dropdown:hover>.dropdown-menu{
  display:block;
}
.dropdown-submenu:hover>.dropdown-menu{
  display: block;
}

</style>

  </head>
  <body>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>-->

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container">
  <a class="navbar-brand text-warning font-weight-bold" href="adminfirstpage.php">INCD</a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="adminIndex.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                    About
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="adminhistory.php">History</a>
                    
                    <a class="dropdown-item" href="adminMisVis.php">Mission&Vision</a>
                    
                  </div>
            </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Impact
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#"></a></li>
          
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Welfare and Development</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adminBastrobank.php">Bastro Bank</a></li>
              <li><a class="dropdown-item" href="adminhealthcare.php">Health Care</a></li>


              <li ><a class="dropdown-item " href="adminFirstAid.php">First Aid Program</a>
                
              </li>
                
              
              <li ><a class="dropdown-item " href="adminMedicalTeam.php">Medical Team</a></li>
              


            </ul>
          </li>



          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Education & Training</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adminEtution.php">E-Tution</a></li>
              


              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Vocational Training</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="adminphysio.php">Diploma on Physiotherapy</a></li>
                  <li><a class="dropdown-item" href="adminspeech.php">Diploma on Speech Therapy</a></li>
                  <li><a class="dropdown-item" href="adminWorkshop.php">Skill Upgradation Through Workshop</a></li>
                  
                </ul>
              </li>
              <li ><a class="dropdown-item " href="adminDEP.php">Digital Enablement Program</a>
              </li>



            </ul>
          </li>
        </ul>
      </li>

                     
                     <li class="nav-item">
                      <a href="admincontact.php" class="nav-link text-white">Contact</a>
                     </li>
                     <li class="nav-item">
                      <a href="index.php" class="nav-link text-white"><i class="fa fa-eye"></i>Preview</a>
                       
                     </li>
                     <li class="nav-item">
                      <a href="logout.php" class="nav-link text-white">Logout</a>
                    </li>
    </ul>
  </div>
</div>
</nav>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
   </script>

   <script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});
   </script>
  </body>
</html>