<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en">
<head>
	<title>Reports Generations List</title>
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
			<ul class="nav navbar-nav pull-right">
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
			<li class="active"><a href="reports.php">Reports Generations</a></li>
			<li><a href="feedback.php">Reviews and Feedback</a></li>
			<li><a href="validation.php">User Validation</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<br />
	<div class="container">
		<h3>User Report Generations</h3>
		<?php
		$file = fopen('../admin/reports.csv', 'r');
		if ($file !== false) {
			echo "<table border='1'>";
			echo "<tr><th>Name</th><th>Email</th><th>Reported Freelancer</th><th>Review Reason</th></tr>";
			while (($data = fgetcsv($file)) !== false) {
				echo "<tr>";
				foreach ($data as $value) {
					echo "<td>{$value}</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			fclose($file);
		} else {
			echo "No reports found.";
		}
		?>
	</div>
</body>
</html>
