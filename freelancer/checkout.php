<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
	<head>
		<title>Done</title>
		<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
      <link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3><span>FREELANCER</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(../images/avatarr.jpg)"></div>
                <h4><?php echo$_SESSION['freelancer_name']; ?></h4>
                <small>FREELANCER</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="freelancer_page.php">
                            <span class="fa-solid fa-house"></span>
                            <small>HOME</small>
                        </a>
                    </li>
                    <li>
                       <a href="profile.php">
                            <span class="fa-regular fa-user"></span>
                            <small>PROFILE</small>
                        </a>
                    </li>
                    <li>
                       <a href="subscription.php">
                            <span class="fa-regular fa-envelope"></span>
                            <small>SUBSCRIPTION</small>
                        </a>
                    </li>
                    <li>
                       <a href="portfolio.php">
                            <span class="fa-sharp fa-solid fa-clipboard-list"></span>
                            <small>PORTFOLIO</small>
                        </a>
                    </li>
                    <li>
                       <a href="transaction.php"  class="active">
                            <span class="fa-solid fa-arrow-right-arrow-left"></span>
                            <small>SERVICE TRANSACTION</small>
                        </a>
                    </li>
                    <li>
                       <a href="logout.php">
                            <span class="fa-sharp fa-solid fa-right-from-bracket"></span>
                            <small>LOGOUT</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="fa-solid fa-bars"></span>
                </label>
                
                <div class="header-menu">
                    <label for="">
                        <span>FREELANCER</span>
                    </label>
                    
                    <div class="user">

                        <div class="bg-img" style="background-image: url(../images/avatarr.jpg)"></div>
                    </div>
                    <div class="log">
                        <li>
                            <span class="fa-solid fa-power-off"></span>
                            <a href="logout.php">LOGOUT</a>
                        </li>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>SERVICE TRANSACTION</h1>
            </div>
        </main>	<div class = "container-fluid">	
		<div class = "panel panel-default">
			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'On Going'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			<div class = "panel-body">
				<a class = "btn btn-success" href = "reserve.php"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
				<a class = "btn btn-info" href = "checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> On Going</a>
				<a class = "btn btn-warning disabled"><i class = "glyphicon glyphicon-eye-open"></i> Done</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Freelancer</th>
							<!--<th>Photographer no</th>-->
							<th>Started</th>
							<th>Days</th>
							<th>Finish</th>
							<th>Status</th>
							<th>Bill</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `client` NATURAL JOIN `freelancer` WHERE `status` = 'Done'") or die(mysqli_query());
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
							<td><?php echo $fetch['freelancer_type']?></td>
							<!--<td><?php echo $fetch['freelancer_no']?></td>-->
							<td><?php echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>"." @ "."<label>".date("h:i a", strtotime($fetch['checkin_time']))."</label>"?></td>
							<td><?php echo $fetch['days']?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']."+".$fetch['days']."DAYS"))."</label>"." @ "."<label>".date("h:i A", strtotime($fetch['checkout_time']))."</label>"?></td>
							<td><?php echo $fetch['status']?></td>
							<td><?php echo "Php. ".$fetch['bill'].".00"?></td>
							<td><label class = "">Paid</label></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>