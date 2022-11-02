<?php include '../main_inc.php/header.php';?>
<!-- header include  -->
<!-- sid_bar  start-->
<div class="main_user_sidebar">
    <!--main sidber-->
    <div class="user_profile_image">
        <!--user_profile_image-->

        <div class="imag_secttion">
            <div class="user_image_section">
                <!--user_image_section-->
                <img src="../img/userimg.jpg" alt="">
            </div>
            <!--user_image_section-->
        </div>
        <h1><?php echo($_SESSION['username']); ?></h1>
    </div>
    <!--user_profile_image-->
    <!--main sidber start here-->
    <div class="user_links">
        <div class="menu_list">
            <ul>
                <li style="display: flex; align-items: center;"> <i class="fa-solid fa-id-card-clip"
                        style="color: #fff;font-size: 28px;margin-right: 10px;"></i>
                    <a href="./eng_profile.php">Profile</a>
                </li>

                <li style="display: flex;align-items: center;"> <i class="fa-solid fa-id-card-clip"
                        style="color: #fff;font-size: 28px;margin-right: 10px;"></i>
                    <a href="./eng_add_socitey.php">add Socitey</a>
                </li>

                <li style="display: flex; align-items: center;"> <i class="fa-solid fa-id-card-clip"
                        style="color: #fff;font-size: 28px;margin-right: 10px;"></i>
                    <a href="#">Update Reports</a>
                </li>
            </ul>
        </div>
    </div>
    <!--main sidber end here-->
</div>
<!--main sidber-->
<!-- footer include  -->
<?php include '../main_inc.php/footer.php';?>