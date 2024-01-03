<div class="row">
    <!-- row no: 1 begin -->
    <div class="col-lg-12">
        <!-- col-lg-12 begin -->
        <h1 class="page-header"> ADD ducomnt </h1>

        <ol class="breadcrumb">
            <!-- breadcrumb begin -->
            <li class="active">
                <!-- active begin -->

                <i class="fa fa-bullhorn"></i> ADD doucmnt

            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->

    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->



<div class="panel-body">
    <!-- panel-body Begin -->

    <form method="post" class="form-horizontal" enctype="multipart/form-data">
        <!-- form-horizontal Begin -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> Num documnt </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="name_D" type="text" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->


        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> Uplaod </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="Up_d" type="file" class="form-control form-height-custom" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->



        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> la description </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <textarea name="doc_desc" cols="19" rows="6" class="form-control"></textarea>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

            <!-- form-group Begin -->

            <label class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="submit" value="OK" type="submit" class="btn btn-primary form-control">

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

    $doc_title = $_POST['name_D'];
   
    $doc_desc = $_POST['doc_desc'];

    $Up_d = $_FILES['Up_d']['name'];
    

    $temp_name1 = $_FILES['Up_d']['tmp_name'];
    

    move_uploaded_file($temp_name1, "Docmnt/$Up_d");
    

    $insert_y="INSERT INTO doc_r( name_R, Desc_doc, n_url, autor_by, data) VALUES ('$doc_title','$doc_desc','$Up_d','$admin_name $admin_last','NOW()')";

    $run_id = mysqli_query($conn,$insert_y);

    if ($run_id) {

        echo "<script>alert('id has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?Add_Do','_self')</script>";
    }
}

?>