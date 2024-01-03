<?php 
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

     <!-- ====  REMIXICON CDN ==== -->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

   <!--main template css file -->
   <link rel="stylesheet" href="css/Log.css">
   <!-- Render All Elements Normally (عرض جميع العناصر بشكل طبيعي)-->
   <link rel="stylesheet" href="css/normalize.css">
   <!-- Font Awesome Library (الايقونات imoji) -->
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <!--icon(علامة ايقون الذي يظهر في المتصفح)-->
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png"/>
   <!--google fonts-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;600;800&display=swap" rel="stylesheet">

</head> 
<body>
<div class="container">
      <div class="wrapper">
      <header>Login</header>
        <form action="login" method="POST">
        <div class="field">
          <div class="label">
                        Email
                     </div>
            <input type="email" id="user" name="email" required>
          </div>
          <div class="field">
          <div class="label">
          Password
                     </div>
            <input type="password" id="pass" name="password" required>
          </div>
          <div class="row button">
            <input type="submit" id="btn" name="login" value="Login">
          </div>

        </form>
      </div>
    </div>
<!-- ==== ANIMATE ON SCROLL JS CDN -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <!-- ==== GSAP CDN ==== -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
      <!-- ==== SCRIPT.JS ==== -->
      <script src="./js/app.js" ></script>
  </body>  
  </html>
  <?php 
  if(isset($_POST['login'])){
        
    $admin_email = mysqli_real_escape_string($conn,$_POST['email']);
    
    $admin_pass = mysqli_real_escape_string($conn,$_POST['password']);
    
    $get_admin = "select * from admin where email='$admin_email' AND pasword='$admin_pass'";
    
    $run_admin = mysqli_query($conn,$get_admin);
    
    $count = mysqli_num_rows($run_admin);
    
    if($count==1){
        
        $_SESSION['email']=$admin_email;
        
        echo "<script>alert('Logged in. Welcome Back')</script>";
        
        echo "<script>window.open('index.php?dashboard','_self')</script>";
        
    }else{
        
        echo "<script>alert('Email or Password is Wrong !')</script>";
        
    }
    
}?>