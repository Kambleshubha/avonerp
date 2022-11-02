<?php include('../db_conect.php'); 

if(isset($_POST['onc_update'])){
        // $socitey_name = $_POST['socitey_name'];  //- 1 - socitey_name
        $onc_tag = $_POST['onc_tag'];
        $query = "UPDATE `add_society_section` SET onc_label='$onc_tag' WHERE id='$userid'";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            echo '<script> location.href = "./ongoandcomplet.php";</script>';
            }
            else{
                echo "fail"; 
            }
    }

?>