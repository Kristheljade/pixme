<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Photographer/Videographer Booking</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   </head>
<body>

   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3><span>CLIENT</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(images/avatar.jpg)"></div>
                <h4><?php echo$_SESSION['user_name']; ?></h4>
                <small>CLIENT</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="index.php">
                            <span class="fa-solid fa-house"></span>
                            <small>HOME</small>
                        </a>
                    </li>
                    <li>
                       <a href="reservation.php" class="active">
                            <span class="fa-solid fa-calendar-days"></span>
                            <small>HIRE PHOTOGRAPHER</small>
                        </a>
                    </li>
                    <li>
                       <a href="promo.php">
                            <span><i class="fa-solid fa-bullhorn"></i></span>
                            <small>PROMO MANAGEMENT</small>
                        </a>
                    </li>
                     
                    <li>
                       <a href="feedback.php">
                            <span><i class="fa-regular fa-comments"></i></span>
                             <small>REVIEWS & FEEDBACK FORM</small>
                        </a>
                    </li>
                    <li>
                       <a href="report.php">
                            <span><i class="fa-regular fa-comments"></i></span>
                            <small>REPORT FREELANCER</small>
                        </a>
                    </li>
                    <li>
                       <a href="aboutus.php">
                            <span class="fa-solid fa-users"></span>
                            <small>ABOUT US</small>
                        </a>
                    </li>
                    <li>
                       <a href="contactus.php">
                            <span class="fa-solid fa-phone-volume"></span>
                            <small>CONTACT US</small>
                        </a>
                    </li>
                    <li>
                       <a href="rulesandregulation.php">
                            <span class="fa-solid fa-scroll"></span>
                            <small>RULES AND REGULATION</small>
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
                        <span>CLIENT</span>
                    </label>
                    <div class="notify-btn" id="notify-btn">
      <button type="button" class="icon-button">
        <span><i class="fa-solid fa-bell"></i></span>
        <span class="icon-button_badge" id="show_notif">0</span>
      </button>
    </div>
                    
                    <div class="user">

                        <div class="bg-img" style="background-image: url(images/avatar.jpg)"></div>
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
	<div style = "margin-top: 70px;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3><B>MAKE A BOOKING</B></h3></strong>
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `freelancer` WHERE `freelancer_id` = '$_REQUEST[freelancer_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:250px; width:250px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "250px" width = "250px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['freelancer_type']?></h3>
						<h3 style = "color:#00ff00;"><?php echo "Php. ".$fetch['price'].".00";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
                        <div>
                        <label>Days</label>
                        <input type = "number" min = "0" max = "99" name = "days" class = "form-control" required = "required"/>
                    </div>
                    <div class = "form-group">
							<label>Date</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_client"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<style>
    .icon-button_badge{
      position: absolute;
      top: 3px;
      
      width: 25px;
      height: 25px;
      background: red;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
    }
  </style>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>