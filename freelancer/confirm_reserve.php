<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>

<head>
    <meta charset="UTF-8">
    <title>Service Transaction</title>
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
        </main>
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Confirmation Reservation form</div>
				<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `client` NATURAL JOIN `freelancer` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<form method = "POST" enctype = "multipart/form-data" action = "save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
					<div class = "form-inline" style = "float:left;">
						<label>Firstname</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['firstname']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Middlename</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['middlename']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Lastname</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['lastname']?>" class = "form-control" size = "40" disabled = "disabled"/>
					</div>
					<br style = "clear:both;"/>
					<br />
					<!--
					<div class = "form-inline" style = "float:left;">
						<label>freelancer Type</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['freelancer_type']?>" class = "form-control" size = "20" disabled = "disabled"/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Freelancer No.</label>
						<br />
						<input type = "number" min = "0" max = "1" name = "freelancer_no" class = "form-control" required = "required"/>
					</div>-->
					<div class = "form-inline" style = "float:left;">
						<label>Days</label>
						<br />
						<input type = "number" min = "0" max = "99" name = "days" class = "form-control" required = "required"/>
					</div>
					
					<br style = "clear:both;"/>
					<br />
					<button name = "add_form" class = "btn btn-primary"><i class = "glyphicon glyphicon-save"></i> Submit</button>
				</form>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>