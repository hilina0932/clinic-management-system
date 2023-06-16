
<?php 
session_start();
//include('../DbConnection.php');
if (($_SESSION["access_type"])=='Admin')
{
 $uid =  $_SESSION["uid"];
}
else{
 header("location:../login.php");

}

?>
<?php 

//include('../DbConnection.php');
include('admindashbordheader.php');
?> 

<body style="background-color:#e7e7e7;">
<section > 
	<div class="main-container" style="margin-top:10px;">
		<div class="navcontainer" >
			<nav class="nav" style="background-color:#e7e7e7;">
				<div class="nav-upper-options" style="font-size:10px;">
					<div class="nav-option option1">
					<img src="../image/dashboard.png"class="nav-img"alt="dashboard">
						<h3 style="font-size:18px;"> Dashboard</h3>
					</div>

					<div class="option2 nav-option">
					<li><a href="createaccount.php"><img src="../image/add-user.png"class="nav-img"alt="Account"></a></li>
            <li><a class="dropdown-item" href="createaccount.php"><h3 style="font-size:18px;"> Account Create</h3></a></li>
					</div>

					<div class="nav-option option3">
          <li><a href="adminindex.php"><img src="../image/update user.png"class="nav-img"alt="Update"></a></li>
            <li><a class="dropdown-item" href="adminindex.php"><h3 style="font-size:18px;"> Update User</h3></a></li>	
					</div>

					<div class="nav-option option4">
          <li><a href="drugregister.php"><img src="../image/medicine.png"class="nav-img"alt="Drug"></a></li>
            <li><a class="dropdown-item" href="drugregister.php" ><h3 style="font-size:18px;"> Drug Register</h3></a></li>				
					</div>

					<div class="nav-option option5">
          <li><a href="drugindex.php"><img src="../image/update drug.png"class="nav-img"alt="Update"></a></li>
            <li><a class="dropdown-item" href="drugindex.php"><h3 style="font-size:18px;"> Drug Update</h3></a></li>
					</div>

					<div class="nav-option option6">
          <li><a href="#"><img src="../image/user.png"class="nav-img"alt="Profile"></a></li>
						<h3 style="font-size:20px;"> Profile</h3>
					</div>

					<div class="nav-option logout">
          <li><a href="logout.php"><img src="../image/check-out.png"class="nav-img"alt="logout"></a></li>
						<li><a class="dropdown-item" href="logout.php"><h3 style="font-size:20px;">Logout</h3></a></li>
					</div>
				</div>
			</nav>
		</div>
		<div class="main">
			<div class="box-container" style=" color:#008282; margin-top:50px;">
				<div class="box box1">
					<div class="text">
						<h2 class="topic-heading">4</h2>
						<h2 class="topic">Doctors</h2>
					</div>
				</div>
				<div class="box box2">
					<div class="text">
						<h2 class="topic-heading">3</h2>
						<h2 class="topic">Nurses</h2>
					</div>
				</div>
				<div class="box box3">
					<div class="text">
						<h2 class="topic-heading">4</h2>
						<h2 class="topic">Lab Technicians</h2>
					</div>

				</div>
				<div class="box box4">
					<div class="text">
						<h2 class="topic-heading">4</h2>
						<h2 class="topic">clerks</h2>
					</div>
				</div>			
			</div>
			<div class="report-container">
				<div class="report-body">
					<h3 style="text-align: center; margin-top: 100px; font-size:50px;">Welcome to Admin Page</h3>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
<script src="./dashbord.js"></script>
<script type="text/javascript" src="javascript.js"></script>
<?php include('footer.php')?>