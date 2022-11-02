<?php 
session_start();
include('../db_conect.php');
$query = "SELECT * FROM add_society_section";
$result = mysqli_query($conn,$query);

?>

<?php
include('../main_inc.php/header.php'); 
?>

<?php
include('./eng_nav.php'); 
?>

<!-- db include -->

<!-- header include  -->
<!-- sid_bar  start-->

<!-- footer include  -->
<div class="" style="text-align: center;background: #bb6b6b;padding: 20px 0px;">
    <span style="font-size: 20px;color: #fff;"> wellcome <?php echo($_SESSION['username']); ?></span>
    <!-- <span><img src="<?php //echo $profileimage; ?>" alt="" srcset=""></span> -->
</div>
<div class="tabal_col" style="width: 80%; margin: 20px auto;overflow-x: scroll;">
    <div class="tabel_name" style="padding: 5px 10px;background: #001d51;">
        <p style="margin: 0; color: #fff;">
            Socitye Info
        </p>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Date</th>
                <th scope="col">Socitey Name</th>
                <th scope="col">Socitey Addres</th>
                <th scope="col">Area</th>
                <th scope="col">Pin Code</th>
                <th scope="col">Contact Person</th>
                <th scope="col">Contact No</th>
                <th scope="col">Wing</th>
                <th scope="col">Construction Year</th>
                <th scope="col">STRUCTURE TYPE</th>
                <th scope="col">Site Value (as per agreement)</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <?php 
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <th scope="row"><?php echo $row['srno']; ?></th>


                <td><?php echo '<script type="text/JavaScript"> 
                                var today = new Date().toLocaleDateString()
                                document.write(today);
                                </script>'; ?></td>
                <td><?php echo $row['socitey_name']; ?></td>
                <td><?php echo $row['socitey_addres']; ?></td>
                <td><?php echo $row['socitey_rea']; ?></td>
                <td><?php echo $row['pin_cod']; ?></td>
                <td><?php echo $row['contact_person']; ?></td>
                <td><?php echo $row['contact_no']; ?></td>
                <td><?php echo $row['socitey_wing']; ?></td>
                <td><?php echo $row['construction_year']; ?></td>
                <td><?php echo $row['structure_type']; ?></td>
                <td><?php echo $row['site_value']; ?></td>

            </tr>
            <!-- <------------>

            <?php
                }
                
                ?>

        </tbody>
    </table>
</div>

<?php
include('../main_inc.php/footer.php'); 
?>