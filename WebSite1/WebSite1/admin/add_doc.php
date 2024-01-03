<div class="row">
    <!-- row no: 1 begin -->
    <div class="col-lg-12">
        <!-- col-lg-12 begin -->
        <h1 class="page-header"> Ajouter Annances </h1>

        <ol class="breadcrumb">
            <!-- breadcrumb begin -->
            <li class="active">
                <!-- active begin -->

                <i class="fa fa-bullhorn"></i> Ajouter Annances

            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->

    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->



<div class="panel-body">
    <!-- panel-body Begin -->

    <form method="post" class="form-horizontal" enctype="multipart/form-data">
        <!-- form-horizontal Begin -->
        <!-- name doc-->
        <div class="form-group">

            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> Doc name </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="name_doc" type="text" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->


       
        <!-- name auter-->
        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> auter by </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="by_a" type="text" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

        <!-- path doc-->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> insert docement </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="path" type="file" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

       


        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> dec </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <textarea name="doc_des" cols="19" rows="6" class="form-control"></textarea>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="submit" value="add doc" type="submit" class="btn btn-primary form-control">

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

    </form><!-- form-horizontal Finish -->

</div><!-- panel-body Finish -->

</div><!-- canel panel-default Finish -->

</div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>



<?php

if (isset($_POST['submit'])) {

    $doc_name = $_POST['name_doc'];
  
    $Auter_by=$_POST['by_a'];

    $des_doc = $_POST['doc_des'];

    $doc_path = $_FILES['path']['name'];
   

    $temp_name1 = $_FILES['path']['tmp_name'];
   

    move_uploaded_file($temp_name1, "Docmnt/$doc_path");


    $insert_query = "INSERT INTO document( name_d, path_d, auter_by,des_d) VALUES
     ('$doc_name','$doc_path','$Auter_by','$des_doc')";

    $run_doc = mysqli_query($conn, $insert_query);

    if ($run_doc) {

        echo "<script>alert('Annonse has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?Add_doc','_self')</script>";
    }
}

?>