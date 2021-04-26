<?php include "system_function.php"; 


if ($_SESSION["cookie"]=="logout") {
    header("Location: font_login.php");
}
?>

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

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<style>
body{
        font-family: 'Kanit', sans-serif;
    }  

* {
  box-sizing:border-box;
}

body {
  margin: 0;

}

.container1 {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}





.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
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
            <h2>นักศึกษา</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>รายละเอียดข้อมูลนักศึกษา</span>
                        <h3>สาขาเทคโนโลยีมัลติมีเดีย</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Teachers -->
            
                


  <div class="column-66">

</div>


            </div>

             <!-- Clarity Section -->
<div class="container1" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="img/std/<?php echo studentSingle()[4]; ?>" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h2 class="xlarge-font"><b><?php echo studentSingle()[1]; ?></b></h2>
      <h5 class="large-font" style="color:red;"><b>รหัสนักศึกษา:  <?php echo studentSingle()[0]; ?></b></h5>
      <p>E-mail: <?php echo studentSingle()[2]; ?></p>
      <p>เบอร์โทรศัพท์: <?php echo studentSingle()[3]; ?></p>
      <p>ที่อยู่: <?php echo studentSingle()[5]; ?></p>
      <p>ความสามารถ: <?php echo studentSingle()[6]; ?></p>
      <a href="<?php echo studentSingle()[7]; ?>" class="btn btn-info" >ผลงาน</a>

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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