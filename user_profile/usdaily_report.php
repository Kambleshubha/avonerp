<?php
session_start(); 
include('../db_conect.php');

$user_report = $_SESSION['user_id'];
$query = "SELECT * FROM avon_daily_report WHERE society_id='$user_report'";
$dr_result = mysqli_query($conn,$query);
// $row = mysqli_fetch_array($dr_result);
// print_r($row);
// $date = date("Y/m/d");
// echo $date;
// $site_name = $row['site_name'];
// $supervisor_name = $row['supervisor_name'];


?>
<!-- db connection  -->
<?php include '../main_inc.php/header.php'; ?>
<?php include('./user_nav.php'); ?>
<!-- header and navbar  -->


<!-- // new tabel  -->


<div class="container">
    <h2>Filterable Table</h2>
    <p>Type something in the input field to search the table for first names, last names or emails:</p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Site Name:</th>
                <th>Supervisor’s Name: </th>
                <th>See Report</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <?php 
        while($row = mysqli_fetch_array($dr_result)){ 
        ?>
                <td><?php echo $row['sno']; 
                // $no = $row['sno'];
                // $_SESSION['s_no'] = $no;
                ?></td>
                <td><?php echo date("Y/m/d"); ?></td>
                <td><?php echo $row['site_name']; ?></td>
                <td><?php echo $row['supervisor_name']; ?></td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a href="./seereport.php?id=<?php echo $row['sno']; ?>"
                            class="text-decoration-none text-light"><i class="fa-solid fa-eye"></i></a>
                        <?php  ?>
                    </button></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
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


<!-- foooter -->
<?php include '../main_inc.php/footer.php'; ?>