<?php
include "system_function.php";

echo $Std_code = $_POST['Std_code'];
echo $Std_name = $_POST['Std_name'];
echo $Std_email = $_POST['Std_email'];
echo $Std_tel = $_POST['Std_tel'];
echo $Std_address = $_POST['Std_address'];
echo $Std_ability = $_POST['Std_ability'];
echo $Std_port = $_POST['Std_port'];

$Std_image = $_FILES['Std_image']['name'];
$file_size = $_FILES['Std_image']['size'];
$file_temp = $_FILES['Std_image']['tmp_name'];

insertStudentData($file_size, $file_temp, $Std_code,$Std_name,$Std_email,$Std_tel,$Std_image,$Std_address,$Std_ability,$Std_port);

