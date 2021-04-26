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
<style>
    body{
        font-family: 'Kanit', sans-serif;
    }   

.vl {
  border-left: 100px solid red;
  height: 6px;
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">คณะศิลปกรรมและออกแบบอุตสาหกรรม</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</h2>
                                <div class="vl" data-animation="fadeInUp" data-delay="700ms"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">สาขาวิชา</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">เทคโนโลยีมัลติมีเดีย</h2>
                                <div class="vl" data-animation="fadeInUp" data-delay="700ms"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    
    <!-- ##### Top Feature Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>แนะนำหลักสูตรการสอน</h3>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>หลักสูตรการเรียนด้านภาพนิ่งและภาพเคลื่อนไหว</h5>
                            
                            <div class="course-ratings">
                                
                            </div>
                            <p>มุ่งเน้นการเรียนการสอนในสายงานด้านภาพนิ่งและภาพเคลื่อนไหว ทั้งการถ่ายภาพนิ่งจนไปถึงการถ่ายทำสื่อภาพยนต์</p>
                            <div class="vl" ></div>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-1.jpg);"></div>
                    </div>
                </div>
                
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                        <h5>หลักสูตรการเรียนด้านสื่อภาพเสมือนจริง</h5>
                            
                            <div class="course-ratings">
                                
                            </div>
                            <p>มุ่งเน้นการเรียนการสอนในสายงานสร้างสื่อภาพเสมือนจริง ทั้ง VR, AR และ Visual effects</p>
                            <div class="vl" ></div>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-2.jpg);"></div>
                    </div>
                </div>
                
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                        <h5>หลักสูตรการเรียนด้านสื่อปฏิสัมพันธ์</h5>
                            
                            <div class="course-ratings">
                                
                            </div>
                            <p>มุ่งเน้นการเรียนการสอนในสายงานการสร้างสื่อปฏิสัมพันธ์ ทั้งเว็บไซต์ แอปพลิเคชัน และเกม</p>
                            <div class="vl" ></div>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-3.jpg);"></div>
                    </div>
                </div>
                
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="popular-course-content">
                    <h5>หลักสูตรการเรียนด้านอนิเมชันสามมิติ</h5>
                            
                            <div class="course-ratings">
                                
                            </div>
                            <p>มุ่งเน้นการเรียนการสอนในสายงานการสร้างอนิเมชันสามมิติ โดยเริ่มตั้งแต่ขั้นพื้นฐาน จนไปถึงขั้นสูง</p>
                            <div class="vl" ></div>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-4.jpg);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Partner Area Start ##### -->
    <div class="partner-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                        <a href="#"><img src="img/clients-img/partner-1.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/partner-2.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/partner-3.png" alt=""></a>
                        
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Partner Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->

                    <!-- Footer Widget Area -->
       
                    <!-- Footer Widget Area -->
     
                    <!-- Footer Widget Area -->
                   
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a>404</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
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