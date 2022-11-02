<?php include('../db_conect.php');
// main session start here  
session_start();

if(isset($_POST['uploddc_btn'])){
        if(($_FILES['documnet_uplod']['name'] == "") || ($_FILES['documnet_uplod']['tmp_name'] == "")){
            echo("empty filds");
        }else{
                $user_id = $_SESSION['user_id'];
                // echo("wellcome".$user_id);
                $uplod_dbinfo = "SELECT * FROM 
                `add_society_section` WHERE socitey_id='$user_id'";
                $uplod_dbresult = mysqli_query($conn,$uplod_dbinfo);
                $uplo_dc = mysqli_fetch_array($uplod_dbresult);

                if(isset($uplo_dc)){
                    $uploder_user_id = $uplo_dc['socitey_id'];
                    $user_name = $uplo_dc['socitey_name'];

                    $file_name = $_FILES['documnet_uplod']['name'];
                    $temp_name = $_FILES['documnet_uplod']['tmp_name'];
                    $file_error = $_FILES['documnet_uplod']['error'];
                    $folder = "../user_dc.php/".$file_name;
                    move_uploaded_file($temp_name,$folder);

                    $sql = "INSERT INTO user_documnt(user_name, user_id, user_documnt) 
                    VALUES('$user_name', '$uploder_user_id', '$folder')";

                    if($conn->query($sql)){
                    $emt_fild_errror = '<div class="alert alert-success mt-2" 
                    role="alert">successfuly uplod</div>';
                    }else{
                    $emt_fild_errror = '<div class="alert alert-success mt-2" 
                    role="alert">Account Not Created try agen</div>';
                    }
                    
                }

            }
    }

?>

<?php include('./user_nav.php'); ?>
<!-- header php include  start -->
<?php include '../main_inc.php/header.php'; ?>
<!-- header php include  end -->
<div class="row">

</div>
<div class="col-lg-12 d-flex justify-content-center align-items-center py-5" style="background: #e1e1e1;">
    <div class="col-lg-6 p-5" style="background: #e1e1e1;">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="formFileMultiple" class="form-label" style="text-align: center;font-size: 20px;">Uplod Your
                Documnet</label>
            <input class="form-control" type="file" id="formFileMultiple" name="documnet_uplod" multiple />
            <button type="submit" name="uploddc_btn" class="btn btn-primary btn-block mt-2"
                style="width: 100%;">Uplod</button>
        </form>
    </div>
</div>



<!-- footer php include  -->
<?php include '../main_inc.php/footer.php'; ?>