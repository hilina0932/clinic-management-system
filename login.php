<!doctype html>
<? php session_start(); ?>
 
<?php
include('DbConnection.php');
$conn=mysqli_connect("localhost","root","","new_db");
class User {
  private $username;
  private $password;
  private $conn;

  // Constructor function to initialize the username and password
  function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
  }

  // Function to check if the provided username and password are correct
  public function login($username, $password) {
    
    if ($username == $this->username && $password == $this->password) {
      return true;
    } else {
      return false;
    }

  }
}
// Create a new user object with the username and password
$user = new User('username', 'password');

// If the login form is submitted, check the credentials and redirect to the dashboard if successful
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
     $sql = "SELECT * FROM account WHERE username = '".$username."' AND password = '".$password."'";
       $result=$conn->query($sql);
         
if ($result->num_rows>0)
		{
      session_start();
			$row = mysqli_fetch_array($result);
			$_SESSION["uid"]= $row["user_id"];
			$_SESSION["fn"] = $row["fname"];
      $_SESSION["access_type"] = $row["access_type"];

			$sql1= "UPDATE account SET fname=true WHERE username='$uid'";
			$result=$conn->query($sql1);
			if($_SESSION["access_type"]=="Admin")
			{
				header("location: Adminpage/admin.php");
			}
			else if($_SESSION["access_type"]=="Lab Technician")
			{
				header("location: Lab_technician/lab.php");
			}
      else if($_SESSION["access_type"]=="Doctor")
			{
				header("location: Doctor/doctor.php");
			}
      else if($row["access_type"]=="Clerk")
			{
				header("location: clerk/clerk.php");
			}
      else if($row["access_type"]=="Pharmacy")
			{
				header("location: pharmacy/pharmacy.php");
			}
      else if($row["access_type"]=="Manager")
			{
				header("location: manager/manager.php");
			}
      else if($row["access_type"]=="Nurse")
			{
				header("location: nurse/nurse.php");
			}
		}
		else
			header("location: login.php?act=invalid");
	}

?>

<?php if (isset($error)) { ?>
  
  <p><?php echo $error; ?></p>
<?php } ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>WRUSCMS</title>
  </head>
  <body>
  <div class="container-fluid">
    	<div class="row">
    	<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #008282;" >
      <div class="container-fluid mt-2 mb-1">

   <a class="navbar-brand" style="color: white; " href="#">
      <img src="image/logo33.png" alt="" width="140" height="60" class="d-inline-block align-text-top"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                   <!-- menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 ">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a></li>    
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="news.php" style="color: white">News</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="aboutus.php" style="color: white">About Us</a></li>
      </ul>
                   <!-- login section -->
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="logout.php" style="color: white">logout</a></li>
      </ul>
        <!-- login section ends -->
    </div>
  </div>
</nav>
</div>
</div>
  
  <section class="vh-100" >
  <div class="container-fluid h-custom" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="image/cob.png" 
          class="img-fluid" alt="Sample image" >
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form  method="POST" class="form" >
          <div class="divider d-flex align-items-center my-4"></div>
          <!-- username input -->
          <div class="form-outline mb-4">
            <input type="text"  name="username" id="form3Example3" class="form-control form-control-lg"
              placeholder="Username" required/>
            <label class="form-label" for="form3Example3">User name</label>
          </div>
          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" required/>
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
             
            </div>
            <a href="passs.php" class="text-body">change password</a>
          </div>
           
          <div class="text-center text-lg-start mt-4 pt-2"><button type="submit" class="btn btn-primary btn-lg"style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #008282;" value="Login">Login</button>  
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


</body>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
<?php include('footer.php')?>