<?php
include('../database.php');
$database = new Database();
if(isset($_GET['department'])){
    $department = $_GET['department'];
    $query = "select * from consultation WHERE department ='$department'AND replied = 1 ";
    $consultants = $database->Select($query);
    $_SESSION['consultants'] = $consultants;
    header('location:../../consulting.php?department='.$department);
}
else if(isset($_GET['consult_id']))
{
    $consult_id = $_GET['consult_id'];
    $query = "SELECT c.*,r.*,b.name as bname,b.email,b.phone_number,doctor.name as dname FROM beneficiary as b, consultation as c LEFT JOIN replies as r ON c.consultation_id = r.consultation_id 
              LEFT JOIN doctor ON r.doctor_id = doctor.doctor_id
              WHERE b.beneficiary_id = c.beneficiary_id and c.consultation_id = '$consult_id'";
    $consult = $database->Select($query);
    $_SESSION['consult'] = $consult;
    header('location:../../reply.php?consult_id='.$consult_id);
}
if(isset($_POST['uploadConsult'])){

    $consultation = $_POST['consultation'];
    $department = $_POST['department'];
    $beneficiary_id=$_SESSION['beneficiary_id'];
    if(!isset($_SESSION['beneficiary_id']))
    {
        $_SESSION['commentDone'] = "قم بتسجيل الدخول حتى تتمكن من رفع الإستشارة";
        header('location:../../consultation.php?department=' . $department);
    }else {
        $query = "INSERT INTO `consultation`(`consultation`,  `beneficiary_id`, `department`) 
                                VALUES ('$consultation','$beneficiary_id','$department')";
        $res = $database->Insert($query);
        $_SESSION['uploadDone'] = "تم رفع الاستشارة بنجاح";
        header('location:../../consultation.php?department=' . $department);
    }
}
