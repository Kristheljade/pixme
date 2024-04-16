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
		<title>RULES AND REGULATION</title>
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
                       <a href="rulesandregulation.php"  class="active">
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
	<div style = "margin-top: 70px;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3><B>RULES AND REGULATION</B></h3></strong>
				<br />
				<strong><h4 style = "color:#ff0000;"><B>1. Booking Process</B></h4></strong>
				<p>The website should provide clear instructions on how to book a photography session or event. It may involve filling out a booking form, providing necessary details such as the event date, location, duration, and specific requirements.</p>
				<br />
				<strong><h4 style = "color:#ff0000;"><B>2. Payment Terms</B></h4></strong>
				<p>The website should outline the payment terms, including the total cost of the photography service, any deposit or booking fee required, and the accepted methods of payment. It may also specify the payment schedule, such as full payment upfront or partial payment before and after the event.</p>
				<br />
				<strong><h4 style = "color:#ff0000;"><B>3. Cancellation and Refund Policy</B></h4></strong>
				<p>The rules regarding cancellations and refunds should be clearly stated. It may specify any cancellation fees or penalties, the timeframe within which cancellations are accepted, and the refund policy for cancellations made by the client or the photographer.</p>
				<br />
				<strong><h4 style = "color:#ff0000;"><B>4. Rescheduling</B></h4></strong>
				<p>The website may have provisions for rescheduling a photography session or event. It should clearly state the conditions under which rescheduling is allowed, any associated fees or penalties, and the process for requesting a reschedule.</p>
				<br />
				<strong><h4 style = "color:#ff0000;"><B>5. Image Rights and Usage</B></h4></strong>
				<p>The terms and conditions should clarify the ownership and usage rights of the photographs. It may specify whether the client has exclusive rights to the images, whether the photographer retains copyright, and any limitations on the client's use of the images for personal or commercial purposes.</p>
				<br />
				<strong><h4 style = "color:#ff0000;"><B>6. Privacy and Data Protection</B></h4></strong>
				<p>The website should adhere to privacy and data protection laws. It should state how client information will be collected, stored, and used, and whether any information will be shared with third parties.</p>
				<br />
				<strong><h4 style = "color:#ff0000;"><B>7. Liability and Indemnification</B></h4></strong>
				<p>The terms and conditions may include clauses regarding the photographer's liability, including any limitations or disclaimers of liability for loss, damage, or injury during the photography session. It may also outline the client's responsibility to indemnify the photographer against any claims arising from the event.</p>
				<br />
				<strong><h4 style = "color:#ff0000;"><B>8. Termination</B></h4></strong>
				<p>The terms should state the circumstances under which the agreement between the client and the photographer can be terminated, such as non-payment, breach of contract, or any other specified reasons.</p>
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