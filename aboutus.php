<!DOCT<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang = "en">
   <head>
      <title>ABOUT US</title>
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
            <h3><span>USER</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(images/avatar.jpg)"></div>
                <h4><?php echo$_SESSION['user_name']; ?></h4>
                <small>USER</small>
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
                       <a href="reservation.php">
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
                       <a href="aboutus.php" class="active">
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
                        <span>USER</span>
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
    </div> 
   

	<div style = "float: center; margin-top: 70; width: 370px;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3><b style = "margin-left: 80px;">ABOUT US</b></h3></strong>
				<p style = "position:relative; float:center; width:300px;">KADJA Solution Tech was named by the initials of its external team members. The company's marketing manager, Kristhel Jade Ocde, was responsible for the initial K. Angelito Guillermo, the company's financial manager, gave the A initial. Dexter Nabor, a software engineer for the company, contributed the D initial, and Jordan Rodolfo, a project manager, contributed the J initial. Whereas Alexis Allen Tejada, a software developer for the company, provided the A initial. Our clients anticipate a fun, easy-to-use internet experience. To fulfill our purpose, it is essential to give great service and quality customer care. </p>
				<p style = "position:relative; float:center; width:300px;">Pix.me is a platform that provides a range of photography services, including the top photographers and filmmakers, for significant events like weddings, debuts, anniversaries, and more. As a consequence, your events stand out. </p>
				<p style = "position:relative; float:center; width:300px;">OUR VISION IS TO PROMOTE COLLABORATION, KNOWLEDGE MANANGEMENT, AND ANALYTICS BY DELIVERING ADVANCED CAPABILITIES AND OUR MISSION BY IMPROVING OUR CYBERSECURITY POSTURE WE CAN PROTECT THE DATA INTEGRITY OF THE DEPARTMENT'S ASSETS.</p>
				


				<img style = "margin-left: 50px;" src = "images/ab.jpg" width = "200px" height = "120px" />
				
				<br />
				<br />

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