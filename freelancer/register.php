<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         // Password validation
         $pass = $_POST['password'];
         $uppercase = preg_match('@[A-Z]@', $pass);
         $lowercase = preg_match('@[a-z]@', $pass);
         $number    = preg_match('@[0-9]@', $pass);
         $special    = preg_match('@[^A-Za-z0-9]@', $pass);


         if(!$uppercase || !$lowercase || !$number || !$special || strlen($pass) < 8) {
            $error[] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one lower case letter, special character and one digit.';
         }else{
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
         }
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
   <header>
    <img src="kadjalogo.png" alt="Logo">
  </header>
      <h3>Register Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter your Name">
      <input type="email" name="email" required placeholder="Enter your Email">
      <input type="password" name="password" required placeholder="Enter
 your Password">
      <input type="password" name="cpassword" required placeholder="Confirm your Password">
      <select name="user_type">
         <option value="user">USER</option>
         <option value="freelancer">FREELANCER</option>
         <option value="admin">ADMIN</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p> <a href="login_form.php">Login Now</a></p>
   </form>

</div>

</body>
</html>