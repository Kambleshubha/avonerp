 <!-- session -->
 <?php session_start(); 
include('../db_conect.php');
error_reporting(0);
$userid = $_GET['id'];
?>

 <?php 
if(isset($_GET['onc_submit'])){
    $user_id = $_GET['user_id'];
    $onc_tag = $_GET['onc_tag'];
    // echo $onc_tag."<br><br>";
    // echo $user_id;
    $query = "UPDATE `add_society_section` SET onc_label='$onc_tag' WHERE socitey_id='$user_id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
    echo '<script> location.href = "./ongoandcomplet.php";</script>';
    }else{
        echo "fail";
    }

}


?>

 <!-- db connection  -->

 <?php include './addmin_inc/admin_header.php'; ?>
 <!-- header inc here  -->

 <?php include './addmin_inc/admin_side.php'; ?>
 <!-- sider inc here  -->
 <div style="width: 50%;margin: 100px auto;">

     <div class="container">
         <br><br><br>
         <form action="" method="GET">
             <fieldset>
                 <legend>Disabled fieldset example</legend>
                 <div class="mb-3">
                     <label for="disabledTextInput" class="form-label">Disabled input</label>
                     <input type="text" id="disabledTextInput" class="form-control" name="user_id"
                         value="<?php echo $userid; ?>">
                 </div>
                 <select class="form-select" aria-label="Default select example" name="onc_tag">
                     <option selected>off</option>
                     <option value="onggoing">Onging</option>
                     <option value="complete">Complete</option>
                 </select>
                 <button type="submit" name="onc_submit" class="btn btn-primary">Submit</button>
             </fieldset>
         </form>
         <p class="mt-4">*if select Onging Project it will only show in onging project <br><br>
             *if select Complet Project it will only show in Complet Project </p>
     </div>

 </div>

 <!-- footer inc here  -->
 <?php include './addmin_inc/addmin_footer.php'; ?>