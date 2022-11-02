<!-- db include -->
<?php
session_start();
include('../db_conect.php');
    if(isset($_POST['user_login_btn'])){

        if(($_POST['user_id'] == "") || ($_POST['user_pass']) == ""){
            $login_empty_fild_error = '<div class="alert alert-warning mt-2" 
       role="alert">all filds are emplty</div>';
        // echo "enter reqierd fild";
        } else{
            
            $user_id = trim($_POST['user_id']);
            $user_pass = trim($_POST['user_pass']);
            
            $sql = "SELECT socitey_id, socitey_password FROM add_society_section 
            WHERE socitey_id = '".$user_id."'AND socitey_password='".$user_pass."' limit 1";

            $result = $conn->query($sql);
            if($result->num_rows == 1){
                $_SESSION['user_id'] = $user_id;
                echo '<script> location.href = "./main_user_profile.php";</script>';
            }else{
                echo "try agen";
            }

        }
    }
?>
<?php include '../main_inc.php/header.php'; ?>
<!-- heder and bar include  -->
<div style="display: flex;justify-content: center;height: 100vh;align-items: center;">
    <form action="" method="POST" style="width: 350px; padding: 20px;px;" class="shadow">
        <div class="usericon_image" style="width: 100%;text-align: center;padding: 20px 0px;text-transform: uppercase;">
            <div class="usericon">
                <span>Socitey Login</span>
            </div>
        </div>
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" class="form-control" name="user_id" />
            <label class="form-label">User Id</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" class="form-control" name="user_pass" />
            <label class="form-label">Password</label>
        </div>
        <!-- Submit button -->
        <div>
            <button type="submit" name="user_login_btn" class="btn btn-primary btn-block"
                style="width: 100%;">login</button>
            <!-- error messge  -->
            <?php if(isset($login_empty_fild_error)){
                echo $login_empty_fild_error;
            } ?>
            <p>test login - userid: Swastik_Regalia@avon, pass: 1234</p>
            <a href="../index.php" class="mt-5">Back to home</a>
        </div>
        <!-- <p>test login - userid: Swastik_Regalia@avon, pass: 1234</p>
        <a href="../index.php">Back to home</a> -->
    </form>

</div>


<!-- fotter include  -->
<?php include '../main_inc.php/footer.php'; ?>