<?php 
include('adminheader.php');

?>


<?php
// include function file
require_once'drugfunction.php';

//Deletion
if(isset($_GET['del']))
    {
// Geeting deletion row id
$rid=$_GET['del'];
$deletedata=new DB_con();
$sql=$deletedata->delete($rid);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='drugindex.php'</script>";
}
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>wruscms </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php include('adminheader.php')?>
<div class="container">
<div class="row" style="margin-top:5%; text-align: center;">
<div class="col-md-12 ">

<div class="table-responsive mt-5">                
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>drug_id</th>
<th>drug name</th>
<th>product_date</th>
<th>exp_date</th>
<th>quantity</th>
<th>Update</th>
<th>Delete</th>
</thead>
<tbody>
 <?php
 $fetchdata=new DB_con();
  $sql=$fetchdata->fetchdata();
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($row['drug_name']);?></td>
    <td><?php echo htmlentities($row['product_date']);?></td>
    <td><?php echo htmlentities($row['exp_date']);?></td>
    <td><?php echo htmlentities($row['quantity']);?></td>
 <td><a href="drugupdate.php?id=<?php echo htmlentities($row['drug_id']);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span>Update</button></a></td>
 <td><a href="drugindex.php?del=<?php echo htmlentities($row['drug_id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span>Delete</button></a></td>
    </tr>
<?php
// for serial number increment
$cnt++;
} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>

</body>

</html>
