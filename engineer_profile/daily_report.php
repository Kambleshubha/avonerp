 <!-- session -->
 <?php session_start(); ?>
 <?php include('./eng_nav.php'); ?>
 <!-- db connection  -->

 <?php 
include('../db_conect.php');
if(isset($_POST['submit_servay'])){
if(($_POST['society_id'] == "") || ($_POST['site_name'] == "")){
    $error = '<div class="alert alert-warning mt-2" 
       role="alert">emplty filds</div>';
}else{
//  $date = date("Y/m/d");
//  echo $date;
 $servay_date = $_POST['servay_date'];
 $_SESSION['date'] = $servay_date;
//  echo $_SESSION['date'];
//  echo $servay_date;
 $society_id = $_POST['society_id'];
 $site_name = $_POST['site_name'];
 $supervisor_name = $_POST['supervisor_name'];
 $activity_progress = $_POST['activity_progress'];
 $labours_count = $_POST['labours_count'];//NUMBER OF LABOURS
 $male_labours = $_POST['male_labours'];//male_labours
 $female_labours = $_POST['female_labours'];//female_labours
 $masons = $_POST['masons'];//masons
 $plumbers = $_POST['plumbers'];//plumbers
 $fabricators = $_POST['fabricators'];//fabricators
 $painters = $_POST['painters'];//painters
 $remark = $_POST['remark'];//remark
 $complaints = $_POST['complaints'];//complaints
 $contractor_supervisor = $_POST['contractor_supervisor'];//contractor_supervisor
 $consultant_supervisor = $_POST['consultant_supervisor'];//consultant_supervisor
 $visiting_supervisor = $_POST['visiting_supervisor'];//visiting_supervisor
//  $site_image = $_POST['site_image'];//site_image
//  $report_documnet = $_POST['report_documnet'];//report_documnet

//  document section \

    $site_image_file_name = $_FILES['site_image']['name'];
    $site_image_temp_name = $_FILES['site_image']['tmp_name'];
    $site_image_folder = "../report_imageanddc/img/".$site_image_file_name;
    move_uploaded_file($site_image_temp_name,$site_image_folder);

    $dc_file_name = $_FILES['report_documnet']['name'];
    $dc_image_temp_name = $_FILES['report_documnet']['tmp_name'];
    $dc_image_folder = "../report_imageanddc/dc/".$dc_file_name;
    move_uploaded_file($dc_image_temp_name,$dc_image_folder);

//  document section end
 // code exequte
 $sql = "INSERT INTO avon_daily_report ( servay_date, society_id, site_name, supervisor_name, activity_under_progress,
 number_of_labours, mail_labours, femail_labours, masons, plumbers, fabricators, painters, remarks, complaints,
 contractor_supervisor, consultant_supervisor, visiting_engineers, site_image, report_documnet)
 VALUES('$servay_date','$society_id','$site_name','$supervisor_name', '$activity_progress', '$labours_count', '$male_labours',
 '$female_labours', '$masons', '$plumbers', '$fabricators', '$painters', '$remark', '$complaints',
 'contractor_supervisor', '$consultant_supervisor', '$visiting_supervisor','$site_image_folder','$dc_image_folder')";
 $conn->query($sql);
 }
 }
 ?>

 <!-- header include  -->
 <?php include '../main_inc.php/header.php'; ?>
 <!-- header include end  -->
 <div class="row h-100 d-flex justify-content-center align-items-center">
     <div class="col-lg-5 p-5 mt-5" style="background: #f9f9f9;">
         <div>
             <h1 class="text-uppercase text-center py-2">Daily Report</h1>
         </div>
         <form action="" method="POST" enctype="multipart/form-data">
             <!-- SITE NAME -->
             <div class="form-outline mb-4">
                 <div class="form-outline datepicker">
                     <input type="date" class="form-control mt-3" name="servay_date">
                     <label for="exampleDatepicker11" class="form-label">Servay Date</label>
                 </div>
             </div>
             <div class="form-outline mb-4">
                 <div class="form-outline datepicker">
                     <input type="text" name="society_id" class="form-control" id="exampleDatepicker11" />
                     <label for="exampleDatepicker11" class="form-label">Society id</label>
                 </div>
             </div>

             <div class="form-outline mb-4">
                 <input type="text" name="site_name" id="form4Example1" class="form-control" />
                 <label class="form-label" for="form4Example1">SITE NAME: </label>
             </div>

             <!-- Supervisor’s Name -->
             <div class="form-outline mb-4">
                 <input type="text" name="supervisor_name" id="form4Example2" class="form-control" />
                 <label class="form-label" for="form4Example2">Supervisor’s Name: </label>
             </div>

             <!-- ACTIVITY UNDER PROGRESS -->
             <div class="form-outline mb-4">
                 <textarea class="form-control" name="activity_progress" id="form4Example3" rows="1"></textarea>
                 <label class="form-label" for="form4Example3">ACTIVITY UNDER PROGRESS: </label>
             </div>
             <!-- NUMBER OF LABOURS -->
             <div class="form-outline mb-4">
                 <input type="text" name="labours_count" id="form4Example2" class="form-control" />
                 <label class="form-label" for="form4Example2">NUMBER OF LABOURS: </label>
             </div>
             <!-- NUMBER OF LABOURS -->
             <!-- 2 column grid layout with text inputs for the first and last names -->
             <div class="row mb-4">
                 <div class="col">
                     <div class="form-outline">
                         <input type="number" name="male_labours" id="form3Example1" class="form-control" />
                         <label class="form-label" for="form3Example1">MALE LABOURS</label>
                     </div>
                 </div>
                 <div class="col">
                     <div class="form-outline">
                         <input type="number" name="female_labours" id="form3Example2" class="form-control" />
                         <label class="form-label" for="form3Example2">FEMALE LABOURS</label>
                     </div>
                 </div>
                 <div class="col">
                     <div class="form-outline">
                         <input type="number" name="masons" id="form3Example2" class="form-control" />
                         <label class="form-label" for="form3Example2">MASONS</label>
                     </div>
                 </div>
             </div>
             <!-- ..............  -->
             <div class="row mb-4">
                 <div class="col">
                     <div class="form-outline">
                         <input type="number" name="plumbers" id="form3Example1" class="form-control" />
                         <label class="form-label" for="form3Example1">PLUMBERS</label>
                     </div>
                 </div>
                 <div class="col">
                     <div class="form-outline">
                         <input type="number" name="fabricators" id="form3Example2" class="form-control" />
                         <label class="form-label" for="form3Example2">FABRICATORS</label>
                     </div>
                 </div>
                 <div class="col">
                     <div class="form-outline">
                         <input type="number" name="painters" id="form3Example2" class="form-control" />
                         <label class="form-label" for="form3Example2">PAINTERS</label>
                     </div>
                 </div>
             </div>
             <!-- NUMBER OF LABOURS -->
             <div class="form-outline mb-4">
                 <input type="text" name="remark" id="form4Example2" class="form-control" />
                 <label class="form-label" for="form4Example2">REMARKS:- </label>
             </div>
             <!-- NUMBER OF LABOURS -->
             <div class="form-outline mb-4">
                 <input type="text" name="complaints" id="form4Example2" class="form-control" />
                 <label class="form-label" for="form4Example2">COMPLAINTS:- </label>
             </div>
             <!-- NUMBER OF LABOURS -->
             <div class="form-outline mb-4">
                 <input type="text" name="contractor_supervisor" id="form4Example2" class="form-control" />
                 <label class="form-label" for="form4Example2">Contractor’s supervisor</label>
             </div>
             <!-- NUMBER OF LABOURS -->
             <div class="form-outline mb-4">
                 <input type="text" name="consultant_supervisor" id="form4Example2" class="form-control" />
                 <label class="form-label" for="form4Example2">Consultant’s supervisor</label>
             </div>

             <!-- NUMBER OF LABOURS -->
             <div class="form-outline mb-4">
                 <input type="text" name="visiting_supervisor" id="form4Example2" class="form-control" />
                 <label class="form-label" for="form4Example2">Visiting Engineers</label>
             </div>
             <!-- document  -->
             <div class="form-outline mb-4">
                 <div class="col">
                     <label class="form-label mt-5" for="customFile">Uplod Inage</label>
                     <input type="file" class="form-control" id="customFile" name="site_image" />
                 </div>
                 <div class="col">
                     <label class="form-label mt-5" for="customFile">Uplod Documnet</label>
                     <input type="file" class="form-control" id="customFile" name="report_documnet" />
                 </div>
             </div>
             <!-- document end -->
             <button type="submit" name="submit_servay" class="btn btn-primary btn-block mb-4"> SUBMIT SERVAY</button>
         </form>
     </div>
     <!-- Submit button -->
 </div>
 <!-- Submit button -->

 </div>
 </div>

 <!-- footer include  -->
 <?php include '../main_inc.php/header.php'; ?>