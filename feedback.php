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
      <title>REVIEWS & FEEDBACK FORM</title>
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
                       <a href="feedback.php" class="active">
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
   

	    <style>
        body {
            margin: 0 auto;
            background-color: white;
        }
        
        div.formContainer {
            margin: 4em auto 4em auto;
            width: 80%;
            color: white;
            border: 1px solid black;
            border-radius: 2px;
            margin-top: 70px;
        }
        
        div.heading {
            margin: 10 auto;
            width: 70%;
            padding: 1em 10px;
            letter-spacing: 0.1em;
            font-size: 1.4em;
            font-weight: bold;
            border-bottom: 2px solid black;
            text-align: center;
            background-color: white;
            color: black;
        }
        
        div.description {
            margin: 0 auto 0 auto;
            text-align: center;
            color: black;
        }
        
        div.form {
            margin: 1 auto 0 auto;
            width: 90%;
        }
        
        div.form form {
            margin: 0 auto 0 auto;
            width: 100%;
        }
        
        div.form label {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            outline: none;
            color: black;
            font-weight: bolder;
            letter-spacing: 0.1;
        }
        
        div.form input {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            outline: none;
            color: black;
            padding: 1em;
            background-color: white;
            border: 0.5px solid black;
        }
        
        div.form textarea {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            outline: none;
            color: black;
            padding: 1.2em 0 1em 1.2em;
            background-color: white;
            border: 0.5px solid black;
            height: 8em;
            resize: none;
        }
        
        div.form button {
            
           display: inline-block;
            padding:5px 10px;
            font-size: 15px;
            background: #333;
            color:#fff;
            margin:0 5px;
            text-transform: capitalize;
            margin-left: 40px;
            margin-bottom: 10px;
        }
        
        div.form input:active,
        div.form input:focus,
        div.form select:active,
        div.form select:focus,
        div.form textarea:active,
        div.form textarea:focus,
        div.form button:active,
        div.form button:hover {
            box-shadow: 0 0 2px 2px white;
        }
        
        div.form button {
            background-color: white;
            color: black;
            font-weight: bolder;
            transition: all 0.2s linear;
        }
        
        @keyframes status {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }
        
        div.statusActive {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            padding: 1.2em 0 1em 1.2em;
            background-color: white;
            color: black;
            text-align: center;
            
        }
        
        div.loadingActive {
            width: 90%;
            margin: 4em auto 4em auto;
            grid-template-columns: 33.3% 33.3% 33.3%;
            display: grid;
            transition: all linear 0.2s;
        }
        
        div.loadingActive div {
            padding: 0.5em;
            animation-name: rotatingDiv;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        
        @keyframes rotatingDiv {
            from {
                transform: rotate(-180deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        @media only screen and (min-width: 1224px) {
            div.formContainer {
                width: 500px;
            }
        }
        
        @media only screen and (min-width: 1824px) {
            div.formContainer {
                width: 500px;
            }
        }
        
        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            div.formContainer {
                width: 80%;
            }
        }
    </style>


</head>

<body>


    <div class="formContainer">
        <div class="heading" style="margin-left: 40px;">
            FEEDBACK FORM
        </div>
        <div class="description">
            <p> "Your feedback matters! We value your opinion and are committed to continuously improving"</p>
        </div>
        <div class="form">
            <form id="form" action="submit.php" method="post">
                <label for="name">Name</label>
                <input name="name" type="text" id="name" placeholder="Enter your name" required/>
                <label for="email">Email</label>
                <input name="email" type="email" id="email" placeholder="Enter your email address" required/>
                <label for="review">Review:</label>
<textarea name="review" required></textarea><br><br>

            
                <button type="submit">SUBMIT</button>
            </form>
        </div>

        <div id="loading">
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
        </div>

        <div id="status">

        </div>

    </div>

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
</html>