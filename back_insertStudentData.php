
<?php include "system_function.php"; 


if ($_SESSION["cookie"]=="logout") {
    header("Location: font_login.php");
}


$code_erorr = "*";
$name_erorr = "*";
$img_erorr = "*";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Std_code = $_POST['Std_code'];
    $Std_name = $_POST['Std_name'];
    $Std_email = $_POST['Std_email'];
    $Std_tel = $_POST['Std_tel'];
    $Std_address = $_POST['Std_address'];
    $Std_ability = $_POST['Std_ability'];
    $Std_port = $_POST['Std_port'];
    $Std_image = $_FILES['Std_image']['name'];
    $file_size = $_FILES['Std_image']['size'];
    $file_temp = $_FILES['Std_image']['tmp_name'];
   

   
       $permited  = array('jpg', 'jpeg', 'png', 'gif');
   
       $div = explode('.', $Std_image);
       $file_ext = strtolower(end($div));
       $uploaded_image = "img/std/" . $Std_image;
   
       if (empty($Std_code)) {
           $code_erorr  =  "กรุณากรอกรหัสนักศึกษา";
       }
       if (empty($Std_name)) {
           $name_erorr = "กรุณากรอกชื่อนักศึกษา";
       }
       if (empty($Std_image)) {
           $img_erorr = "กรุณาอัพโหลดภาพ";
       } elseif ($file_size > 5048567) {
           $img_erorr = "ไฟล์ภาพมีขนาดใหญ่เกิน 5 mb";
       } elseif (in_array($file_ext, $permited) === false) {
           $img_erorr = "อัพโหลดเฉพาะไฟล์นามสกุล jpg, png, gif เท่านั้น";
       } else {
          insertStudentData($uploaded_image,$file_temp,$Std_code,$Std_name,$Std_email,$Std_tel,$Std_image,$Std_address,$Std_ability,$Std_port);
       }
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
    
    

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.uu {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}




</style>

</head>

<body>
    <!-- ##### Preloader ##### -->
    <!-- <div id="preloader">
        <i class="circle-preloader"></i>
    </div> -->
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
                        <span>รายชื่อนักศึกษาชั้นปีที่ 3</span>
                        <h3>สาขาเทคโนโลยีมัลติมีเดีย</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                
            


            <div class= "uu">
           
  <form  method="post" enctype="multipart/form-data">
    <label for="fname">รหัสนักศึกษา:  <span style="color: red;"><?php echo "$code_erorr"?></span></label>
    <input type="text" id="fname" name="Std_code" >

    <label for="fname">ชื่อ-นามสกุล:  <span style="color: red;"><?php echo "$name_erorr"?></span></label>
    <input type="text" id="lname" name="Std_name">
    
    <label for="fname">อีเมล:</label>
    <input type="text" id="lname" name="Std_email" >

    <label for="fname">เบอร์โทรศัพท์:</label>                           
    <input type="text" id="lname" name="Std_tel" >


    <label class="form-label" for="customFile">รูปภาพ:  <span style="color: red;"><?php echo "$img_erorr"?></span></label>
    <input type="file" name="Std_image" class="form-control" id="customFile" />   
    <label for="fname">ที่อยู่:</label>
    <input type="text" id="lname" name="Std_address" >
    <label for="fname">ความสามารถ:</label>
    <input type="text" id="lname" name="Std_ability" >
    <label for="fname">ผลงาน:</label>
    <input type="text" id="lname" name="Std_port" >

    <input type="submit" value="บันทึก">
  </form>
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