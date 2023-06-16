
<!DOCTYPE  html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="css.css">
<title>wruscms</title>
</head>	
<body>
<div class="container-sm mt-2 mb-2">
<form class="form" method="post">
<section class="h-100 bg-lightdark">
<div class="container py-5 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <h1>Send Request to Manager Form</h1>
        <div class="card card-registration my-4">
          <div class="row g-0">
<div class="row" >
<div class="form-outline">  
<?php
                       
                       $conn=mysqli_connect("localhost","root","","new_db");
                                     $row=mysqli_query($conn,"SELECT user_id from account");
                                               ?>     
                                       <label class="form-label" for="form3Example1cg">User ID</label>
                       
                                         <select placeholder="Enter user id" id="user_id" class="form-control form-control-lg" name="user_id" pattern="[0-9]{1,50}"/> 
                                         <span id="USERID" class = "small text-danger"></span>
                                   <?php   while($result=mysqli_fetch_array($row)){?> 
                                     <option><?php echo $result['user_id'];?></option><?php }?>
                                  </select>
                                       </div><br>
    <label class="form-label" for="item_name">Item name</label>
    <input class="form-control form-control-lg" type="text" placeholder="Enter item name" name="item_name"id="item_name"><br>
    <label class="form-label" for="scale">Scale</label>
    <input class="form-control form-control-lg" type="text" placeholder="Enter scale" name="scale" id="quantity"><br>
    <label class="form-label" for="quantity">Quantity</label>
    <input class="form-control form-control-lg" type="number" placeholder="Enter quantity" name="quantity" id="quantity"><br>
    
    <div class="d-flex justify-content-end pt-3">
    <button type="submit" value="send" class="btn btn-warning btn-lg ms-2"style="margin-bottom:5%;">send</button>
</div>
</form>
</div>
</div>	
</div>
</div>
</div>	
</div>
	</body>
</html> 

<?php

include('../DbConnection.php');

$conn=mysqli_connect("localhost","root","","new_db");
class sendrequest Extends DbConnection {
    private $user_id;
    private $item_name;
     private $scale;
    private $quantity;

    private $conn;
    
    public function __construct($user_id,$item_name, $scale,$quantity,$conn) {
        $this->user_id = $user_id;
        $this->item_name = $item_name;
        $this->scale = $scale;
        $this->quantity = $quantity;
        $this->conn = $conn;
    }
    
    public function validate() {
        // Validate name, email, and password
        if (empty($this->user_id) ||empty($this->item_name) || empty($this->scale) ||
            empty($this->quantity)) {
            return false;
        }
       
        return true;
    }
    
    public function register() {
    
        
        // Insert user into table
        $stmt = $this->conn->prepare("INSERT INTO request (user_id,item_name,scale, quantity) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $this->user_id, $this->item_name,$this->scale, $this->quantity);
        $stmt->execute();
    }

    // create account method

//update method

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $item_name = $_POST['item_name'];
     $scale = $_POST['scale'];
    $quantity = $_POST['quantity'];
    $form = new sendrequest($user_id,$item_name,$scale, $quantity, $conn);
    
    if ($form->validate()) {
        $form->register();
      
        echo "<script>alert('request sent  successfully');</script>";
// Code for redirection
    } else {
        echo 'request  failed.';
    }
}
?>