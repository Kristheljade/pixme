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
   <title>SUBSCRIPTION</title>
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
                       <a href="subscription.php" class="active">
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
        
        

        <div class="container">
            <div class="col-1">
                <h5>SUBSCRIPTION</h5>
                <ul>
                    <li><img src="../images/icon.png">Unlimited Upload of Photos.</li>
                    <li><img src="../images/icon.png">Unlimited Upload of Videos.</li>
                    <li><img src="../images/icon.png">One Month Free Subscription.</li>
                    <li><img src="../images/icon.png">Individual Account.</li>
                </ul>
                <div class="col-2">
        <label for="paid">
            <input type="radio" name="plans" id="free">
            <span>199₱ <small>/FREE ONE MONTH</small></span>
        </label>
        <br>
        <br>
        <br>
        <p>YOUR NAME</p>
        <input type="text" placeholder="Enter Your Name">
        <p>EMAIL ADDRESS</p>
        <input type="email" placeholder="Enter Your Email ID">
        <button type="submit">Subscribe</button>
                </div>
            </div>
        </div>
        
        
    </div> 
</body>
<style>
    
header {
    position: fixed;
    right: 0;
    top: 0;
    left: 165px;
    z-index: 100;
    height: 60px;
    box-shadow: 0px 5px 5px -5px rgb(0 0 0 /10%);
    background: #fff;
    transition: left 300ms;
}

.header-content, .header-menu {
    display: flex;
    align-items: center;
}

.header-content {
    justify-content: space-between;
    padding: 0rem 1rem;
    cursor: pointer;

}

.header-content label:first-child span {
    font-size: 2.5rem;
    margin-top: 20px;

}

.header-content label {  
    margin-right: 20px;
}

.header-menu {
    justify-content: flex-end;
    padding-top: 1.3rem;
    margin-right: 20px;
    cursor: pointer;
}


.user {
    display: flex;
    align-items: center;
    text-decoration: none;
}
.log li a {
    color: black;
}

.user div, .client-img {
    height: 40px;
    width: 40px;
    margin-right: 1rem;
}

.user span:last-child {
    display: inline-block;
    margin-left: .3rem;
    font-size: .8rem;
}

main {
    margin-top: 60px;
}

.page-header {
    padding:10px 10px;
    background: #E9edf2;
 
}

.page-header h1, .page-header small {
    color: #74767d;
}

.page-content {
    padding: 1.3rem 1rem;
    background: #f1f4f9;
}


@media only screen and (max-width: 768px) {
   
    
    .sidebar {
        left: -165px;
        z-index: 90;
    }
    
    header {
        left: 0;
        width: 100%;
    }
    
    .main-content {
        margin-left: 0;
        width: 100%;
    }
    
    #menu-toggle:checked ~ .sidebar {
        left: 0;
    }
    
    #menu-toggle:checked ~ .sidebar {
        width: 165px;
    }

    #menu-toggle:checked ~ .sidebar .side-header span {
        display: inline-block;
    }

    #menu-toggle:checked ~ .sidebar .profile,
    #menu-toggle:checked ~ .sidebar .side-menu a small {
        display: block;
    }

    #menu-toggle:checked ~ .sidebar .side-menu a span {
        font-size: 1.7rem;
    }
    
    #menu-toggle:checked ~ .main-content header {
        left: 0px;
    }
    
}



.container{
    width: 100%;
    min-height: 100vh;
    

}
.col-1{
    flex-basis:50%;
    flex-grow: 1;
    background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
    background-position: left;
    min-height: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    color: #fff;
}
.col-2{
    flex-basis: 50%;
    flex-grow: 1;
    padding: 50px 80px;
}
.responsive {
    max-width: 100%;
    height: auto;

}
h5{
    margin-top: 90px;
    font-size: 20px;
}
.col-1 ul{
    list-style:none;
    margin-top: 5px;

}

.col-1 ul li{
    display: flex;
    align-items: center;
    margin: 20px 20px;
}
.col-1 ul li img{
    width: 20px;

}
label span small{
    font-size: 19px;
    margin-bottom: 10px;

}

input[type="text"], input[type=
"email"]{
    width: 100%;
    padding: 7px 10px;
    outline: none;
    border: 1px solid #fff;
    border-radius: 4px;
    margin: 12px 0;
}

button{
    padding: 7px 10px;
}

button:hover{
        transform: translateY(-1px);
    }

</style>
</html>