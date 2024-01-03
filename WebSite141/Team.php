<?php
include('config.php');
include('include/header.php');
include('include/fonction.php');
?>
<div class="buttom-header-sub">
  <div class="container">
    <div class="sub-page">
      <h2 class="txt-about">Our Team</h2>
    </div>
  </div>
</div>
<div class="containert">
    
    <!-- sub text-->
    <div class="sub-container">

        <!--code php-->
                    <?php
                $get_req = "select * from admin ";
                $run_info = mysqli_query($conn, $get_req);
                while ($row_info = mysqli_fetch_array($run_info)) {

                    $id_a=$row_info['id_a'];

                    $name = $row_info['fast_name'];

                    $prenome = $row_info['last_name'];

                    $phto = $row_info['photo'];

                    $about_him = $row_info['about_him'];

                    
                echo"
                    <!-- sub text-->
                    <div class='temes'>
                        <img src='admin/photo_us/$phto' class='img-container'  alt=''>
                        <div class='full-name'>
                            $name  $prenome
                        </div>
                        <div class='info-dev'>Devoleper</div>
                        <div class='about-dev'>
                            $about_him 
                        </div>
                        <div class='full-skil'>Skills</div>
                        <div class='scilse'>
                        ";  getset($id_a); 
                        echo"
                            
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
<?php 

include ('include/footer.php');

?>