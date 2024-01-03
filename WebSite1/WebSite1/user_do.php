<?php
include('config.php');
include('include/fonction.php');


include('include/header.php');
?>
<div class="containert">
    <div class="headernew">
        <h1>work teame</h1>
    </div>
    <!-- sub text-->
    <div class="sub-container">
  
    <?php
    $get_work="select * from works  ";
    $run_works = mysqli_query($conn, $get_work);
    while ($row_works = mysqli_fetch_array($run_works)) {

        $name_task=$row_works['name_W'];

        $dec_task=$row_works['dec_W'];

        $type_t=$row_works['type_W'];

        $id_a=$row_works['id_a'];

        echo "<div class='work'>
           <div class='row '>
                <div class='row  '>
                        <div class='col-sm-12'>
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
                    </div>
        
            ";

            $query_s="select * from admin where id_work =$id_a";

            $run_query=mysqli_query($conn,$query_s);

            while ($row_info = mysqli_fetch_array($run_query)) {

                        $id_a=$row_info['id_a'];

                        $name = $row_info['fast_name'];

                        $prenome = $row_info['last_name'];

                        $phto = $row_info['photo'];

                        $about_him = $row_info['about_him'];

                

            echo "
            <div class='col-sm-6 inf'>
                <div class='imge-team'>
                <img src='admin/photo_us/$phto' class='img-container'  alt=''>
                </div>
                <div class='name-teme'>
                $name $prenome
                </div>
            </div>
            
            ";}

            
        echo "</div>
        </div>";

        
    } ?>
        
    </div>
    <!-- end teme-->
   
</div>
<?php 

include ('include/footer.php');

?>

