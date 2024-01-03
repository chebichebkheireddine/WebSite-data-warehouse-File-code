<?php

session_start();

if (!isset($_SESSION["id"])) {
    header("Location: signup.php");
    header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
 <p> </p>
</body>

</html>