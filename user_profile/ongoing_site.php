<?php
session_start(); 
include('../db_conect.php'); 
if(!isset($_SESSION['user_id'])){
    echo '<script> location.href = "./404.php";</script>';
}
// $oandg_project = $_GET['ongoing'];
if(isset($_GET['ongoing'])){
    $ong_data = $_GET['ongoing'];
    echo $ong_data;
    $query = "SELECT * FROM add_society_section WHERE onc_label='$ong_data'";
    $dr_result = mysqli_query($conn,$query);
    // $row = mysqli_fetch_array($dr_result);
    

}

?>
<?php include '../main_inc.php/header.php'; ?>
<!-- header  -->
<?php include('./user_nav.php'); ?>
<!-- nav  -->

<div class="container">
    <!-- <h2>Filterable Table</h2>
    <p>Type something in the input field to search the table for first names, last names or emails:</p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br> -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Site Name</th>
                <th>Site Name:</th>
                <!-- <th>Supervisor’s Name: </th> -->
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <?php 
         while($row = mysqli_fetch_array($dr_result)){ 
        ?>
                <td><?php echo $row['srno']; 
                ?></td>
                <td><?php echo $row['socitey_name']; ?></td>
                <td><?php echo $row['site_value']; ?></td>

                <td>
                    <div class="alert alert-primary" role="alert">
                        <i class="fa-solid fa-hammer"></i>
                        <?php echo $row['onc_label']; ?>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- <p>Note that we start the search in tbody, to prevent filtering the table headers.</p> -->
</div>

<script>
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>

<!-- footer  -->
<?php include '../main_inc.php/footer.php'; ?>