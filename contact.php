
<?php include "system_function.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>สาขาเทคโนโลยีมัลติมีเดีย | มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/muti.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
    body{
        font-family: 'Kanit', sans-serif;
    }    
</style>

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>
    <!-- Subscribe Modal -->
<div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">ลงชื่อเข้าสู่ระบบ</h5>
                        <form action="system_login.php" class="newsletterForm" method="post">
                            <input type="text" name="username" id="subscribesForm2" placeholder="ชื่อผู้ใช้">
                            <input type="password" name="password" id="subscribesForm2" placeholder="รหัสผ่าน">

                            <input type="submit" value="เข้าสู่ระบบ" type="" class="btn original-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                            <?php 
                              if($_SESSION["cookie"]=="logout"){
                                     } else {
                            ?>
                                <a href="back_logout.php">ออกจากระบบ</a>
                             <?php   
                                }
                            ?>

                            <?php 
                              if($_SESSION["cookie"]=="login"){
                                     } else {
                            ?><a href="font_login.php" >ลงชื่อเข้าใช้</a>
                               
                             <?php   
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                            <?php include "section_navbar.php"; ?>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                            <a href="https://www.youtube.com/channel/UCY4ByZjbwRZSnchLwCdbuvg/videos"><i class="fa fa-youtube-play" ></i> <span>Multimedia RMUTI</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>การติดต่อ</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-icon">
                            <i class="icon-id-card"></i>
                        </div>
                        <div class="course-content">
                            <h4>สังกัด</h4>
                            <p>คณะศิลปกรรมและออกแบบอุตสาหกรรม มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน </p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        <div class="course-content">
                            <h4>ที่อยู่</h4>
                            <p>อาคาร 3 มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน วิทยาเขตนครราชสีมา</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="course-icon">
                            <i class="fab fa-facebook-messenger" style="font-size:48px;color:white"></i>
                        </div>
                        <div class="course-content">
                            <h4>Facebook</h4>
                            <a href="https://www.messenger.com/t/multimedia.rmuti">Messenger</a>
                        </div>
                    </div>
                </div>
               
                <img src="img/vvvv.jpg" >
            </div>
        </div>
    </div>

            
    </section>
    <!-- ##### Features Area Start ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            
             
        </div>
        <div class="bottom-footer-area">
           
                
                    
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a>404</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                  
                
            
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>