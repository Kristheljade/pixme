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
   <title>PROFILE PAGE</title>
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
                       <a href="profile.php" class="active">
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

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container rounded bg-white mt-5 mb-5"> 
            <div class="row"> 
                <div class="col-md-3 border-right"> 
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="../images/avatarr.jpg" width="250" height="250">
                        <br>
                        <br>
                        <span class="text-black-50"><?php echo$_SESSION['freelancer_name']; ?></span>
                        <br>
                       
                        
                    </div> 
                </div> 
                <br>
                <div class="col-md-5 border-right"> 
                    <div class="p-3 py-5"> 
                        <div class="d-flex justify-content-between align-items-left mb-5 font-size:30px;"> 
                            <h4 class="text-left">Profile Settings</h4> 
                        </div> <div class="row mt-2"> 
                            <div class="col-md-6"><label class="labels">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter your first name" value=""></div> 
                                <div class="col-md-6"><label class="labels">Last Name</label>
                                    <input type="text" class="form-control" value="" placeholder="Enter your last name"></div> 
                                </div> 
                                <div class="row mt-3"> 
                                    <div class="col-md-12"><label class="labels">Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Enter phone number" value="">
                                    </div> 
                                    <div class="col-md-12"><label class="labels">Address</label>
                                        <input type="text" class="form-control" placeholder="Enter your address" value="">
                                    </div> 
                                    <div class="col-md-12"><label class="labels">Email Address</label>
                                        <input type="text" class="form-control" placeholder="Enter email address" value="">
                                    </div> 
                                    <br>
                                      <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button>
                                      </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<style>
    

.form-control:focus
{
    box-shadow: none;
    border-color: #BA68C8;
}
.profile-button
{
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none;
}
.profile-button:hover
{
    background: #682773;
}
.profile-button:focus
{
    background: #682773;
    box-shadow: none;
    margin-top:30px;
}
.profile-button:active
{
    background: #682773;
    box-shadow: none;
}
.back:hover
{
    color: #682773;
    cursor: pointer;
}
.labels
{
    font-size: 11px;
}
.add-experience:hover
{
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8;
}

</style>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script> 
</html>