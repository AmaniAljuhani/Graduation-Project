<?php
include('../database.php');
unset($_SESSION['consult']);
$database=new Database();

if(isset($_GET['consult_id']))
{
    $consult_id = $_GET['consult_id'];
    $query = "SELECT c.consultation , c.consultation_date , r.reply , r.reply_date FROM replies as r , consultation as c WHERE c.consultation_id = r.consultation_id AND c.`consultation_id` = '$consult_id'";
    $consult = $database->Select($query);
    $_SESSION['consult'] = $consult;
    header('location:../../Doctor/one_consulting.php?consult_id='.$consult_id);
}
else
{
    $doctor_id = $_SESSION['doctor_id'];
    $query="SELECT c.consultation_id , c.consultation , c.consultation_date , b.name , r.reply,r.reply_date FROM consultation as c , beneficiary as b , replies as r WHERE c.consultation_id = r.consultation_id AND c.beneficiary_id = b.beneficiary_id AND c.replied = 1 AND r.doctor_id ='$doctor_id'";
    $consults = $database->Select($query);
    $_SESSION['consults']=$consults;
    header('location:../../Doctor/consultingRecord.php');
}
?>
