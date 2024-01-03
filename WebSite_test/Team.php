<?php
include('config.php');
include('include/header.php');
?>
<div class="containert">
    <div class="headernew">
        <h1>Our Team</h1>
    </div>
    <!-- sub text-->
    <div class="sub-container">

        <!--code php-->
        <?php
    $get_req = "select * from admin ";
    $run_info = mysqli_query($conn, $get_req);
    while ($row_info = mysqli_fetch_array($run_info)) {

        $name = $row_info['fast_name'];

        $prenome = $row_info['last_name'];

        $phto = $row_info['photo'];

        $skil1 = $row_info['skil_1'];

        $skil2 = $row_info['skil_2'];

        $skil3 = $row_info['skil_3'];

        $skil4 = $row_info['skil_4'];

        $skil5 = $row_info['skil_5'];

        $about_him = $row_info['about_him'];

    echo"
        <!-- sub text-->
        <div class='temes'>
            <img src='admin/photo_us/$phto' class='img-container'  alt=''>
            <div class='names'>
                $name  $prenome
            </div>
            <div class='domain'>Devoleper</div>
            <div class='abouthim'>
                 $about_him 
            </div>
            <div class='names'>Skilse</div>
            <div class='scilse'>
                <a class='btn btn-primary btn-xs '>
                     $skil1  <i class='fas fa-check'></i>
                </a>
                <a class='btn btn-primary btn-xs'>
                     $skil2  <i class='fas fa-check'></i>
                </a>
                <a class='btn btn-primary btn-xs'>
                     $skil3  <i class='fas fa-check'></i>
                </a>
                <a class='btn btn-primary btn-xs'>
                     $skil4  <i class='fas fa-check'></i>
                </a>
                <a class='btn btn-primary btn-xs'>
                     $skil5  <i class='fas fa-check'></i>
                </a>
            </div>
            <div class='social-links'>
                <a href='#'><i class='fa-brands fa-facebook'></i></a>
                <a href='#'><i class='fa-brands fa-instagram'></i></a>
                <a href='#'><i class='fa-brands fa-github'></i></a>
                <a href='#'><i class='fa-brands fa-twitter'></i></a>
            </div>

        </div>
        <!-- endsub text-->";
        
    } ?>
    </div>
    <!-- end teme-->

</div>