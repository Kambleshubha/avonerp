<?php
include('../main_inc.php/header.php'); 
?>
<?php
    // db connection 
    include('../db_conect.php'); 
    session_start();
    // insert data in db tabel 
    if(isset($_POST['eng_btn'])){
        // chaking empty filds
        if(($_POST['eng_first_name'] == "") || ($_POST['eng_last_name'] == "") || 
        ($_POST['eng_email'] == "") || ($_POST['eng_password'] == "")){
        $emt_fild_errror = '<div class="alert alert-warning mt-2" 
        role="alert">all filds are emplty</div>';
        }else{
            // email allreday exist query 
            $sql = "SELECT eng_email FROM eng_register WHERE eng_email
            = '".$_POST['eng_email']."'";

            $result = $conn->query($sql);
            if($result->num_rows==1){
                $emt_fild_errror = '<div class="alert alert-warning mt-2" 
                role="alert">already have an account</div>';
            }
            else{
                $eng_first_name = $_POST['eng_first_name'];
                $eng_last_name = $_POST['eng_last_name'];
                $eng_email = $_POST['eng_email'];
                $eng_password = $_POST['eng_password'];

                // eng proife image uplod code here start 
                $file_name = $_FILES['eng_profile_image']['name'];
                $temp_name = $_FILES['eng_profile_image']['tmp_name'];
                $file_error = $_FILES['eng_profile_image']['error'];
                $folder = "../eng_profile_image/".$file_name;
                move_uploaded_file($temp_name,$folder);
                
                // eng proife image uplod code here end

                $sql = "INSERT INTO eng_register (eng_profile_image, eng_first_name, eng_last_name, eng_email, eng_password)
                VALUES('$folder','$eng_first_name', '$eng_last_name', '$eng_email', '$eng_password')";
                
                
                if($conn->query($sql)){
                    $emt_fild_errror = '<div class="alert alert-success mt-2" 
                    role="alert">account successfuly created</div>';
                }else{
                    $emt_fild_errror = '<div class="alert alert-success mt-2" 
                    role="alert">Account Not Created try agen</div>';
                }
                
                    // $img_query = "SELECT * FROM eng_register";
                    // $img_result = mysqli_query($conn,$img_query); 
                    // $img_prof = mysqli_fetch_assoc($img_result);
                    // echo $img_prof['eng_profile_image'];
                
            }
        }
    }  
    

?>
<!-- header  -->
<div style="display: flex;justify-content: center;height: 100vh;align-items: center;">


    <form action="" method="POST" enctype="multipart/form-data" style="width: 350px;">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">

                <div class="form-outline">
                    <input type="text" class="form-control" name="eng_first_name" />
                    <label class="form-label">First name</label>
                </div>
            </div>

            <div class="col">
                <div class="form-outline">
                    <input type="text" class="form-control" name="eng_last_name" />
                    <label class="form-label">Last name</label>
                </div>
            </div>
        </div>

        <!-- user id input -->
        <div class="form-outline mb-4">
            <input type="text" class="form-control" name="eng_email" />
            <label class="form-label">User Id</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" class="form-control" name="eng_password" />
            <label class="form-label">Password</label>
        </div>
        <label class="form-label" for="customFile">Uplod Profile Image</label>
        <input type="file" class="form-control" id="customFile" name="eng_profile_image" />
        <!-- Submit button -->
        <div class="mt-5">
            <button type="submit" name="eng_btn" class="btn btn-primary btn-block" style="width: 100%;">Sign up</button>
            <!-- error messge  -->
            <?php if(isset($emt_fild_errror)){ echo $emt_fild_errror;} ?>
            <a href="./eng_login.php" class="mt-5">login</a>
        </div>
        <!-- Register buttons -->
    </form>

</div>

<!-- footer  -->
<?php
include('../main_inc.php/footer.php'); 
?>