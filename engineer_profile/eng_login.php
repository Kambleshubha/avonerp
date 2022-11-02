<!-- db include -->
<?php
session_start();
include('../db_conect.php');
    if(isset($_POST['eng_login_btn'])){

        if(($_POST['eng_userid'] == "") || ($_POST['eng_userid']) == ""){
            $login_empty_fild_error = '<div class="alert alert-warning mt-2" 
       role="alert">all filds are emplty</div>';
        // echo "enter reqierd fild";
        } else{
            
            $eng_userid = trim($_POST['eng_userid']);
            $eng_pass = trim($_POST['eng_pass']);
            
            $sql = "SELECT eng_email, eng_password FROM eng_register 
            WHERE eng_email = '".$eng_userid."'AND eng_password='".$eng_pass."' limit 1";
            $result = $conn->query($sql);
            if($result->num_rows == 1){
                $_SESSION['username'] = $eng_userid;
                echo '<script> location.href = "./eng_profile.php";</script>';
            }else{
                echo "try agen";
            }

        }
    }
?>

<!-- header  -->
<?php
include('../main_inc.php/header.php'); 
?>
<!-- header end  -->
<div style="display: flex;justify-content: center;height: 100vh;align-items: center;">
    <form action="" method="POST" style="width: 350px; padding: 20px;px;" class="shadow">
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" class="form-control" name="eng_userid" />
            <label class="form-label">User Id</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" class="form-control" name="eng_pass" />
            <label class="form-label">Password</label>
        </div>
        <!-- Submit button -->
        <div>
            <button type="submit" name="eng_login_btn" class="btn btn-primary btn-block"
                style="width: 100%;">login</button>
            <!-- error messge  -->
            <?php if(isset($login_empty_fild_error)){
                echo $login_empty_fild_error;
            } ?>
        </div>
        <p>test login - userid: vikas@evoneng, pass: admin123</p>
        <a href="../index.php">Back to home</a>
    </form>

</div>

<!-- header  -->
<?php
include('../main_inc.php/footer.php'); 
?>
<!-- header end  -->