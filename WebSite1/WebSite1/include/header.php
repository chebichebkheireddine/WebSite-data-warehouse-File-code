
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ====  REMIXICON CDN ==== -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

  <!--main template css file -->
  <link rel="stylesheet" href="css/len.css">
  <!-- Render All Elements Normally (عرض جميع العناصر بشكل طبيعي)-->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Font Awesome Library (الايقونات imoji) -->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <!--icon(علامة ايقون الذي يظهر في المتصفح)-->
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;600;800&display=swap"
    rel="stylesheet">

</head>

<body>
  <!-- Start Header -->
  <div class="header" id="header">
    <!--container (?? ??? ???? ???? ?? ????? )-->
    <div class="container">
      <nav class="nav">
        <a href="index.php" class="logo">[ NU⅃⅃ ]</a>

        <div class="nav_menu" id="nav_menu">
          <button class="close_btn" id="close_btn">
            <i class="ri-close-fill"></i>
          </button>
          <ul class="main-nav">
            <li><a href="index.php" class="active"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="Presentation.php"><i class="fa fa-clone"></i> Presentation</a>
              <!-- Start About -->
              <div class="mega-menu">
                <ul class="links">
                  <li><a href="Team.php"><i class="fa-solid fa-address-card"></i> Team</a>
                  </li>
                  <li>
                    <a href="user_do.php"><i class="fas fa-users"></i> Roll Member</a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- End About -->
            <li><a href="#"><i class="fa-regular fa-folder-open"></i>  Presentation</a>
              <!-- Start Events -->
              <div class="mega-menu">
                <ul class="links">
                  <li><a href="show_file.php"><i class="fa-regular fa-file-chart-column"></i> Raport</a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- End Events -->
            <li><a href="contact.php"><i class="fa fa-paper-plane"></i>  Contact</a></li>
            <li id="login-on"><a href="admin/login.php">Loge in<i class="fa fa-user-circle"></i></a></li>
          </ul>
        </div>
        <button class="toggle_btn" id="toggle_btn">
          <i class="ri-menu-line"></i>
        </button>
      </nav>
    </div>
  </div>
  <!-- End header -->

  <!-- ==== ANIMATE ON SCROLL JS CDN -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- ==== GSAP CDN ==== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
  <!-- ==== SCRIPT.JS ==== -->
  <script src="./js/app.js"></script>
