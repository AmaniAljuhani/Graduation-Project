<?php
include('../database.php');
unset($_SESSION['doctorsData']);
$database=new Database();

if(isset($_GET['id']))
{
    $doctor_id = $_GET['id'];
    $query="update doctor set Active = 3 where doctor_id ='$doctor_id' ";
    $res = $database->Update($query);
    $_SESSION['doctorsSuccess']=" تم حظر الدكتور بنجاح الدكتور بنجاح ";
    header('location:oldDoctors.php');
}
else if(isset($_GET['idd']))
{
    $doctor_id = $_GET['idd'];
    $query="update doctor set Active = 1 where doctor_id ='$doctor_id' ";
    $res = $database->Update($query);
    $_SESSION['doctorsSuccess']=" تم إلغاء حظر الدكتور بنجاح  ";
    header('location:oldDoctors.php');
}
else
{
    $query="select * from doctor where Active in(1,3)";
    $doctors = $database->Select($query);
    $_SESSION['doctorsData']=$doctors;
    header('location:../../Admin/oldDoctors.php');
}
?>
