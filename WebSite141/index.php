<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null</title>

     <!-- ====  REMIXICON CDN ==== -->
     <link
     href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
     rel="stylesheet"
   />

   <!--main template css file -->
   <link rel="stylesheet" href="css/len.css">
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

<?php 
include('config.php');

include ('include/header.php');



?>

 <?php
 include('loding.php');
 ?>
 <!--Start About-->
 <div class="about" id="about">
      <section class="about">
        <h2 class="main-title">About</h2>
        <div class="main">
          <img src="images/Data extraction-cuate.png" alt="">
          <div class="about-text">
             <h1>[ NU⅃⅃ ]</h1>
            <h5>Algerian NUSF. FASU</h5>
            <p>Algerian NUSF. FASU est une ligue spécialisée pour les différents jeux sportifs dont la participation est consacrée seulement pour les étudiants universitaires.</p>
          </div>
        </div>
      </section>
      </div>
    <!--End About-->

    <!--Start Our Team-->

    <div class="out_team" id="out_team">
        <h2 class="main-title">out team</h2>
        <section id="team">
            <div class="container19">
            <?php
                $get_req = "select * from admin ";
                $run_info = mysqli_query($conn, $get_req);
            while ($row_info = mysqli_fetch_array($run_info)) {

                $id_a = $row_info['id_a'];

                $name = $row_info['fast_name'];

                $prenome = $row_info['last_name'];

                $phto = $row_info['photo'];

                $email= $row_info['email'];

               

                echo "
                <div class='box'>
                    <div class='top-bar'></div>
                    <div class='nav9'>
                        <i class='verify fas fa-check-circle'></i>
                        <input type='checkbox' class='heart-btn' id='heart-btn'>
                        <label class='heart'></label>
                    </div>

                    <div class='details'>
                        <img src='admin/photo_us/$phto'' alt=''>
                        <strong>$name  $prenome</strong>
                        <p>$email</p>
                    </div>

                
                    <div class='social-links'>
                            <a href='#'><i class='fa-brands fa-facebook'></i></a>
                            <a href='#'><i class='fa-brands fa-instagram'></i></a>
                            <a href='#'><i class='fa-brands fa-github'></i></a>
                            <a href='#'><i class='fa-brands fa-twitter'></i></a>
                    </div>  
                        </div>";
            }?>
            </div>
        </section>
    </div>
    <!--end Our Team-->

 <?php 

	include ('include/footer.php');

?>
  <!-- ==== ANIMATE ON SCROLL JS CDN -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ==== GSAP CDN ==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <!-- ==== SCRIPT.JS ==== -->
    <script src="./js/app.js" ></script>
</body>
</html>