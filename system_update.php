<?php
include "system_function.php";

echo $Std_id = $_POST['Std_id'];
echo $Std_code = $_POST['Std_code'];
echo $Std_name = $_POST['Std_name'];
echo $Std_email = $_POST['Std_email'];
echo $Std_tel = $_POST['Std_tel'];
echo $Std_image = $_POST['Std_image'];
echo $Std_address = $_POST['Std_address'];  
echo $Std_ability = $_POST['Std_ability'];
echo $Std_port = $_POST['Std_port'];
echo header("Location: back_selectStudentData.php");

updateStudentData($Std_id,$Std_code,$Std_name,$Std_email,$Std_tel,$Std_image,$Std_address,$Std_ability,$Std_port);