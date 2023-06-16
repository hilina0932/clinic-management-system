<?php include('header.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>Change Username and Password</title>
</head>
<body>
<div class="container-sm mt-2 mb-2">
<form method="post" action="passs.php">
<section class="h-100 bg-lightdark" style="margin-top:15%; text-align: center;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="row" >
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="username" >Username</label>
                      <input type="text" id="username" placeholder="Enter username " name="username" class="form-control form-control-lg" required/>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="password" >Password</label>
                      <input type="password" id="password" placeholder="Enter your password" name="password" class="form-control form-control-lg" required/>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="newusername" >New Username</label>
                      <input type="text" id="newusername" placeholder="Enter your new username " name="newusername" class="form-control form-control-lg" required/>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="newpassword" >New Password</label>
                      <input type="text" id="newpassword" placeholder="Enter your new password " name="newpassword" class="form-control form-control-lg" required/>
                    </div>
                  </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" value="change" class="btn btn-warning btn-lg ms-2" style="margin-bottom:5%;">Change </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</div>
</body>
</html>

<?php
include('DbConnection.php');
$conn = mysqli_connect("localhost","root","","new_db");
class User {
  private $db;

  public function __construct($db) {
    $this->db = $db;
  }

  public function changeUsernameAndPassword($username, $password, $newusername, $newpassword) {
    // Check if old username and password are correct
    $stmt = $this->db->prepare("SELECT * FROM account WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
      return "Incorrect old username or password.";
    }

    // Update username and password in database
    $stmt = $this->db->prepare("UPDATE account SET username = ?, password = ? WHERE username = ?");
    $stmt->bind_param("sss", $newusername, $newpassword, $username);
    $stmt->execute();

    return "Username and password successfully changed.";
  }
}

// Get database connection

// Create User object
$user = new User($conn);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $newusername = $_POST["newusername"];
  $newpassword = $_POST["newpassword"];

  $result = $user->changeUsernameAndPassword($username, $password, $newusername, $newpassword);

  echo $result;
}
?>
<?php include('footer.php')?>
