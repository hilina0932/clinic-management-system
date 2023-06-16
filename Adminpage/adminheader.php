
<?php 
session_start();
//include('../DbConnection.php');

//include('../DbConnection.php');
if (($_SESSION["access_type"])=='Admin')
{
 $uid =  $_SESSION["uid"];
}
else{
 header("location:../login.php");

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>WRUSCMS</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #008282;" >
  <div class="container-fluid mt-2 mb-1">

  
   <a class="navbar-brand" style="color: white; " href="#">
      <img src="../image/logo33.png" alt="" width="140" height="60" class="d-inline-block align-text-top">
    </a>
 
       <!-- <span><img src="image/logo.png" width="200px" height="50px"></span> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                   <!-- menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 ">
        <li class="nav-item">
<a class="nav-link active" aria-current="page" href="admin.php" style="color: white;">Home</a>
 </li>    
 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
            Account
            
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="createaccount.php">Create Account</a></li>
            <li><a class="dropdown-item" href="adminindex.php">Update Account</a></li>
          </ul>
        </li>

    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;" >
            Drug
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="drugregister.php" >Drug Register</a></li>
            <li><a class="dropdown-item" href="drugindex.php">Update Drug</a></li>
          </ul>
        </li>    
      </ul>
                   <!-- logout section -->

      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

            <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php" style="color: white">Logout</a>
        </li>
        </ul>
        <!-- logout section ends -->

    </div>
  </div>
</nav>
</div>
</div>


      <!-- menu ends -->

</body>
</html>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

