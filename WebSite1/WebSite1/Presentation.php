<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

	include ('include/header.php');

?>

 <!--about-->
 <div class="buttom-header-sub">
    <div class="container">
   <div class="sub-page">
       <h2 class="txt-about">Presentation</h2>
   </div>
</div>
</div>
<main class="main" id="main">
    <div class="container">
    <div class="content-sub-about">
        <img src="" alt="">
        
        <h2><span>Null data warehouse</span></h2>
        
        <p>
        A data warehouse is a central repository of information that can be analyzed to make more informed decisions. Data flows into a data warehouse from transactional systems, relational databases, and other sources, typically on a regular cadence
            
        </p>
    </div>
</div>
</main>
<!--end about-->
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