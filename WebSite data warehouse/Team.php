<?php
include('config.php');
include('include/header.php');
include('include/fonction.php');
?>
<div class="buttom-header-sub">
  <div class="container">
    <div class="sub-page">
      <h2 class="txt-cont">Our Team</h2>
    </div>
  </div>
</div>
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
                    <div class='card'>
                    
        <!-- Column 1-->
        
              <img src='admin/photo_us/$phto' class='img-container'  alt=''/>
            <h3>$name  $prenome</h3>
            <p>Devoleper</p>
            <div class='about-dev'>
    $about_him 
</div>
<div class='full-skil'>Skills</div>
<div class='scilse'>
";  getset($id_a); 
echo"
    
</div>
            <div class='social-links'>
              <a href='#'>
                <i class='fab fa-twitter'></i>
              </a>
              <a href='#'>
                <i class='fab fa-linkedin'></i>
              </a>
              <a href='#'>
                <i class='fab fa-github'></i>
              </a>
              <a href='#'>
                <i class='fas fa-envelope'></i>
              </a>
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