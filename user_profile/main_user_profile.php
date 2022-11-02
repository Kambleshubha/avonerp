<?php
session_start(); 
include('../db_conect.php'); 
$query = "SELECT * FROM add_society_section";
$result = mysqli_query($conn,$query);
if(!isset($_SESSION['user_id'])){
    echo '<script> location.href = "./404.php";</script>';
}
if(isset($_SESSION['user_id'])){
    $user = $_SESSION['user_id'];
    // echo $user;
    $dbinfo = "SELECT `srno`, `added_date`, `socitey_name`, `socitey_addres`, `socitey_rea`, `pin_cod`, `contact_person`, 
    `contact_no`, `structure_no`, `socitey_wing`, `construction_year`,

    `structure_type`, `site_value`, `contractor_company`, `contractor_name`, 

    `contractor_no`, `site_engineer_no`, `consultant_site_engineer_no`, 

    `site_start_date`, `site_complition_month`, `worke_complition_time`, 
    
    `socitey_id`, `socitey_password`, `user_file_data` FROM 
    `add_society_section` WHERE socitey_id='$user'";

    $dbresult = mysqli_query($conn,$dbinfo);
    $userid = mysqli_fetch_array($dbresult);
    // user varibals 
    $srno = $userid['srno'];
    $added_date = $userid['added_date'];
    $socitey_name = $userid['socitey_name'];
    $socitey_addres = $userid['socitey_addres'];
    $socitey_rea = $userid['socitey_rea'];//socitey_rea
    $pin_cod = $userid['pin_cod'];//socitey_rea
    $contact_person = $userid['contact_person'];//contact_person
    $contact_no = $userid['contact_no'];//contact_no
    $structure_no = $userid['structure_no'];//structure_no
    $socitey_wing = $userid['socitey_wing'];//socitey_wing
    $construction_year = $userid['construction_year'];//construction_year
    $structure_type = $userid['structure_type'];//structure_type
    $site_value = $userid['site_value'];//Site Value (as per agreement)

    // contractor info 
    $contractor_company = $userid['contractor_company'];//contractor_company
    $contractor_name = $userid['contractor_name'];//contractor_name
    $contractor_no = $userid['contractor_no'];//Contractor No
    $site_engineer_no = $userid['site_engineer_no'];//site_engineer_no

    // consultent info consultant_site_engineer_no
    $consultant_site_engineer_no = $userid['consultant_site_engineer_no'];//consultant_site_engineer_no
    $site_start_date = $userid['site_start_date'];//site_start_date
    $site_complition_month = $userid['site_complition_month'];//site_complition_month
    $worke_complition_time = $userid['worke_complition_time'];//worke_complition_time
    // socitey profile 
    $user_file_data = $userid['user_file_data'];
    // echo $user_profile = $userid['socitey_id'];

}

?>

<?php include '../main_inc.php/header.php'; ?>
<?php include('./user_nav.php'); ?>
<!-- main code  -->
<h3><span></span></h3>
<section style="background-color: #eee;">
    <div class="container py-5">
        <!-- <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>
        </div> -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4" style="width: 500px;">
                    <div class="card-body text-center">
                        <img src="<?php echo $user_file_data; ?>" alt="avatar" class="img-fluid" style="width: 100%;">
                        <h5 class="my-3"><?php echo($_SESSION['user_id']); ?></h5>
                        <p class="text-muted mb-1"><?php echo $socitey_name; ?></p>
                        <!-- <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Follow</button>
                            <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                        </div> -->
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div>
                    <p style="padding: 0px;margin: 0px;font-size: 20px; margin-left: 5px;">Socity Info
                    <p>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Socity Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $socitey_name; ?></p>
                            </div>
                        </div>
                        <!-- Socity Name -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $socitey_addres; ?></p>
                            </div>
                        </div>
                        <!-- Address -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Area</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $socitey_rea; ?></p>
                            </div>
                        </div>
                        <!-- Area -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Pin Code</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $pin_cod; ?></p>
                            </div>
                        </div>
                        <!-- Pin Code -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Contact Person</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $contact_person; ?></p>
                            </div>
                        </div>
                        <!-- Contact Person -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Contact No</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $contact_no; ?></p>
                            </div>
                        </div>
                        <!-- Contact No -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Structure No</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $structure_no; ?></p>
                            </div>
                        </div>
                        <!-- Structure No -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Wing</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $socitey_wing; ?></p>
                            </div>
                        </div>
                        <!-- Wing -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Construction Year</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $construction_year; ?></p>
                            </div>
                        </div>
                        <!-- Construction Year -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">STRUCTURE TYPE</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $structure_type; ?></p>
                            </div>
                        </div>
                        <!-- STRUCTURE TYPE -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Site Value (as per agreement)</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $site_value; ?></p>
                            </div>
                        </div>
                        <!-- Site Value (as per agreement) -->

                    </div>
                </div>
            </div>
            <!-- contractor info  -->
            <div class="col-lg-6">
                <div>
                    <p style="padding: 0px;margin: 0px;font-size: 20px; margin-left: 5px;">Contractor Info
                    <p>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Contractor Company</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $contractor_company; ?></p>
                            </div>
                        </div>
                        <!-- Contractor Company -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Contractor Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $contractor_name; ?></p>
                            </div>
                        </div>
                        <!-- Contractor Name -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Contractor No</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $contractor_no; ?></p>
                            </div>
                        </div>
                        <!-- Contractor No -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Site Engineer No</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $site_engineer_no; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- cunsultent info  -->
                <div>
                    <p style="padding: 0px;margin: 0px;font-size: 20px; margin-left: 5px;">Consultant info
                    <p>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Consultant Site Engineer No</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $consultant_site_engineer_no; ?></p>
                            </div>
                        </div>
                        <!-- Consultant Site Engineer No -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Site Start date</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $site_start_date; ?></p>
                            </div>
                        </div>
                        <!-- Site Start date -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Site Complition month</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $site_complition_month; ?></p>
                            </div>
                        </div>
                        <!-- Site Complition month -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">
                                    Worke complition time</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $worke_complition_time; ?></p>
                            </div>
                        </div>

                        <!-- Worke complition time -->
                    </div>
                </div>
            </div>
            <!-- contractor info  end-->

        </div>
    </div>
</section>

<?php include '../main_inc.php/footer.php'; ?>
<!--nav bar php include-->