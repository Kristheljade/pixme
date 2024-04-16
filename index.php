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
      <title>HOME PAGE</title>
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
                       <a href="index.php" class="active">
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
        
            <div class="page-header">
                <h1>HOME PAGE</h1>
            </div>
        
    </div> 
   
   <div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
         <li data-target="#myCarousel" data-slide-to="4"></li>
         <li data-target="#myCarousel" data-slide-to="5"></li>
         <li data-target="#myCarousel" data-slide-to="6"></li>
      </ol>
      <div style = "margin:auto;" class="carousel-inner" role="listbox">
         <div class="item active">
            <img src="images/ab.jpg" style = "width:100%; height:450px;" />
         </div>
      
         <div class="item">
            <img src="images/b.jfif" style = "width:100%; height:450px;"  />
         </div>
      
         <div class="item">
            <img src="images/c.jfif" style = "width:100%; height:450px;" />
         </div>
      
         <div class="item">
            <img src="images/d.jfif" style = "width:100%; height:450px;" />
         </div>
         
         <div class="item">
            <img src="images/ef.jpg" style = "width:100%; height:450px;" />
         </div>
         
         <div class="item">
            <img src="images/f.jfif" style = "width:100%; height:450px;" />
         </div>
         
         <div class="item">
            <img src="images/g.jpg" style = "width:100%; height:450px;" />
         </div>
         
         
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>  
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
