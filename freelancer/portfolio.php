<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['freelancer_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
     <meta charset = "utf-8" />
      <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
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
                       <a href="portfolio.php"  class="active">
                            <span class="fa-sharp fa-solid fa-clipboard-list"></span>
                            <small>PORTFOLIO</small>
                        </a>
                    </li>
                    <li>
                       <a href="transaction.php" >
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
        
        <div style = "margin-top:70px;" class = "container">
        <div class = "panel panel-default">
            <div class = "panel-body">
                <strong><h3><B>MY PORTFOLIO</B></h3></strong>
                <br />
                <br />
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/1.jpg" width = "250" height = "250"/>
                </div>
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/2.jpg" width = "250" height = "250"/>
                </div>
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/3.jpg" width = "250" height = "250"/>
                </div>
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/4.jpg" width = "250" height = "250"/>
                </div>
                <br style = "clear:both;" />
                <br />
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/5.jpg" width = "250" height = "250"/>
                </div>
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/6.jpg" width = "250" height = "250"/>
                </div>
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/7.jpg" width = "250" height = "250"/>
                </div>
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/8.jpg" width = "250" height = "250"/>
                </div>
                <br style = "clear:both;" />
                <br />
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/9.jpg" width = "250" height = "250"/>
                </div>
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/10.jpg" width = "250" height = "250"/>
                </div>
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/11.jpg" width = "250" height = "250"/>
                </div>
                <div style = "float:left; width:250px; height:250px; margin-left:20px;">
                    <img src = "../images/gallery/12.jpg" width = "250" height = "250"/>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
        
    </div>
</body>
</html>