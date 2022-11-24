<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/snifty/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2022 11:10:15 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/fonts/flaticon.css">

    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <link rel="stylesheet" href="assets/css/modal-video.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/theme-dark.css">
    <title>Dlanding-Buying your house</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>


    <div class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-lg-6">
                    <div class="left">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="right">
                        <ul>
                            <li>
                                <a href="services.html">Services</a>
                            </li>
                            <li>
                                <a href="#">Solution Center</a>
                            </li>
                            <li>
                                <select>
                                    <option>English</option>
                                    <option>العربيّة</option>
                                    <option>Deutsch</option>
                                    <option>Português</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="nav-top-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-2 col-lg-2">
                    <div class="left">
                        <a href="index.php">
                            <img src="assets/images/logo-three.png" class="logo-one" alt="Logo">
                            <img src="assets/images/logo-four.png" class="logo-two" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-10">
                    <div class="right">
                        <ul>
                            <li>
                                <div class="inner">
                                    <i class='bx bx-mail-send'></i>
                                    <a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d6beb3babab996a5b8bfb0a2aff8b5b9bb"><span
                                            class="__cf_email__"
                                            data-cfemail="b6ded3dadad9f6c5d8dfd0c2cf98d5d9db">[ndat165@gmail.com]</span></a>
                                    <span>Drop us a line</span>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:+0123654987">0962096125</a>
                                    <span>Make a call</span>
                                </div>
                            </li>
                            <li>
                                <a class="common-btn" href="#">
                                    <i class='bx bxs-quote-left'></i>
                                    Get A Quote
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="assets/images/logo-two.png" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php?home=allhome" class="nav-link dropdown-toggle active">Các loại nhà
                                    <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    foreach ($allhome as $home) {
                                        extract($home);
                                        echo '
                                        <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">'.$tendanhmuc.'</a>
                                        </li>';
                                    }
                                    ?>
                                    <!-- <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Demo Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Demo Three</a>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="nav-item">
                                <?php
                                if(isset($_SESSION['user'])){
                                    extract($_SESSION['user']);
                                    ?>
                                <a href="#" class="nav-link dropdown-toggle">Pages <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle"><?= $hoten?> <i
                                                class='bx bx-chevron-down'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="index.php?home=login" class="nav-link">Thông tin tài khoản</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index.php?home=resign_tk" class="nav-link">Đổi mật khẩu</a>
                                            </li>
                                            <?php
                                            if($chucvu==2 or $chucvu ==3){
                                            ?>
                                            <li class="nav-item">
                                                <a href="admin/index.php" class="nav-link">Trang quản trị</a>
                                            </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?home=logout" class="nav-link">Đăng xuất</a>
                                    </li>
                                </ul>
                                <?php    
                                }else{
                                ?>
                                <a href="#" class="nav-link dropdown-toggle">Pages <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Users <i
                                                class='bx bx-chevron-down'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="index.php?home=login" class="nav-link">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index.php?home=resign_tk" class="nav-link">Register</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">Team</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <?php
                            }
                            ?>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Services <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Service Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Properties <i
                                        class='bx bx-chevron-down'></i></a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="properties.html" class="nav-link">Properties</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="property-right-sidebar.html" class="nav-link">Property Right
                                            Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="property-left-sidebar.html" class="nav-link">Property Left Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="property-details.html" class="nav-link">Property Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apartments.html" class="nav-link">Apartments</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Blog <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <?php
                        if(isset($_SESSION['user'])){
                            ?>
                            <div class="side-nav">
                            <a class="left" href="index.php?home=account">
                                <i class='bx bxs-user'></i>
                                <?=$hoten?>
                            </a>
                            <a class="left two" href="properties.html">
                                <i class='bx bx-chevron-right-circle'></i>
                                New Properties
                            </a>
                        </div>
                         <?php   
                        }else{
                            ?>
                            <div class="side-nav">
                            <a class="left" href="index.php?home=login">
                                <i class='bx bxs-user'></i>
                                Account
                            </a>
                            <a class="left two" href="properties.html">
                                <i class='bx bx-chevron-right-circle'></i>
                                New Properties
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>