<?php
session_start();
include("config.php");
if (!isset($_SESSION['email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {
    $admin_session = $_SESSION['email'];

    $get_admin = "select * from admin where email='$admin_session'";

    $run_admin = mysqli_query($conn, $get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['id_a'];

    $admin_name = $row_admin['fast_name'];

    $admin_last= $row_admin['last_name'];

    $admin_email = $row_admin['email'];

    $admin_image = $row_admin['photo'];


    $admin_about = $row_admin['about_him'];

   

   $skil1= $row_admin['skil_1'];

   $skil2= $row_admin['skil_2'];

   $skil3= $row_admin['skil_3'];

   $skil4= $row_admin['skil_4'];

   $skil5= $row_admin['skil_5'];

    
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Null Admin Area</title>
        <link rel="stylesheet" href="css/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>


        <body>

            <div id="wrapper">
                <!-- #wrapper begin -->

                <?php include("include/sidebar.php"); ?>

                <div id="page-wrapper">
                    <!-- #page-wrapper begin -->
                    <div class="container-fluid">
                        <!-- container-fluid begin -->

                        <?php

                        if (isset($_GET['dashboard'])) {

                            include("dashboard.php");
                        }
                        
                        if (isset($_GET['Add_Do'])) {

                            include("ADD_Dou.php");
                        }
                        
                        ?>

                    </div><!-- container-fluid finish -->
                </div><!-- #page-wrapper finish -->
            </div><!-- wrapper finish -->

            <script src="js/jquery-331.min.js"></script>
            <script src="js/bootstrap-337.min.js"></script>
        </body>

    </html>
<?php } ?>