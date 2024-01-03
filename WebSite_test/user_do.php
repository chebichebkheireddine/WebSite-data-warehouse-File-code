<?php
include('config.php');

include('include/header.php');
?>
<div class="containert">
    <div class="headernew">
        <h1>work teame</h1>
    </div>
    <!-- sub text-->
    <div class="sub-container">
  
    <?php
    $get_req = "select * from admin ";
    $run_info = mysqli_query($conn, $get_req);
    while ($row_info = mysqli_fetch_array($run_info)) {

        $id_a=$row_info['id_a'];

        $name = $row_info['fast_name'];

        $prenome = $row_info['last_name'];

        $phto = $row_info['photo'];

        $skil1 = $row_info['skil_1'];

        $skil2 = $row_info['skil_2'];

        $skil3 = $row_info['skil_3'];

        $skil4 = $row_info['skil_4'];

        $skil5 = $row_info['skil_5'];

        $about_him = $row_info['about_him'];

        $get_subw="select * from workes where id_a= $id_a";

        $run_sub=mysqli_query($conn, $get_subw);
        while ($row_sub = mysqli_fetch_array($run_sub)) {

            $name_W=$row_sub['nome_roll'];

            echo "<div class='scilsei'>
                    <a class='btn btn-primary btn-xs '>
                    <div class='na'>
                        $name_W  <i class='fas fa-check'></i>
                        </div>
                            <img src='admin/photo_us/$phto' class='img-container'  alt=''>
                                
                                    $name  $prenome

                    </a>
           
        </div>";}


        
    } ?>
        
    </div>
    <!-- end teme-->
   
</div>
