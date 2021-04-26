<?php
session_start();
if(empty($_SESSION['cookie'])){
    $_SESSION['cookie']="logout";
}



function studentGruop(){

    include "system_connect.php";
    $sql = "SELECT * FROM student";
    $result = $conn ->query($sql);
    while ($row = $result->fetch_assoc()){
     echo 

    "<div class='col-12 col-sm-6 col-lg-3'>".
    "<div class='single-teachers-area text-center mb-100 wow fadeInUp' data-wow-delay='600ms'>".
        "<div class='teachers-thumbnail'>".
        "<a href='front_studentSingle.php?code=" . $row["Std_code"] . "'>" . "<img src='img/std/".$row["Std_image"]."'alt='' >"."</a>".
        "</div>".
        "<div class='teachers-info mt-30'>".
            "<a href='front_studentSingle.php?code=" . $row["Std_code"] . "'>"."<h5>".$row["Std_name"]."</h5>"."</a>".
           
        "</div>".
    "</div>".
"</div>";

    }
}

function studentSingle()
{
    include "system_connect.php";
    $code = $_GET['code'];
    $sql = "SELECT * FROM student WHERE Std_code = '$code'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $student = [$row["Std_code"], $row["Std_name"], $row["Std_email"], $row["Std_tel"], $row["Std_image"], $row["Std_address"], $row["Std_ability"], $row["Std_port"]];
        return $student;
    }
}

// 3. เข้าสู่ระบบ
function checkLogin($username_data, $password_data)
{
    include "system_connect.php";
    $sql = "SELECT * FROM user WHERE User_username = '$username_data' AND User_password = '$password_data'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION["cookie"] = "login"; 
        echo header("Location: index.php");
    } else {
        echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
}
//-----------------------------------------------------------------------------------------------------------

// 4. เพิ่มข้อมูลนักศึกษา
function insertStudentData($uploaded_image, $file_temp, $Std_code, $Std_name, $Std_email, $Std_tel, $Std_image, $Std_address, $Std_ability, $Std_port)
{
    
    
    include "system_connect.php";

        move_uploaded_file($file_temp, $uploaded_image);

        $sql = "INSERT INTO student (Std_code, Std_name, Std_email, Std_tel, Std_image, Std_address,Std_ability,Std_port)
        VALUES ('$Std_code', '$Std_name', '$Std_email', '$Std_tel', '$Std_image','$Std_address','$Std_ability','$Std_port')";
        $result = $conn->query($sql);
        header("Location: back_selectStudentData.php");


    
}

// 5. แก้ไขข้อมูลนักศึกษา
function updateStudentData($uploaded_image,$file_temp, $Std_id, $Std_code, $Std_name, $Std_email, $Std_tel, $Std_image, $Std_address, $Std_ability, $Std_port)
{
    include "system_connect.php";
    $src_upimg = "img/std/";
    
    
    move_uploaded_file($file_temp, $uploaded_image );
    
    $query1 = "SELECT * FROM student WHERE Std_id = '$Std_id'";
    $getData1 = mysqli_query($conn,  $query1);
    if ($getData1) {
        while ($delimg1  = $getData1->fetch_assoc()) {
            $scr_img1 = "img/std/";
            $dellink1 = $scr_img1.$delimg1['Std_image'];
            unlink($dellink1);
        }
    }
    $sql = "UPDATE student SET Std_code = '$Std_code', Std_name = '$Std_name'
    , Std_email = '$Std_email', Std_tel = '$Std_tel', Std_image = '$Std_image' , Std_address='$Std_address',Std_ability='$Std_ability',Std_port='$Std_port'
    WHERE Std_id = '$Std_id';";
    $result = $conn->query($sql);
    
}

// 6. ลบข้อมูลนักศึกษา
function deleteStudentData($Std_id)
{

    include "system_connect.php";
    
    $query = "SELECT * FROM student WHERE Std_id = '$Std_id'";
    $getData = mysqli_query($conn,  $query);
    if ($getData) {
        while ($delimg  = $getData->fetch_assoc()) {
            $scr_img = "img/std/";
            $dellink = $scr_img.$delimg['Std_image'];
            unlink($dellink);
        }
    }

    $sql = "DELETE FROM student WHERE Std_id = '$Std_id';";

    $result = mysqli_query($conn,  $sql);
    if ($result) {
        header("Location: back_selectStudentData.php?");
    }
    
    
    
}
// 7. ออกจากระบบ
function  checkLogout(){
    $_SESSION["cookie"] = "logout"; 
        echo header("Location: index.php");
}

//-----------------------------------------------------------------------------------------------------------
// 8. แสดงตารางข้อมูลนักศึกษา(ทั้งหมด)
function tableStudentGruop()
{
    include "system_connect.php";
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);

    



    echo "<table class='w3-table w3-striped'>";
    echo "<tr>";
    echo "<th>รหัสนักศึกษา</th>";
    echo "<th>ชื่อ - สกุล</th>";
    echo "<th>อีเมล</th>";
    echo "<th>เบอร์โทรศัพท์</th>";
    echo "<th>ที่อยู่</th>";
    echo "<th>ความสามารถ</th>";
    echo "<th>แก้ไขข้อมูล</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>" .
            "<td>" . $row["Std_code"] . "</td>" .
            "<td>" . $row["Std_name"] . "</td>" .
            "<td>" . $row["Std_email"] . "</td>" .
            "<td>" . $row["Std_tel"] . "</td>" .
            "<td>" . $row["Std_address"] . "</td>" .
            "<td>" . $row["Std_ability"] . "</td>" .
            "<td> <a href='back_updateStudentData.php?id=" . $row["Std_id"] . "'> แก้ไข</a></td>" .
            "<td> <a href='back_deleteStudentData.php?id=" . $row["Std_id"] . "'>"."<font color='red'>". "ลบ"."</a>"."</td>" .
      
            "</tr>";
    }
    echo "</table>";
}

// 9. แสดงตารางข้อมูลนักศึกษา(คนเดียว)
function editStudentGruop($id)
{
    include "system_connect.php";
    $sql = "SELECT * FROM student WHERE Std_id = '$id'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $student = [$row["Std_code"], $row["Std_name"], $row["Std_email"], $row["Std_tel"], $row["Std_image"], $row["Std_address"],$row["Std_ability"], $row["Std_port"]]; 
        return $student;
    }
}

function studentport($id){
    include "system_connect.php";
    $sql = "SELECT * FROM student WHERE Std_id = '$id'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo $row["Std_port"];
    }
}