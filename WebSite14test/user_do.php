<?php
include('config.php');
include('include/fonction.php');


include('include/header.php');
?>
<div class="buttom-header-sub">
  <div class="container">
    <div class="sub-page">
      <h2 class="txt-info">work teame</h2>
    </div>
  </div>
</div>
    <!-- sub text-->
    <div class="sub-container">

        <?php
        $get_work = "select * from worke   "; //THIS is for extraxt from work
        $run_works = mysqli_query($conn, $get_work);

        while ($row_works = mysqli_fetch_array($run_works)) {

            $id_w = $row_works['id_w'];


            $name_task = $row_works['name_w'];

            $dec_task = $row_works['des_work'];

            $type_t = $row_works['type'];

            echo "<div class='row'>
            <div class='card '>
            <div class='work col-sm-6 '>
            <div class='work_a '>
                    <div class=' name-work'>
                    $name_task
                    </div>
                    <div class='type-work'>
                        $type_t
                    </div>
                    <div class='des_work'>
                    $dec_task
                    </div>
            </div>
            ";


            $que_talnd = "select * from talnd where id_w =$id_w"; //and this is for lawd from jobs 
        
            //to select from devis tasks
        
            $run_que = mysqli_query($conn, $que_talnd);

            while ($row_talnd = mysqli_fetch_array($run_que)) {

                $id_ad = $row_talnd['id_admin'];



                $query_s = "select * from admin where id_a=$id_ad"; // to get admin use info to display in intrfdace to eche taske 
        
                $run_query = mysqli_query($conn, $query_s);

                while ($row_info = mysqli_fetch_array($run_query)) {

                    //nkow after do this in html we wel disply as blook liner 
        
                    $id_a = $row_info['id_a'];

                    $name = $row_info['fast_name'];

                    $prenome = $row_info['last_name'];

                    $phto = $row_info['photo'];

                    $about_him = $row_info['about_him'];



                    echo "
                    
                            <div class='teame col-sm-3'>
                                
                                    <img src='admin/photo_us/$phto' class='img-team'  alt=''>
                               
                                <div class='name-teme'>
                                    $name $prenome
                                </div>
                            </div>
                            
                            
                            ";
                        }
                        
                        
                        
                    }
                    echo "</div>";
            echo "</div>";
            echo "</div>";

        } ?>


    <!-- end teme-->

</div>
<?php

include('include/footer.php');

?>
<!--this is end of this tasks user do-->