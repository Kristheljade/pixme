<?php 
require_once 'validate.php';
require 'name.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Registered List</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
	<nav style="background-color:rgba(0, 0, 0, 0.1);" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">PIXME ADMIN</a>
			</div>
			<ul class="nav navbar-nav pull-right ">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<ul class="nav nav-pills">
			<li><a href="home.php">Home</a></li>
			<li><a href="account.php">Accounts</a></li>
			<li><a href="freelancer.php">Freelancer</a></li>
			<li><a href="reports.php">Reports Generations</a></li>
			<li><a href="feedback.php">Reviews and Feedback</a></li>
			<li class="active"><a href="validation.php">User Validation</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<br />

	<body class="bg-dark">
		<div class="container">
			<div class="row mt-5">
				<div class="col">
					<div class="card mt-5">
						<div class="card-header">
							<h2 class="display-6 text-center">REGISTERED USER VALIDATION</h2>
						</div>
						<div class="card-body">
							<table class="table table-bordered text-center">
								<thead class="bg-dark text-white">
									<tr>
										<th>Name</th>
										<th>User Type</th>
										<th>User I.D</th>
									</tr>
								</thead>
								<tbody>
									<?php
						$query = $conn->query("SELECT * FROM `user_form`") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>	
						<tr>
							<td><?php echo $fetch['name']?></td>
							<td><?php echo $fetch['user_type']?></td>
							<td><center><img src = "../photo/<?php echo $fetch['image_url']?>" height = "200" width = "300"/></center></td>
							
						</tr>
					<?php
						}
					?>	
					</tbody>
								</tbody>	
							</table>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html>
