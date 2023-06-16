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
//Data Insertion Function

//Data read Function
public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from drug_register");
	return $result;
	}
//Data one record read Function
public function fetchonerecord($drug_id)
	{
	$oneresult=mysqli_query($this->dbh,"select * from drug_register where drug_id=$drug_id");
	return $oneresult;
	}
//Data updation Function
public function update($drug_name,$product_date,$exp_date,$quantity,$drug_id)
	{
	$updaterecord=mysqli_query($this->dbh,"update  drug_register set drug_name='$drug_name',product_date='$product_date',exp_date='$exp_date',quantity='$quantity' where drug_id='$drug_id' ");
	return $updaterecord;
	}
//Data Deletion function Function
public function delete($rid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from drug_register where drug_id=$rid");
	return $deleterecord;
	}
}
?>