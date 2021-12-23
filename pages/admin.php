<?php include '../php/admin-session.php';?>

<?php


$ad = mysqli_connect("localhost","root","","");
mysqli_select_db($ad,"login");   

$adrow = " SELECT * FROM admin";
$fetchad = mysqli_query($ad,$adrow) or die(mysqli_error($ad)); 

$totalad = mysqli_num_rows($fetchad);


///////////////////////////////////////////////

$log = mysqli_connect("localhost","root","","");
mysqli_select_db($log,"login");   

$logrow = " SELECT * FROM user";
$fetchlog = mysqli_query($log,$logrow) or die(mysqli_error($log)); 

$totallog = mysqli_num_rows($fetchlog);

///////////////////////////////////

$con = mysqli_connect("localhost","root","","");
mysqli_select_db($con,"list");   

$totalrow = " SELECT * FROM main";
$fetchrow = mysqli_query($con,$totalrow) or die(mysqli_error($con)); 

$total = mysqli_num_rows($fetchrow);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/admin.css">



	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a class="sidebtn" data-value="1" href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a class="sidebtn" data-value="2" href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Accounts</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="../php/logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Admin panel</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><?php echo "$total";?></h3>
						<p>Total Uploads</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php echo "$totallog";?></h3>
						<p>Total Users</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3><?php echo "$totalad";?></h3>
						<p>Admins</p>
					</span>
				</li>
			</ul>

         <div class="rowgrid">
			 <div class="grids list-2">
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Accounts</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
							<th>ID</th>
								<th>UserName</th>
								<th>Name</th>
								<th>Email</th>
								<th>actions</th>
							</tr>
						</thead>
						<tbody>
							<?php include '../php/user-table.php'?>
						</tbody>
					</table>
				</div>
				
			</div>
</div>

            <div class="grids list-1">
            <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Uploads</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Place</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php include '../php/upload-table.php'?>
						</tbody>
					</table>
				</div>
</div>
				
			</div>


</div>






		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="../js/admin.js"></script>
</body>
</html>