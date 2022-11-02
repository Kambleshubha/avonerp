<?php
session_start(); 
include('../db_conect.php');
if(isset($_GET['id'])){
    $servay_id = $_GET['id'];
    // echo $servay_id;
    $myservay = "SELECT `srno`, `added_date`, `socitey_name`, `socitey_addres`, `socitey_rea`, `pin_cod`, `contact_person`, `contact_no`, `structure_no`, `socitey_wing`, `construction_year`, `structure_type`, `podium_level`, `basement_level`, `stiltorground`, `type_of_servay`, `servay_time`, `servay_date`, `senior_engineer1`, `senior_engineer2`, `junior_engineer1`, `junior_engineer2`, `senior_surveyor1`, `senior_surveyor2`, `junior_surveyor1`, `junior_surveyor2`, `site_value`, `contractor_company`, `contractor_name`, `contractor_no`, `site_engineer_no`, `contractor_addhar`, `contractor_pen`, `consultant_site_engineer_no`, `site_start_date`, `site_complition_month`, `worke_complition_time`, `consultent_addhar`, `consultent_pen`, `socitey_id`, `socitey_password`, `user_file_data`, `other_dc`, `onc_label`, `survey_label1` 
    FROM `add_society_section` WHERE socitey_id='$servay_id'";
    // echo $myservay;
    $dbresult = mysqli_query($conn,$myservay);
    $suervy_report = mysqli_fetch_array($dbresult);
    // print_r($suervy_report);
// ........................... 
    $servay_date = $suervy_report['socitey_name'];

}

?>
<!-- db connection  -->
<?php include '../main_inc.php/header.php'; ?>
<?php include('./user_nav.php'); ?>
<!-- header and navbar  -->


<!-- // new tabel  -->


<div class="container pb-5">
    <table style="width:100%; border: 1px solid black;
            border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;">Socitey Name:</th>
            <td style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;"><?php echo $servay_date; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;">Socitey Addres:</th>
            <td style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;"><?php echo $suervy_report['socitey_addres']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Area:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['socitey_rea']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Pin Code:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['pin_cod']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Contact Person:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['contact_person']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Contact No:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php $suervy_report['contact_no']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Structure No:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['structure_no']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Wing:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['socitey_wing']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Construction Year:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['construction_year']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">STRUCTURE TYPE:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['structure_type']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Podium level:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['podium_level']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Basement level:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['basement_level']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Stilt Or Ground:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['stiltorground']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Type Of Servay:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['type_of_servay']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Servay Time:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['servay_time']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Servay Date:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['servay_date']; ?></td>
        </tr>

    </table>
    <!-- <div class="mt-5">
        <div class="alert alert-dark" role="alert">
            suervy team
        </div>
    </div> -->
    <!-- suervy team -->
    <table style="width:100%; border: 1px solid black;
            border-collapse: collapse;" class="mt-5">
        <tr>
            <!-- <th style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;">Socitey Name:</th> -->
            <td colspan="2" style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;
            text-align: center;
            text-transform: uppercase;
            padding: 10px 0px;
            background: #f4f4f4;
            "> <span class="text-center">Suervy Team</span></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;">Senior Engineer 1 :</th>
            <td style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;"><?php echo $suervy_report['senior_engineer1']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Senior Engineer 2:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['senior_engineer2']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Junior Engineer 1:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['junior_engineer1']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Junior Engineer 2:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['junior_engineer2']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Senior surveyor 1:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php $suervy_report['senior_surveyor1']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Senior surveyor 2:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['senior_surveyor2']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Junior surveyor 1:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['junior_surveyor1']; ?></td>
        </tr>
        <tr>
            <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Junior surveyor 2:</th>
            <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $suervy_report['junior_surveyor2']; ?></td>
        </tr>

    </table>
</div>


<!-- foooter -->
<?php include '../main_inc.php/footer.php'; ?>