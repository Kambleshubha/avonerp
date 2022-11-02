<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-transform: uppercase;">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="../img/logo.png" height="15" alt="MDB Logo" loading="lazy" />
            </a>
            <!-- Left links -->

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./main_user_profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./ongoing_site.php?ongoing=onggoing">
                        OnGoing Site</a>

                </li>
                <!-- onging site php start here  -->
                <?php 
                
                include('../db_conect.php');
                $query = "SELECT * FROM add_society_section ";
                $result = mysqli_query($conn,$query);
                $row = mysqli_fetch_assoc($result)
                ?>
                <!-- onging site php end here  -->
                <li class="nav-item">
                    <a class="nav-link" href="./complet_project.php?ongoing=complete">Completed Site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./user_dc.php">Document's</a>
                </li>
                <!-- dropdown 1  -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./user_dc.php" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown">
                        Document's
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Paper add</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Tender Document</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Paper add</a></li>
                    </ul>
                </li> -->
                <!-- dropdown 1  -->


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Report's
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"
                                href="./seeservay.php?id=<?php echo $_SESSION['user_id']; ?>">servay Report</a></li>
                        <li><a class="dropdown-item" href="../user_profile/usdaily_report.php">Daily Report</a></li>
                        <li><a class="dropdown-item" href="#">Progres Report</a></li>
                        <!-- <li><a class="dropdown-item" href="./user_documnet.php">Documents</a></li> -->
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                        <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>

            </ul>

            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->

        <!-- Notifications -->
        <!-- <div class="dropdown">
                <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div> -->
        <!-- Avatar -->

        <span style="margin: 0px 20px;background: #c4c4c4;padding: 5px 10px;
        border-radius: 10px; color: #42793a;"> Active <span
                style="color: #0040ff;"><?php echo($_SESSION['user_id']); ?></span></span>
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar"
            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <img src="" class="rounded-circle" height="25" loading="lazy" />
        </a>
        <!-- <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul> -->

    </div>
    <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->