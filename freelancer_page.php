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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>freelancer page</title>

   
<style>

.form-control-feedback {
  
   pointer-events: auto;
  
}

.msk-set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.msk-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
    background-color:red;
}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         My Profile
         <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">My Profile</a></li>
      </ol>
   </section>
    
<?php 
include_once('../controller/config.php');

$index=$_SESSION["index_number"];

$sql="SELECT * FROM admin WHERE index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$full_name=$row['full_name'];
$i_name=$row['i_name'];
$gender=$row['gender'];
$address=$row['address'];
$phone=$row['phone'];
$email=$row['email'];
$image=$row['image_name'];

$sql1="SELECT * FROM user WHERE email='$email'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);

$user_name=$row1['email'];
$password=$row1['password'];

?>
    
   <section class="content"> 
      <div class="row">
         <div class="col-md-7">
               <div class="panel"><!--panel bg-maroon--> 
                  <div class="panel-heading bg-aqua-active">   
                     <h4 class="panel-title" id="hname"><?php echo $i_name; ?></h4>
                    </div>          
                    <div class="panel-body"><!--panel-body -->
                     <div class="row" id="my_profile">
                        <div class="col-md-3"> 
                           <img id="photo2" alt="User Pic" src="../<?php echo $image; ?>" class="img-circle img-responsive"> 
                        </div>
                        <div class=" col-md-9"> 
                              <table class="table table-bordered table-striped">
                              <tbody>
                                    <tr>
                                       <td class="col-md-4">Full Name</td>
                                       <td id="full_name"><?php echo $full_name; ?></td>
                                    </tr>
                                    <tr>
                                       <td>Name With Initials</td>
                                       <td id="i_name"><?php echo $i_name; ?> </td>
                                    </tr>
                                    <tr>
                                       <td>Address</td>
                                       <td id="address"><?php echo $address; ?> </td>
                                    </tr>
                                    <tr>
                                       <td>Gender</td>
                                       <td id="gender"><?php echo $gender; ?> </td>
                                    </tr>
                                    <tr>
                                       <td>Email</td>
                                       <td id="email"><?php echo $email; ?> </td>
                                    </tr>
                                        <tr>
                                       <td>Phone Number</td>
                                       <td id="phone"><?php echo $phone; ?> </td>
                                    </tr>
                                        <tr>
                                       <td>User Name</td>
                                       <td id="email"><?php echo $user_name; ?> </td>
                                    </tr>
                                        <tr>
                                       <td>Password</td>
                                       <td id="phone"><?php echo $password; ?> </td>
                                    </tr>
                              </tbody>
                              </table>
                           </div>
                        </div>
                        <p class="alert-info" id="note1"><strong>Note: We get the email address for the user name.</strong></p>
                     </div>
                     <div class="panel-footer text-right" id="panel_footer" >
                     <a href="#" onClick="editMyProfile('<?php echo $index; ?>')" type="button" class="btn btn-sm btn-warning" id="btnEdit"><i class="glyphicon glyphicon-edit"></i></a><!--MSK-00151-->
                        <input type="hidden" id="id1" value="">
                        <input type="hidden" id="i_path1" value="">
                        <span class="pull-right"></span>
                    </div>
               </div><!--/. panel--> 
         </div>
      </div><!--/.row --> 
   </section>

</body>
</html>