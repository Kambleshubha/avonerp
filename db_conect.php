<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "avonerp";
// ....... 
// $db_host = "localhost";
// $db_user = "admin";
// $db_password = "6uqEKwK#$gs(s=ak";
// $db_name = "avonerp";
// avonerp@admin avonerp@admin avonerp

//  6uqEKwK#$gs(s=ak - admin

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

    //   if(isset($_POST['onc_update'])){

    //     // $socitey_name = $_POST['socitey_name'];  //- 1 - socitey_name
    //     $onc_tag = $_POST['onc_tag'];
    //     $query = "UPDATE `add_society_section` SET onc_label='$onc_tag' WHERE id='$userid'";
    //     $query_run = mysqli_query($conn,$query);
    //     if($query_run){
    //     echo '<script> location.href = "./ongoandcomplet.php";</script>';
    //     }else{
    //         echo "fail";
    //     }
    // }

?>