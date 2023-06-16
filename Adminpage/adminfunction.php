
<?php 

include('adminheader.php');
?>
<?php
class DB_con
{
function __construct()
{
$conn = mysqli_connect("localhost","root","","new_db");
$this->dbh=$conn;
// Check connection
}

//Data read Function
public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from account");
	return $result;
	}
//Data one record read Function
public function fetchonerecord($user_id)
	{
	$oneresult=mysqli_query($this->dbh,"select * from account where user_id=$user_id");
	return $oneresult;
	}
//Data updation Function
public function update($fname,$mname,$lname,$gender,$address,$phone_no,$access_type,$user_id)
	{
	$updaterecord=mysqli_query($this->dbh,"update  account set fname='$fname',mname='$mname',lname='$lname',gender='$gender',address='$address',phone_no='$phone_no',access_type='$access_type' where user_id='$user_id' ");
	return $updaterecord;
	}
//Data Deletion function Function
public function delete($rid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from account where user_id=$rid");
	return $deleterecord;
	}
}?>