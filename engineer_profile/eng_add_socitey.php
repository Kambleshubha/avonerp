<!-- session -->
<?php session_start(); ?>
<?php include('./eng_nav.php'); ?>
<!-- db connection  -->
<?php 
include('../db_conect.php');

    if(isset($_POST['addsocitye-btn'])){

    $socitey_name = $_POST['socitey_name'];  //- 1 - socitey_name
    $socitey_addres = $_POST['socitey_addres']; // - 2 - socitey_addres
    $socitey_rea = $_POST['socitey_rea'];  // - 3 - socitey_rea
    $pin_cod = $_POST['pin_cod'];  // - 4 - pin_cod
    $contact_person = $_POST['contact_person']; // - 5 - contact_person
    $contact_no = $_POST['contact_no']; // - 6 - contact_no
    $structure_no = $_POST['structure_no']; // - 7 - structure_no
    $socitey_wing = $_POST['socitey_wing']; // - 8 - socitey_wing
    $construction_year = $_POST['construction_year']; // - 9 - construction_year
    $structure_type = $_POST['structure_type']; // - 10 - structure_type
    $site_value = $_POST['site_value']; // - 11 - site_value
    
    // Contractor Info start ---<
    $contractor_company = $_POST['contractor_company']; // - 12 - contractor_company
    $contractor_name = $_POST['contractor_name']; // - 13 - contractor_name
    $contractor_no = $_POST['contractor_no']; // - 14 - contractor_no
    $site_engineer_no = $_POST['site_engineer_no']; // - 15 - site_engineer_no

    $contractor_file_name = $_FILES['contractor_addhar']['name'];
    $contractor_temp_name = $_FILES['contractor_addhar']['tmp_name'];
    $contractor_folder = "../contracor_dcimg/addhar/".$contractor_file_name;
    move_uploaded_file($contractor_temp_name,$contractor_folder);

    $contractorpan_file_name = $_FILES['contractor_pen']['name'];
    $contractorpan_temp_name = $_FILES['contractor_pen']['tmp_name'];
    $contractorpan_folder = "../contracor_dcimg/pan/".$contractorpan_file_name;
    move_uploaded_file($contractorpan_temp_name,$contractorpan_folder);
    
    // Contractor Info end ---<

    // Consultant info start ---<
    $consultant_site_engineer_no = $_POST['consultant_site_engineer_no']; // - 16 - consultant_site_engineer_no
    $site_start_date = $_POST['site_start_date']; // - 17 - site_start_date
    $site_complition_month = $_POST['site_complition_month']; // - 18 - site_complition_month
    $worke_complition_time = $_POST['worke_complition_time']; // - 19 - worke_complition_time

    // $consultaddhar_file_name = $_FILES['consultent_addhar']['name'];
    // $consultaddhar_temp_name = $_FILES['consultent_addhar']['tmp_name'];
    // $consultaddhar_folder = "../consultent_dcimg/addhar/".$consultaddhar_file_name;
    // move_uploaded_file($consultaddhar_temp_name,$consultaddhar_folder);

    $consultaddhar_file_name = $_FILES['consultent_addhar']['name'];
    $consultaddhar_temp_name = $_FILES['consultent_addhar']['tmp_name'];
    $consultaddhar_folder = "../consultent_dcimg/addhar/".$consultaddhar_file_name;  
    move_uploaded_file($consultaddhar_temp_name,$consultaddhar_folder); 

    $consultpan_file_name = $_FILES['consultent_pen']['name'];
    $consultpan_temp_name = $_FILES['consultent_pen']['tmp_name'];
    $consultpan_folder = "../consultent_dcimg/pan/".$consultpan_file_name;
    move_uploaded_file($consultpan_temp_name,$consultpan_folder);
    // print_r($consultpan_folder);
    // Consultant info end ---<

    // Socitey register-login id create start ---<
    $socitey_id = $_POST['socitey_id']; // - 20 - socitey_id
    $socitey_password = $_POST['socitey_password']; // - 21 - socitey_password

    $user_file_name = $_FILES['user_file_data']['name'];
    $user_temp_name = $_FILES['user_file_data']['tmp_name'];
    $user_folder = "../user_file_data/".$user_file_name;
    move_uploaded_file($user_temp_name,$user_folder);

    $other_dc_file_name = $_FILES['other_dc']['name'];
    $other_dc_temp_name = $_FILES['other_dc']['tmp_name'];
    $other_dc_folder = "../other_dcimg/".$other_dc_file_name;
    move_uploaded_file($other_dc_temp_name,$other_dc_folder);

    // Socitey end ---<

    $sql = "INSERT INTO add_society_section (socitey_name, socitey_addres, socitey_rea, pin_cod,contact_person, contact_no, structure_no, socitey_wing, construction_year, structure_type, site_value, contractor_company, contractor_name, contractor_no, site_engineer_no, contractor_addhar, contractor_pen, consultant_site_engineer_no, site_start_date, site_complition_month, worke_complition_time, consultent_addhar, consultent_pen, socitey_id, socitey_password, user_file_data, other_dc) 
    VALUES('$socitey_name', '$socitey_addres', '$socitey_rea', '$pin_cod', '$contact_person', '$contact_no','$structure_no','$socitey_wing','$construction_year','$structure_type', '$site_value','$contractor_company','$contractor_name','$contractor_no','$site_engineer_no','$contractor_folder','$contractorpan_folder','$consultant_site_engineer_no','$site_start_date','$site_complition_month','$worke_complition_time','$consultaddhar_folder','$consultpan_folder','$socitey_id','$socitey_password','$user_folder','$other_dc_folder')";
    $conn->query($sql);

  }
    
?>

<!-- header include  -->
<?php include '../main_inc.php/header.php'; ?>
<!-- main cod start here -->
<div class="main_f-row-1" style="margin-bottom: 100px;">

    <div class="main-form-fild">

        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Socitey Name -->
            <div class="mb-3">
                <label class="form-label text-uppercase">Socitey Name</label>
                <input type="text" class="form-control" name="socitey_name">
            </div>
            <!-- Socitey Addres -->
            <div class="mb-3">
                <label class="form-label text-uppercase">Socitey Addres</label>
                <input type="text" class="form-control" name="socitey_addres">
            </div>
            <!-- Area -->
            <div class="row">
                <div class="col">
                    <label class="form-label text-uppercase">Area</label>
                    <input type="text" class="form-control" name="socitey_rea">
                </div>
                <!-- Pin Code -->
                <div class="col">
                    <label class="form-label text-uppercase">Pin Code</label>
                    <input type="text" class="form-control" name="pin_cod">
                </div>
            </div>

            <br>
            <!-- Contact Person -->
            <div class="row">
                <div class="col">
                    <label class="form-label text-uppercase">Contact Person</label>
                    <input type="text" class="form-control" name="contact_person">
                </div>
                <!-- Contact No -->
                <div class="col">
                    <label class="form-label text-uppercase">Contact No</label>
                    <!-- <input type="text" class="form-control" name=""> -->
                    <input type="tel" class="form-control" id="phone" name="contact_no" placeholder="123-45-678"
                        pattern="[0-9]{10}" required>
                </div>
            </div>

            <!-- .........  -->
            <!-- Structure No -->
            <div class="row my-5">
                <div class="col-auto">
                    <label class="form-label text-uppercase">Structure No</label>
                    <input type="text" class="form-control" id="autoSizingInput" name="structure_no">
                </div>
                <!-- socitey_wing -->
                <div class="col-auto">
                    <label class="form-label text-uppercase">Wing</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="autoSizingInputGroup" name="socitey_wing">
                    </div>
                </div>
                <!-- Construction Year -->
                <div class="col-auto">
                    <label class="form-label text-uppercase">Construction Year</label>
                    <select class="form-select" name="construction_year" id="autoSizingSelect">
                        <option selected>--YEAR OF CONSTRUCTION--</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                    </select>
                </div>

            </div>
            <!-- structure_type -->
            <div class="col-12">
                <label class="form-label text-uppercase" for="inlineFormSelectPref">STRUCTURE TYPE</label>
                <select class="form-select" name="structure_type" id="inlineFormSelectPref">
                    <option selected> --TYPE OF STRUCTURE-- </option>
                    <option value="LOAD BEARING STRUCTURE">LOAD BEARING STRUCTURE</option>
                    <option value="WOODEN STRUCTURE">WOODEN STRUCTURE </option>
                    <option value="FULL RCC STRUCTURE WALL AND COLOUMN BEAM">FULL RCC STRUCTURE WALL AND COLOUMN BEAM
                    </option>
                    <option value="RCC STRUCTURE">RCC STRUCTURE</option>
                </select>
            </div>
            <!-- site_value -->
            <div class="mb-3 mt-5">
                <label class="form-label text-uppercase">Site Value (as per agreement)</label>
                <input type="text" class="form-control" name="site_value">
            </div>
            <!-- contractor info  -->
            <div class="info_bar mt-5 text-uppercase">
                <p>
                    Contractor Info Enter Here
                </p>
            </div>

            <!-- contractor_company -->
            <div class="mb-3">
                <label class="form-label text-uppercase">Contractor Company</label>
                <input type="text" class="form-control" name="contractor_company">
            </div>
            <!-- contractor_name -->
            <div class="row">
                <div class="col">
                    <label class="form-label text-uppercase">Contractor Name</label>
                    <input type="text" class="form-control" name="contractor_name">
                </div>
                <!-- contractor_no -->
                <div class="col">
                    <label class="form-label text-uppercase">Contractor No</label>
                    <input type="number" pattern="[0-9]{10}" class=" form-control" name="contractor_no" style>
                </div>
                <!-- Site Engineer No -->
                <div class="col">
                    <label class="form-label text-uppercase">Site Engineer No</label>
                    <input type="text" class="form-control" name="site_engineer_no">
                </div>

                <!-- contractor documnets  -->
                <div class="row mt-2">
                    <div class="col">
                        <label class="form-label mt-5" for="customFile">Uplod Addhar</label>
                        <input type="file" class="form-control" id="customFile" name="contractor_addhar" />
                    </div>
                    <div class="col">
                        <label class="form-label mt-5" for="customFile">Uplod Pan Card</label>
                        <input type="file" class="form-control" id="customFile" name="contractor_pen" />
                    </div>
                </div>
                <!-- contractor documnets end -->
            </div>
            <!-- Consultunt info -->
            <div class="info_bar mt-5 text-uppercase">
                <p>
                    Consultant info enter here
                </p>
            </div>


            <!-- consultant_site_engineer_no -->
            <div class="col">
                <label class="form-label text-uppercase">Consultant Site Engineer No</label>
                <input type="text" class="form-control" name="consultant_site_engineer_no">
            </div>
            <!-- site_start_date -->
            <div class="row mt-2">
                <div class="col">
                    <label class="form-label text-uppercase">Site Start date</label>
                    <input type="date" class="form-control" name="site_start_date">
                </div>
                <!-- site_complition_month -->
                <div class="col">
                    <label class="form-label text-uppercase">Site Complition month</label>
                    <input type="date" class="form-control" name="site_complition_month">
                </div>
                <!-- worke_complition_time -->
                <div class="col mt-3">
                    <label class="form-label text-uppercase">Worke complition time</label>
                    <input type="text" class="form-control" name="worke_complition_time">
                </div>
                <!-- consultents documnets  -->

                <div class="row mt-2">
                    <div class="col">
                        <label class="form-label mt-5" for="customFile">Uplod Addhar</label>
                        <input type="file" class="form-control" id="customFile" name="consultent_addhar" />
                    </div>
                    <div class="col">
                        <label class="form-label mt-5" for="customFile">Uplod Pan Card</label>
                        <input type="file" class="form-control" id="customFile" name="consultent_pen" />
                    </div>
                </div>

                <!-- consultents documnets  end-->


            </div>
            <!-- user id or password  -->
            <div class="info_bar mt-5 text-uppercase">
                <p>
                    Create Socitey Login
                </p>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="form-label text-uppercase">Socitey Id</label>
                    <input type="text" class="form-control" name="socitey_id" placeholder="socitey_name@avon">
                </div>
                <div class="col">
                    <label class="form-label text-uppercase">Password</label>
                    <input type="password" class="form-control" name="socitey_password">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label class="form-label mt-5" for="customFile">Uplod Profile Image</label>
                    <input type="file" class="form-control" id="customFile" name="user_file_data" />
                </div>
                <div class="col">
                    <label class="form-label mt-5" for="customFile">Uplod Pan Card</label>
                    <input type="file" class="form-control" id="customFile" name="other_dc" />
                </div>
            </div>
            <!-- <label class="form-label mt-5" for="customFile">Uplod Profile Image</label>
            <input type="file" class="form-control" id="customFile" name="user_file_data" /> -->


            <div class="mt-5">
                <button type="submit" name="addsocitye-btn" class="btn btn-primary btn-block" style="width: 100%;">Sign
                    up</button>
            </div>
        </form>

    </div>
</div>
<!-- <section>
    <img src="../img/scott-blake-x-ghf9LjrVg-unsplash.jpg" alt="" srcset="" />
</section> -->
<?php //include './eng_sidebar.php'; ?>
<!-- main cod start here -->

<?php include '../main_inc.php/footer.php'; ?>