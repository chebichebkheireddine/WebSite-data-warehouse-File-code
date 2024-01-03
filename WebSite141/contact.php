<?php
include('include/header.php');
?>
<div class="buttom-header-sub">
  <div class="container">
    <div class="sub-page">
      <h2 class="txt-about">Contact</h2>
    </div>
  </div>
</div>
<!--start contact-->


<div class="contact" id="contact">
  <div class="container1">
    <span class="big-circle"></span>
    <img src="images/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Contactez_Nous</h3>
        <p class="text">
          Nous somme là pour vos questions et vos demandes de renseignement. Bienvenue! pour une agréable visit.
        </p>
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
          <input type="submit" onclick="sendEmail()" value="Envoyer" class="btn_1" />
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

include('include/footer.php');

?>

<!-- ==== ANIMATE ON SCROLL JS CDN -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- ==== GSAP CDN ==== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<!-- ==== SCRIPT.JS ==== -->
<script src="./js/contc.js"></script>
</body>

</html>