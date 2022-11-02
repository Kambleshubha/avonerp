<?php
session_start(); 
include('../db_conect.php'); 
$query = "SELECT * FROM add_society_section";
$result = mysqli_query($conn,$query);

    if(isset($_SESSION['user_id'])){
        $user = $_SESSION['user_id'];
        $dbuser_dc = "SELECT `srno`, `added_date`, `socitey_name`, `socitey_addres`, `socitey_rea`, 
        `pin_cod`, `contact_person`, `contact_no`, `structure_no`, `socitey_wing`, 
        `construction_year`, `structure_type`, `site_value`, `contractor_company`, 
        `contractor_name`, `contractor_no`, `site_engineer_no`, `contractor_addhar`, 
        `contractor_pen`, `consultant_site_engineer_no`, `site_start_date`, `site_complition_month`, 
        `worke_complition_time`, `consultent_addhar`, `consultent_pen`, `socitey_id`, `socitey_password`, 
        `user_file_data`, `other_dc` FROM `add_society_section` WHERE socitey_id='$user'";

        // echo($user);
    $dbresult = mysqli_query($conn,$dbuser_dc);
    $userid = mysqli_fetch_array($dbresult);

    // print_r($userid);

    $contractor_addhar = $userid['contractor_addhar'];
    $contractor_pan = $userid['contractor_pen'];
        // echo $contractor_pan;
    $consultent_addhar = $userid['consultent_addhar'];
    $consultent_pan = $userid['consultent_pen'];
        //socitey documnets 
    $other_data = $userid['other_dc'];


    }else{
        echo("fail");
    }

?>

<?php include '../main_inc.php/header.php'; ?>
<!-- header  -->
<?php include('./user_nav.php'); ?>
<!-- nav  -->

<section style="background-color: #eee;">
    <div class="col-name" style="background: #b3afaf;padding: 10px 0px;text-align: center;">
        <p style="margin: 0;font-size: 20px;text-transform: uppercase;">Contractor Documnet</p>
    </div>
    <div class="container py-5" style="display: flex;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4" style="width: 500px;">
                    <div class="card-body text-center">
                        <img src="<?php echo $contractor_addhar; ?>" alt="avatar" class="img-fluid"
                            style="width: 100%;">
                        <h5 class="my-3"></h5>
                        <p class="text-muted mb-1">Addhar Card</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" style="margin-left: 20px;">
            <div class="col-lg-12">
                <div class="card mb-4" style="width: 500px;">
                    <div class="card-body text-center">
                        <img src="<?php echo $contractor_pan; ?>" alt="PAN" class="img-fluid" style="width: 100%;">
                        <h5 class="my-3"></h5>
                        <p class="text-muted mb-1">Pan Card</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- CONSULTANTS -->
<section style="background-color: #eee;">
    <div class="col-name" style="background: #b3afaf;padding: 10px 0px;text-align: center;">
        <p style="margin: 0;font-size: 20px;text-transform: uppercase;">Consultants</p>
    </div>
    <div class="container py-5" style="display: flex;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4" style="width: 500px;">
                    <div class="card-body text-center">
                        <img src="<?php echo $consultent_addhar; ?>" alt="avatar" class="img-fluid"
                            style="width: 100%;">
                        <h5 class="my-3"></h5>
                        <p class="text-muted mb-1">Addhar Card</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" style="margin-left: 20px;">
            <div class="col-lg-12">
                <div class="card mb-4" style="width: 500px;">
                    <div class="card-body text-center">
                        <img src="<?php echo $consultent_pan; ?>" alt="PAN" class="img-fluid" style="width: 100%;">
                        <h5 class="my-3"></h5>
                        <p class="text-muted mb-1">Pan Card</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- socitey documents -->
<section style="background-color: #eee;">
    <div class="col-name" style="background: #b3afaf;padding: 10px 0px;text-align: center;">
        <p style="margin: 0;font-size: 20px;text-transform: uppercase;">Socitey Documnets</p>
    </div>
    <div class="container py-5" style="display: flex;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4" style="width: 500px;">
                    <div class="card-body text-center">
                        <img src="<?php echo $other_data; ?>" alt="avatar" class="img-fluid" style="width: 100%;">
                        <h5 class="my-3"></h5>
                        <p class="text-muted mb-1">agreement image</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" style="margin-left: 20px;">
            <div class="col-lg-12">
                <div class="card mb-4" style="width: 500px;">
                    <div class="card-body text-center">
                        <img src="<?php //echo $consultent_pan; ?>" alt="PAN" class="img-fluid" style="width: 100%;">
                        <h5 class="my-3"></h5>
                        <p class="text-muted mb-1"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- footer  -->
<?php include '../main_inc.php/footer.php'; ?>