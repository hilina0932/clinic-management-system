<?php 
include('adminheader.php');

?>
<?php
// include function file
require_once'adminfunction.php';

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
echo "<script>window.location.href='adminindex.php'</script>";
}
    }
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>wuscms</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
    </style>
</head>
<body>

<div class="container">
<div class="row" style="margin-top:5%; text-align: center;" >
<div class="col-md-12 " >
<div class="table-responsive mt-5" >     
<table id="mytable" class="table table-bordred table-striped">
<thead>
<tr>
<th scope="col">user id</th>
<th scope="col">First Name</th>
<th scope="col">Middle Name</th>
<th scope="col">Last Name</th>
<th scope="col">gender</th>
<th scope="col">address</th>
<th scope="col">phone_no</th>
<th scope="col">access_type</th>
<th scope="col">Update</th>
<th scope="col">Delete</th>
</tr>
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
    <td><?php echo htmlentities($row['fname']);?></td>
    <td><?php echo htmlentities($row['mname']);?></td>
    <td><?php echo htmlentities($row['lname']);?></td>
    <td><?php echo htmlentities($row['gender']);?></td>
    <td><?php echo htmlentities($row['address']);?></td>
    <td><?php echo htmlentities($row['phone_no']);?></td>
    <td><?php echo htmlentities($row['access_type']);?></td>
 <td><a href="adminupdate.php?id=<?php echo htmlentities($row['user_id']);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span>Update</button></a></td>
 <td><a href="adminindex.php?del=<?php echo htmlentities($row['user_id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span>Delete</button></a></td>
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