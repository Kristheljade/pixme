
<!DOCTYPE html>
<html lang = "en">
   <head>
      <title>GCASH  PAYMENT</title>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
      <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
      <link rel = "stylesheet" type = "text/css" href = "g.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
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
                <h4>Dexter</h4>
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
                       <a href="gallery.php">
                            <span class="fa-solid fa-image"></span>
                            <small>SAMPLE SHOT</small>
                        </a>
                    </li>
                    <li>
                       <a href="equipments.php">
                            <span class="fa-solid fa-camera-retro"></span>
                            <small>EQUIPMENTS</small>
                        </a>
                    </li>
                    <li>
                       <a href="reservation.php">
                            <span class="fa-solid fa-calendar-days"></span>
                            <small>MAKE A BOOKING</small>
                        </a>
                    </li>
                    <li>
                       <a href="promo.php">
                            <span><i class="fa-solid fa-bullhorn"></i></span>
                            <small>PROMO MANAGEMENT</small>
                        </a>
                    </li>
                    <li>
                       <a href="payment.php"  class="active">
                            <span><i class="fa-solid fa-credit-card"></i></i></span>
                            <small>PAYMENT METHOD</small>
                        </a>
                    </li>
                    <li>
                       <a href="feedback.php">
                            <span><i class="fa-regular fa-comments"></i></span>
                            <small>FEEDBACK FORM</small>
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
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form method="POST">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Nick Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Adress" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4> Date of Birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>
                <div class="input-box">
                    <h4> Gender</h4>
                    <input type="radio" id="b1" name="gendar" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gendar" class="radio">
                    <label for="b2">Female</label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    
                    <label for="bc1"><span><i class="fa fa-cc-visa"><a href="payment.php" style="text-decoration: none; color: black;"> Credit Card</a></i></span></label>
                   
                    <label for="bc2"><span><a href="gcash.php" style="text-decoration: none; color: black;"> Gcash</a></span></label>
                    
                </div>
            </div>
                    <label class="g" ><span style="float: left; padding: 5px 30px; color: #838686;">PIXME GCASH NUMBER: 09917042895</span></label>

                    <label>Upload receipt</label>
                    <input type="file" name="images" id="images" class="form-control">

                  
                      
            <br>
            <br>
            
            <div class="input-group">
                <div class="input-box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>
        </form>
   

  
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script> 
</html>