<?php 
include('../db_conect.php');
        session_start();
    if(isset($_POST['addsocitye-btn'])){
        if(($_POST['socitey_id']) == "" || ($_POST['socitey_password']) == ""){
            $survey_error = '<div class="alert alert-danger" role="alert">
  form field empty
</div>';
        }else{
            // user allreday exist query 
            $sql = "SELECT add_society_section FROM socitey_id WHERE socitey_id
            = '".$_POST['socitey_id']."'";
            $result = $conn->query($sql);
            if($result->num_rows==1){
                $emt_fild_errror = '<div class="alert alert-warning mt-2" 
                role="alert">already have an account</div>';
                }else{

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
                $structure_type = $_POST['structure_type']; // - 11 - structure_type
                // $site_value = $_POST['site_value']; // - 11 - site_value
                $podium_level = $_POST['podium_level']; // - 12 - podium_level
                $basement_level = $_POST['basement_level']; // basement_level
                $stiltorground = $_POST['stiltorground']; // stiltorground
                $type_of_servay = $_POST['type_of_servay']; // type_of_servay
                $servay_time = $_POST['servay_time']; // servay_time
                $servay_date = $_POST['servay_date']; // servay_date
                // team engineer
                $senior_engineer1 = $_POST['senior_engineer1']; // senior_engineer1
                $senior_engineer1 = $_POST['senior_engineer2']; // senior_engineer1
                $junior_engineer1 = $_POST['junior_engineer1']; // junior_engineer1
                $junior_engineer2 = $_POST['junior_engineer2']; // junior_engineer2
                // team engineer
                $senior_surveyor1 = $_POST['senior_surveyor1']; // senior_surveyor1
                $senior_surveyor2 = $_POST['senior_surveyor2']; // senior_surveyor2
                $junior_surveyor1 = $_POST['junior_surveyor1']; // junior_surveyor1
                $junior_surveyor2 = $_POST['junior_surveyor2']; // junior_surveyor2
                // id pass 
                $socitey_id = $_POST['socitey_id']; // socitey_id
                $socitey_password = $_POST['socitey_password']; // socitey_password
                // servay label survey_label1
                $survey_label1 = $_POST['survey_label1']; // socitey_password
                    
                // $myservay = $socitey_id;
                // echo $survey_label1;
                // $other_dc_file_name = $_FILES['other_dc']['name'];
                // $other_dc_temp_name = $_FILES['other_dc']['tmp_name'];
                // $other_dc_folder = "../other_dcimg/".$other_dc_file_name;
                // move_uploaded_file($other_dc_temp_name,$other_dc_folder);

    // Socitey end ---<
                $sql = "INSERT INTO `add_society_section`(socitey_name, socitey_addres, socitey_rea, pin_cod,contact_person, 
                contact_no, structure_no, socitey_wing, construction_year, structure_type, podium_level,
                basement_level, stiltorground, type_of_servay, servay_time, servay_date, senior_engineer1, 
                senior_engineer2, junior_engineer1, junior_engineer2, senior_surveyor1, senior_surveyor2, 
                junior_surveyor1, junior_surveyor2, socitey_id, socitey_password, survey_label1) 
                VALUES('$socitey_name', '$socitey_addres', '$socitey_rea', '$pin_cod', '$contact_person', '$contact_no',
                '$structure_no','$socitey_wing','$construction_year','$structure_type',
                '$podium_level','$basement_level','$stiltorground','$type_of_servay','$servay_time','$servay_date','senior_engineer1',
                'senior_engineer2','junior_engineer1','junior_engineer2','senior_surveyor1','senior_surveyor2','junior_surveyor1',
                'junior_surveyor2','$socitey_id','$socitey_password','$survey_label1')";
                    echo $sql;
                    $myresult = $conn->query($sql);
                    if($myresult){     
                        $_SESSION['myservay'] = $socitey_id; //session started
                    header("location:./addservaypart.php");
                    }else{echo "fill to submit";}

                }//.....
            }

    }
    
?>



<?php include './addmin_inc/admin_header.php'; ?>
<!-- header inc here  -->

<?php include './addmin_inc/admin_side.php'; ?>
<!-- sider inc here  -->



<!-- header include  -->
<?php include '../main_inc.php/header.php'; ?>
<!-- main cod start here -->
<div class="main_f-row-1" style="margin-bottom: 100px;">

    <div class="main-form-fild">
        <div>
            <div class="alert alert-dark" role="alert">
                <a href="./allservay.php" class="ms-2 btn btn-primary">See All Added New Surevy</a>
            </div>
        </div>
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
            <!-- worke part start -->
            <!-- podium level -->
            <div class="col-12 mt-5">
                <label class="form-label text-uppercase" for="inlineFormSelectPref">Podium level</label>
                <select class="form-select" name="podium_level" id="inlineFormSelectPref">
                    <option value="level1" selected>Level 1</option>
                    <option value="level2" selected>Level 2</option>
                    <option value="level3" selected>Level 3</option>
                    <option value="level4" selected>Level 4</option>
                    <option value="level5" selected>Level 5</option>

                </select>
            </div>
            <!-- basement  -->
            <div class="col-12 mt-5">
                <label class="form-label text-uppercase" for="inlineFormSelectPref">basement level</label>
                <select class="form-select" name="basement_level" id="inlineFormSelectPref">
                    <option value="level1" selected>Level 1</option>
                    <option value="level2" selected>Level 2</option>
                    <option value="level3" selected>Level 3</option>
                    <option value="level4" selected>Level 4</option>
                    <option value="level5" selected>Level 5</option>

                </select>
            </div>
            <!-- stilt and ground check box start  -->
            <div class="col-12 mt-5">
                <label class="form-label text-uppercase" for="inlineFormSelectPref">Stilt Or Ground</label>
                <select class="form-select" name="stiltorground" id="inlineFormSelectPref">
                    <option value="stilt" selected>Stilt</option>
                    <option value="ground">Ground</option>
                </select>
            </div>
            <!-- <div class="form-check form-check-inline mt-5">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="stilt" name="">
                <label class="form-check-label" for="inlineCheckbox1">Stilt</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="ground">
                <label class="form-check-label" for="inlineCheckbox2">Ground</label>
            </div> -->
            <!-- stilt and ground check box end  -->

            <!-- type of servay detailed -->
            <div class="col-12 mt-5">
                <label class="form-label text-uppercase" for="inlineFormSelectPref">Type Of Servay</label>
                <select class="form-select" name="type_of_servay" id="inlineFormSelectPref">
                    <option value="ls_servay" selected>Detailed Survey Leakages And Seepages</option>
                    <option value="e_measur">external measurement</option>
                    <option value="ndt">NDT ( non destructive testing )</option>
                    <option value="thermography">Thermography Testing</option>
                    <option value="ndt_all">NDT + All Test</option>
                </select>
            </div>

            <!-- type of servay  -->
            <!-- <div class="row mt-5">
                <div class="col">
                    <label class="form-label text-uppercase">Socitey Id</label>
                    <input type="text" class="form-control" name="socitey_id" placeholder="socitey_name@avon">
                </div>
                <div class="col">
                    <label class="form-label text-uppercase">Password</label>
                    <input type="password" class="form-control" name="socitey_password">
                </div>
            </div> -->


            <div class="my-5">
                <div class="col-auto">
                    <label class="form-label text-uppercase">Servay Time</label>
                    <input type="time" class="form-control" id="autoSizingInput" name="servay_time">
                </div>
                <!-- socitey_wing -->
                <div class="col-auto">
                    <label class="form-label text-uppercase">Servay Date</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="autoSizingInputGroup" name="servay_date">
                    </div>
                </div>

            </div>
            <!-- survey team -->

            <!-- servay team check box start  -->
            <!-- <span>Senior Engineer Junior Engineer Senior surveyor</span> -->
            <div class="info_bar mt-5 text-uppercase">
                <p>
                    Assign Servay Team
                </p>
            </div>
            <!-- Senior Engineer  -->
            <div class="flex" style="display: flex;">
                <div class="col mt-5">
                    <label class="form-label text-uppercase" for="inlineFormSelectPref">Senior Engineer 1 </label>
                    <select class="form-select" name="senior_engineer1" id="inlineFormSelectPref">
                        <option value="1" selected>Senior Engineer 1</option>
                        <option value="2" selected>Senior Engineer 2</option>
                        <option value="3" selected>Senior Engineer 3</option>
                    </select>
                </div>
                <div class="col mt-5 ms-2">
                    <label class="form-label text-uppercase" for="inlineFormSelectPref">Senior Engineer 2</label>
                    <select class="form-select" name="senior_engineer2" id="inlineFormSelectPref">
                        <option value="1" selected>Senior Engineer 1</option>
                        <option value="2" selected>Senior Engineer 2</option>
                        <option value="3" selected>Senior Engineer 3</option>
                    </select>
                </div>
            </div>

            <!-- Junior Engineer  -->
            <div class="flex" style="display: flex;">
                <div class="col mt-5">
                    <label class="form-label text-uppercase" for="inlineFormSelectPref">Junior Engineer 1</label>
                    <select class="form-select" name="junior_engineer1" id="inlineFormSelectPref">
                        <option value="1" selected>Senior Engineer 1</option>
                        <option value="2" selected>Senior Engineer 2</option>
                        <option value="3" selected>Senior Engineer 3</option>
                    </select>
                </div>
                <div class="col mt-5 ms-2">
                    <label class="form-label text-uppercase" for="inlineFormSelectPref">Junior Engineer 2</label>
                    <select class="form-select" name="junior_engineer2" id="inlineFormSelectPref">
                        <option value="1" selected>Senior Engineer 1</option>
                        <option value="2" selected>Senior Engineer 2</option>
                        <option value="3" selected>Senior Engineer 3</option>
                    </select>
                </div>
            </div>


            <!-- Senior surveyor start-->
            <div class="flex" style="display: flex;">
                <div class="col mt-5">
                    <label class="form-label text-uppercase" for="inlineFormSelectPref">Senior surveyor 1 </label>
                    <select class="form-select" name="senior_surveyor1" id="inlineFormSelectPref">
                        <option value="1" selected>Senior Engineer 1</option>
                        <option value="2" selected>Senior Engineer 2</option>
                        <option value="3" selected>Senior Engineer 3</option>
                    </select>
                </div>
                <div class="col mt-5 ms-2">
                    <label class="form-label text-uppercase" for="inlineFormSelectPref">Senior surveyor 2</label>
                    <select class="form-select" name="senior_surveyor2" id="inlineFormSelectPref">
                        <option value="1" selected>Senior Engineer 1</option>
                        <option value="2" selected>Senior Engineer 2</option>
                        <option value="3" selected>Senior Engineer 3</option>
                    </select>
                </div>
            </div>
            <!-- Senior surveyor end-->
            <!-- Junior surveyor start-->

            <div class="flex" style="display: flex;">
                <div class="col mt-5">
                    <label class="form-label text-uppercase" for="inlineFormSelectPref">Junior surveyor 1 </label>
                    <select class="form-select" name="junior_surveyor1" id="inlineFormSelectPref">
                        <option value="1" selected>Senior Engineer 1</option>
                        <option value="2" selected>Senior Engineer 2</option>
                        <option value="3" selected>Senior Engineer 3</option>
                    </select>
                </div>
                <div class="col mt-5 ms-2">
                    <label class="form-label text-uppercase" for="inlineFormSelectPref">Junior surveyor 2</label>
                    <select class="form-select" name="junior_surveyor2" id="inlineFormSelectPref">
                        <option value="1" selected>Senior Engineer 1</option>
                        <option value="2" selected>Senior Engineer 2</option>
                        <option value="3" selected>Senior Engineer 3</option>
                    </select>
                </div>
            </div>
            <!-- Junior surveyor end-->


            <!-- socitey create -->
            <div class="row my-5">
                <div class="col">
                    <label class="form-label text-uppercase">Socitey Id</label>
                    <input type="text" class="form-control" name="socitey_id" placeholder="socitey_name@avon">
                </div>
                <div class="col">
                    <label class="form-label text-uppercase">Password</label>
                    <input type="password" class="form-control" name="socitey_password">
                </div>
            </div>

            <!-- <input type="text" class="form-control" name="survey_label" id="" value="survey"> -->
            <div class="col mt-5 ms-2">
                <select class="form-select" name="survey_label1" id="inlineFormSelectPref">
                    <option value="survey" selected>survey</option>
                </select>
            </div>

            <span class="my-5"><?php if(isset($survey_error)) {
            echo $survey_error;
            } ?> </span>
            <!-- worke part end -->
            <div class="mt-5">
                <button type="submit" name="addsocitye-btn" class="btn btn-primary btn-block" style="width: 100%;">Sign
                    up</button>
            </div>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                </div>
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







<!-- footer inc here  -->
<?php include './addmin_inc/addmin_footer.php'; ?>