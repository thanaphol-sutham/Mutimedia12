
<ul>
<li><a href="index.php">หน้าแรก</a> </li>
<li><a href="about-us.php">นักศึกษาชั้นปีที่ 3</a> </li>
<li><a href="contact.php">ติดต่อ</a> </li>

<?php 
    if($_SESSION["cookie"]=="logout"){

    } else {
?>    


<div class="dropdown">
  <li><a href="#">บัญชี</a></li>
  <div class="dropdown-content">
  <a href="back_selectStudentData.php">จัดการข้อมูลนักศึกษา</a>
  <a href="back_insertStudentData.php">เพิ่มข้อมูลนักศึกษา</a>
  </div>
</div>

<?php   
    }
?>
</ul>