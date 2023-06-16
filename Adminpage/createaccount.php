
<?php 
include('adminheader.php');

?>
<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>wruscms</title>
  <script defer src="../jquery/dist/jquery.min.js"></script>
<script defer src="validateaccount.js"></script>
</head>
<body>

<!-- image 1st column -->
<div class="container mt-5">
<div class="row">
<div class="col-12 col-md-6">
      <img src="../image/appointment-img.svg" class="d-block w-100" alt="First slide">
    </div>
  
    <!-- image ends -->

<!-- 2nd column -->

  <div class="col-12 col-md-6 mt-5">
    
            <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              <form class="form" id="myform" method="post">

                <div class="form-outline mb-2">
                <label class="form-label" for="form3Example1cg">First Name</label>
                  <input type="text" id="firstname" class="form-control form-control-lg" placeholder="Enter your first name" name="fname" pattern="[A-Za-z]{2,20}"/> 
                  <span id="FIRSTNAME" class = "small text-danger"></span>
                </div>

                <div class="form-outline mb-2">
                <label class="form-label" for="form3Example1cg">Middle Name</label>
                  <input type="text" id="middlename" class="form-control form-control-lg" placeholder="Enter your middle name" name="mname"  pattern="[A-Za-z]{2,20}" /> 
                  <span id="MIDDLENAME" class = "small text-danger"></span>
                </div>

                <div class="form-outline mb-2">
                <label class="form-label" for="form3Example1cg">last Name</label>
                  <input type="text" id="lastname" class="form-control form-control-lg" placeholder="Enter your last name" name="lname"  pattern="[A-Za-z]{2,20}"/> 
                  <span id="LASTNAME" class = "small text-danger"></span>
                </div>

                <div class="form-outline mb-2">
                <label class="form-label" for="form3Example1cg">Address Name</label>
                  <input type="text" id="Address" class="form-control form-control-lg" placeholder="Enter your address name" name="address" pattern="[A-Za-z0-9]{2,50}"/> 
                  <span id="ADDRESS" class = "small text-danger"></span>
                </div>
                <label class="form-label" for="form3Example3cg">Gender</label>
                <input type="radio" name="gender" value="female">female
                 <input type="radio" name="gender" value="male"> male<br>

                <div class="form-outline mb-2">
                <label class="form-label" for="form3Example3cg">Phone number</label>
                  <input type="number" placeholder="Enter phone number" name="phone_no" id="phonenumber " class="form-control form-control-lg" pattern="[97][0-9]{8}"/>
                  <span id="PHONENUMBER" class = "small text-danger"></span>
                </div>

                  <label class="form-label" for="form3Example4cdg">Access Type</label>
                  <?php for($i=0;$i<=11;$i++){ echo "&nbsp;";}?><select id="accesstype" class="label mt-2" name="access_type"class="textInput">
                  <option>Admin</option>
                  <option>Clerk</option>
                  <option>Lab Technician</option>
                  <option>Doctor</option>
                  <option>Pharmacy</option>
                  <option>Manager</option>
                  <option>Nurse</option></select></p>
    <p><?php for($i=0;$i<=12;$i++){ echo "&nbsp;";}?><div class="d-flex justify-content-center ">
                  <button type="submit"
                    class="btn btn-success btn-block" style="background-color:  #008282;" value="Register">Create</button>
               
              </form>
              </div>
              </div>
  </div>
</div>  

</p>
</form>
</div>
</div>
</div>
</div>
</div>
</body>

<!--<script>

let firstname = document.getElementById('firstname');
let middlename = document.getElementById('middlename');
let lastname = document.getElementById('lastname');
let Address = document.getElementById('Address');
let phonenumber = document.getElementById('phonenumber');
let firstnameError = document.getElementById('firstnameError');
let middlenameError = document.getElementById('middlenameError');
let lastnameError = document.getElementById('lastnameError');
let AddressError = document.getElementById('AddressError');
let phonenumberError = document.getElementById('phonenumberError');


function validateInput() {
  let isValid = true;
  
  if (!firstname.checkValidity()) {
    firstnameError.innerHTML = firstname.validationMessage;
    isValid = false;
  } else {
    firstnameError.innerHTML = "";
  }
  
  if (!middlename.checkValidity()) {
    middlenameError.innerHTML = middlename.validationMessage;
    isValid = false;
  } else {
    middlenameError.innerHTML = "";
  }
  if (!lastName.checkValidity()) {
    lastnameError.innerHTML = lastname.validationMessage;
    isValid = false;
  } else {
    lastnameError.innerHTML = "";
  }
  if (!Address.checkValidity()) {
    AddressError.innerHTML = Address.validationMessage;
    isValid = false;
  } else {
    AddressError.innerHTML = "";
  }
  if (!phonenumber.checkValidity()) {
    phonenumberError.innerHTML = phonenumber.validationMessage;
    isValid = false;
  } else {
    phonenumberError.innerHTML = "";
  }
  

  return isValid;
}



document.getElementById('myform').addEventListener('submit',function(event){

  if(!validateInput()){
    event.preventdefault();
  }
});


  </script> -->


</html>




<?php
$conn=mysqli_connect("localhost","root","","new_db");

class RegistrationForm  {
    private $fname;
     private $mname;
    private $lname;
    private $gender;
    private $address;
    private $phone_no;
    private $access_type;
    private $conn;
    
    public function __construct($fname, $mname,$lname, $gender,$address, $phone_no, $access_type,$conn) {
        $this->fname = $fname;
        $this->mname = $mname;
        $this->lname = $lname;
        $this->gender = $gender;
        $this->address = $address;
        $this->phone_no = $phone_no;
        $this->access_type = $access_type;
        $this->conn = $conn;
    }
    
    public function validate() {
        // Validate name, email, and password
        if (empty($this->fname) || empty($this->mname) ||
            empty($this->lname) ||
        empty($this->gender) || 
            empty($this->address) ||
        empty($this->phone_no) || empty($this->access_type)) {
            return false;
        }
       
        return true;
    }
    
    public function register() {
    
        
        // Insert user into table
        $stmt = $this->conn->prepare("INSERT INTO account (fname,mname, lname, gender,address,phone_no,access_type) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $this->fname,$this->mname, $this->lname, $this->gender,$this->address, $this->phone_no, $this->access_type);
        $stmt->execute();
    }

    // create account method

public function create(){
$add="1234";
    $sql="select fname,lname from account ";
    $result=$this->conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $username=substr($row["fname"], 0,2).$row["lname"];
             $password=substr($row["fname"], 0,2).$row["lname"].$add;
                //$hashedpassword=password_hash($password,PASSWORD_DEFAULT);
           
             $sql1 = "update account set username ='$username',password ='$password' where fname ='".$row["fname"]."' AND lname ='".$row["lname"]."'";
             $this->conn->query($sql1);
        }
    }
}

//update method

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
     $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
     $address = $_POST['address'];
    $phone_no = $_POST['phone_no'];
    $access_type = $_POST['access_type'];

    
    $form = new RegistrationForm($fname,$mname, $lname, $gender,$address, $phone_no, $access_type, $conn);
    
    if ($form->validate()) {
        $form->register();
        $form->create();
       // echo 'Registration successful!';
       echo "<script>alert('user registered successfully');</script>";
// Code for redirection
echo "<script>window.location.href='createaccount.php'</script>";
    } else {
        // echo 'Registration failed.';
        echo "<script>alert('user not registered  successfully');</script>";
        // Code for redirection
        echo "<script>window.location.href='createaccount.php'</script>";
    }
}

?>


     <?php include('footer.php')?>
  