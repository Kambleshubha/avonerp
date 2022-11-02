<?php
session_start(); 
include('../db_conect.php');
if(isset($_GET['id'])){
    // $seereport_id = $_GET['id'];
    $report = mysqli_real_escape_string($conn, $_GET['id']);
    $report_query = "SELECT * FROM `avon_daily_report` WHERE sno='$report'";
    $query_run = mysqli_query($conn, $report_query);
    if(mysqli_num_rows($query_run) > 0){
        
        $seedata = mysqli_fetch_array($query_run);
        // ... 
        $servay_date = $seedata['servay_date'];
        $site_name = $seedata['site_name'];
        $supervisor_name = $seedata['supervisor_name'];//supervisor_name
        $activity_under_progress = $seedata['activity_under_progress'];//activity_under_progress
        $number_of_labours = $seedata['number_of_labours'];//number_of_labours
        $mail_labours = $seedata['mail_labours'];//mail_labours
        $femail_labours = $seedata['femail_labours'];//femail_labours
        $masons = $seedata['masons'];//masons
        $plumbers = $seedata['plumbers'];//plumbers
        $fabricators = $seedata['fabricators'];//fabricators
        $painters = $seedata['painters'];//painters
        $remarks = $seedata['remarks'];//remarks
        $complaints = $seedata['complaints'];//complaints
        $contractor_supervisor = $seedata['contractor_supervisor'];//contractor_supervisor
        $consultant_supervisor = $seedata['consultant_supervisor'];//consultant_supervisor
        $visiting_engineers = $seedata['visiting_engineers'];//visiting_engineers
        $site_image = $seedata['site_image'];//site_image
        $report_documnet = $seedata['report_documnet'];//report_documnet
        
        // print_r($seedata);

    }else{
        echo "fil";
    }



}else{
echo "file";
}

?>
<!-- db connection  -->
<?php include '../main_inc.php/header.php'; ?>
<?php include('./user_nav.php'); ?>
<!-- header and navbar  -->

<div class="main_div">
    <div class="div_center" style="width: 70%;padding: 10px; margin: 0px auto;">
        <table style="width:100%; border: 1px solid black;
            border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;">Date: </th>
                <td style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;"><?php echo $servay_date; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;">Site Name:</th>
                <td style="border: 1px solid black;
            border-collapse: collapse; padding: 5px;"><?php echo $site_name; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Supervisor’s Name:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $supervisor_name; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Activity Under Progress:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $activity_under_progress; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Number Of Labours:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $number_of_labours; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Male Labours:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $mail_labours; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">femail Labours:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $femail_labours; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Masons:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $masons; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Plumbers:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $plumbers; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Fabricators:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $fabricators; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Painters:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $painters; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Remarks:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $remarks; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Complaints:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $complaints; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Contractor Supervisor:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $contractor_supervisor; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Consultant Supervisor:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $consultant_supervisor; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Visiting Engineers:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><?php echo $visiting_engineers; ?></td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Image:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;">
                    <div class="card-body text-center" style="width: 152px;height: 150px;">
                        <a href="<?php echo $site_image; ?>" target="_blank"><img src="<?php echo $site_image; ?>"
                                alt="image" class="img-fluid" style="width: 100%;height: 100%;display: block;"></a>
                    </div>
                </td>
            </tr>
            <tr>
                <th style="border: 1px solid black;
                border-collapse: collapse; padding: 5px;">Visiting Engineers:</th>
                <td style="border: 1px solid black;
                border-collapse: collapse;padding: 5px;"><a href="<?php echo $report_documnet; ?>"
                        class="btn btn-primary" target="_blank">View
                        Documnet</a><span> <?php echo $report_documnet; ?></span>
                </td>
            </tr>
        </table>
    </div>
</div>
<!-- foooter -->
<?php include '../main_inc.php/footer.php'; ?>