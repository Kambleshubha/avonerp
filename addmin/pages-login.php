<?php 

include('../db_conect.php');
if(isset($_POST['addmin_login'])){
	$addmin_id = $_POST['addmin_id'];
	$addmin_pass = $_POST['addmin_pass'];
	// addmindb_login 
	
	$addmin_result = "SELECT addmin_id, addmin_pass FROM addmin_user 
            WHERE addmin_id= '".$addmin_id."'AND addmin_pass='".$addmin_pass."' limit 1";
	// exequt qurey 

	$addminresult = $conn->query($addmin_result);
            if($addminresult->num_rows == 1){
                $_SESSION['addminid'] = $addmin_id;
                echo '<script> location.href = "./admin.php";</script>';
            }else{
                $error_msg = '<div class="alert alert-danger" role="alert">
                A simple info alert—check it out!
                </div>';
            }
}

?>
<!-- php code here  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Pages / Login</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                            </div>
                            <!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">
                                            Addmin Login
                                        </h5>
                                        <p class="text-center small">
                                            Enter your username & password to login
                                        </p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate action="" method="POST">
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="addmin_id" class="form-control"
                                                    id="yourUsername" required />

                                                <div class="invalid-feedback">
                                                    Please enter your username.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="addmin_pass" class="form-control"
                                                id="yourPassword" required />
                                            <div class="invalid-feedback">
                                                Please enter your password!
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe" />
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit" name="addmin_login">
                                                Login
                                            </button>
                                        </div>
                                        <div class="error_msg mt-5">
                                            <span><?php if(isset($error_msg)){ echo $error_msg; } ?></span>
                                        </div>
                                        <p>admin1@avon<br><br>admin123</p>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- End #main -->
    <!-- 
		<a
			href="#"
			class="back-to-top d-flex align-items-center justify-content-center"
			><i class="bi bi-arrow-up-short"></i
		></a> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>