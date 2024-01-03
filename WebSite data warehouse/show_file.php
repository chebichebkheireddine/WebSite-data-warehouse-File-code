<?php
include ('include/header.php');
include('config.php');
echo "<div class='buttom-header-sub'>
<div class='container'>
  <div class='sub-page'>
    <h2 class='txt-cont1'>Raport</h2>
  </div>
</div>
</div> ";

//Conect to data base
$select_file="select * from document";
$get_co=mysqli_query($conn,$select_file);
while ($run_file=mysqli_fetch_array($get_co)) {
    $nameF=$run_file['name_d'];
    $des=$run_file['des_d'];
    $path=$run_file['path_d'];
    $auter=$run_file['auter_by'];
    echo "
    <div class='containert'>
<div class='sub-container'>
<div class='temes'>
    <h1 class='names'>$nameF</h1>
    <p class='auter'>$auter</p>
    <iframe src='admin/Docmnt/$path' height='500' width='900'></iframe>
    
</div>
</div>
</div>";
}
?>
<?php 

include ('include/footer.php');

?>

