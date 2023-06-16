<?php 
include('adminheader.php');

?>


<?php
require_once'adminfunction.php';

//Object
$updatedata=new DB_con();
if(isset($_POST['update']))
{
// Get the userid
$user_id=intval($_GET['id']);
// Posted Values
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$access_type=$_POST['access_type'];
//Function Calling
$sql=$updatedata->update($fname,$mname,$lname,$gender,$address,$phone_no,$access_type,$user_id);
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='adminindex.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>wuscms</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script defer src="../jquery/dist/jquery.min.js"></script>
        <script defer src="validateaccount.js"></script>

</head>
<body>
<div class="container">
<div class="row" style="margin-top:10%; text-align: center;" >
<div class="col-md-12">
<h3>Update Record</h3>
<hr />
</div>
</div>

<?php
// Get the userid
$userid=intval($_GET['id']);
$onerecord=new DB_con();
$sql=$onerecord->fetchonerecord($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>

<section class="vh-100">
  <div class="container-fluid h-custom">
<form name="insertrecord" method="post">
<div class="row" >
<div class="col-md-4" ><b>First Name</b>
<input type="text" id="firstname" name="fname" value="<?php echo htmlentities($row['fname']);?>" class="form-control" pattern="[A-Za-z]{2,20}" >
<span id="FIRSTNAME" class = "small text-danger"></span>

</div>
<div class="col-md-4"><b>Middle Name</b>
<input type="text" id="middlename" name="mname" value="<?php echo htmlentities($row['mname']);?>" class="form-control" pattern="[A-Za-z]{2,20}" >
<span id="MIDDLENAME" class = "small text-danger"></span>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Last Name</b>
<input type="text" id="lastname" name="lname" value="<?php echo htmlentities($row['lname']);?>" class="form-control" pattern="[A-Za-z]{2,20}" >
<span id="LASTNAME" class = "small text-danger"></span>

</div>
<div class="col-md-4"><b>Gender</b>
<input type="text" name="gender" value="<?php echo htmlentities($row['gender']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Address</b>
<input type="text" id="Address" name="address" value="<?php echo htmlentities($row['address']);?>" class="form-control" pattern="[A-Za-z0-9]{2,50}"/>
<span id="ADDRESS" class = "small text-danger"></span>

</div>
<div class="col-md-4"><b>phone no</b>
<input type="text" id="phonenumber" name="phone_no" value="<?php echo htmlentities($row['phone_no']);?>" class="form-control"  pattern="[97][0-9]{8}">
<span id="PHONENAME" class = "small text-danger"></span>

</div>
</div>
<div class="row">
<div class="col-md-8"><b>Access</b>
<textarea class="form-control" name="access_type" required><?php echo htmlentities($row['access_type']);?></textarea>
</div>
</div>
<?php } ?>
<div class="row" style="margin-top:2%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div>
     </form>     
	</div>
</div>
  </div>
  </section>

</body>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

</html>

