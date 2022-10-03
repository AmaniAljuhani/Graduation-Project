<?php
include('../database.php');
unset($_SESSION['doctorsData']);
$database=new Database();

if(isset($_GET['id']))
{
    $doctor_id = $_GET['id'];
    $query="update doctor set Active = 1 where doctor_id ='$doctor_id' ";
    $res = $database->Update($query);
    $_SESSION['doctorsSuccess']=" تم قبول الدكتور بنجاح ";
    header('location:doctors.php');
}
else if(isset($_GET['idd']))
{
    $doctor_id = $_GET['idd'];
    $query="update doctor set Active = 2 where doctor_id ='$doctor_id' ";
    $res = $database->Update($query);
    $_SESSION['doctorsSuccess']=" تم رفض الدكتور بنجاح ";
    header('location:doctors.php');
}
else
{
    $query="select * from doctor where Active = 0";
    $doctors = $database->Select($query);
    $_SESSION['doctorsData']=$doctors;
    header('location:../../Admin/Doctors.php');
}
?>
