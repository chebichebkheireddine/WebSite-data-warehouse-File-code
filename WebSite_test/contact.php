<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
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
include('include/header.php');
?>
<div class="buttom-header-sub">
    <div class="container">
   <div class="sub-page">
       <h2 class="txt-cont">Contact</h2>
   </div>
</div>
</div>
<!--start contact-->
<div class="contact" id="contact">
 <div class="container">
  <span class="big-circle"></span>
  <img src="images/shape.png" class="square" alt="" />
  <div class="form">
    <div class="contact-info">
      <h3 class="title">Prenons contact</h3>
      <p class="text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
        dolorum adipisci recusandae praesentium dicta!
      </p>
      <div class="info">
        <div class="information">
          <img src="images/icons8-location-64 (1).png" class="icon" alt="" />
          <p>Daly-ibrahim BP 89 ROSTOMIA (16160)</p>
        </div>
        <div class="information">
          <img src="images/icons8-email-64.png" class="icon" alt="" />
          <p>Contactfasu.dz@gmail.com</p>
        </div>
        <div class="information">
          <img src="images/icons8-phone-64.png" class="icon" alt="" />
          <p>(213) 23 25 82 36 / (213) 23 25 82 55</p>
        </div>
      </div>

      <div class="social-media">
        <div class="social-icons">
          <a href="https://www.facebook.com/Federationalgeriennedusportuniversitaire/reviews/?ref=page_internal">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href=" mailto:Contactfasu.dz@gmail.com"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
    </div>

    <div class="contact-form">
      <span class="circle one"></span>
      <span class="circle two"></span>

      <h4 class="sent-notification"></h4>
      <form id="myForm">
        <h3 class="title">Contactez-nous</h3>
        <div class="input-container">
          <input type="text" id="name" class="input" />
          <label for="">Nom</label>
          <span>Nom</span>
        </div>
        <div class="input-container">
          <input type="email" id="email" class="input" />
          <label for="">Email</label>
          <span>Email</span>
        </div>
        <div class="input-container">
          <input type="tel" id="subject" class="input" />
          <label for="">Téléphone</label>
          <span>Téléphone</span>
        </div>
        <div class="input-container textarea">
          <textarea id="body" class="input"></textarea>
          <label for="">Message</label>
          <span>Message</span>
        </div>
        <input type="submit" onclick="sendEmail()" value="Envoyer" class="btn" />
      </form>
    </div>
  </div>
</div>
 </div>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

  <!--end contact-->






  <?php 

include ('include/footer.php');

?>


         <!-- ==== ANIMATE ON SCROLL JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ==== GSAP CDN ==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <!-- ==== SCRIPT.JS ==== -->
    <script src="./js/contc.js" ></script>
</body>  
</html>

