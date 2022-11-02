 <!-- session -->
 <?php session_start(); 
include('../db_conect.php');
$query = "SELECT * FROM add_society_section";
$result = mysqli_query($conn,$query);

?>

 <!-- db connection  -->

 <?php include './addmin_inc/admin_header.php'; ?>
 <!-- header inc here  -->

 <?php include './addmin_inc/admin_side.php'; ?>
 <!-- sider inc here  -->
 <div style="width: 50%;margin: 100px auto;">
     <div>
         <div class="alert alert-dark" role="alert">
             <a href="./addservaypart.php" class="ms-2 btn btn-primary">Add New Suervy</a>
         </div>
     </div>
     <div class="col-12">
         <h2>Filterable Table</h2>
         <p>Type something in the input field to search the table for first names, last names or emails:</p>
         <input class="form-control" id="myInput" type="text" placeholder="Search..">
         <br>
         <table class="table table-bordered table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Site Name:</th>
                     <th>Socitey Id</th>
                     <th>Contact Person</th>
                     <th>Contact no</th>
                 </tr>
             </thead>
             <tbody id="myTable">
                 <tr>

                     <?php 
                while($row = mysqli_fetch_assoc($result)){
                ?>

                     <th scope="row"><?php echo $row['srno']; ?></th>
                     <td><?php echo $row['socitey_name']; ?></td>
                     <td><?php echo $row['socitey_id']; ?></td>
                     <td><?php echo $row['contact_person']; ?></td>
                     <td><?php echo $row['contact_no']; ?></td>
                 </tr>
                 <!-- <------------>

                 <?php
                }
                
                ?>
             </tbody>
         </table>

         <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
     </div>

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
 <!-- footer inc here  -->
 <?php include './addmin_inc/addmin_footer.php'; ?>