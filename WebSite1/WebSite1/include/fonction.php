<?php 



function getset($id){
    global $conn;

    $sql_get="select name_s from skills where id_a = $id";

        $run_s=mysqli_query($conn, $sql_get);
        while($row_sq = mysqli_fetch_array($run_s)){
            $re=$row_sq['name_s'];
         
            
            echo"<a class='name-sk'>
             $re     <i class='fas fa-code-branch'></i>
                </a>";
         
        }
        

}

?>