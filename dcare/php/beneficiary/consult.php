<?php
include('../database.php');
unset($_SESSION['consult']);
$database=new Database();

if(isset($_GET['consult_id']))
{
    $consult_id = $_GET['consult_id'];
    $query = "SELECT c.*,r.*,b.name as bname,b.email,b.phone_number,doctor.name as dname FROM beneficiary as b, consultation as c LEFT JOIN replies as r ON c.consultation_id = r.consultation_id 
              LEFT JOIN doctor ON r.doctor_id = doctor.doctor_id
              WHERE b.beneficiary_id = c.beneficiary_id and c.consultation_id = '$consult_id' ";
    $consult = $database->Select($query);
    $_SESSION['consult'] = $consult;
    header('location:../../Beneficiary/one_consulting.php?consult_id='.$consult_id);
}
else
{
    $beneficiary_id = $_SESSION['beneficiary_id'];
    $query="select * from consultation where beneficiary_id = '$beneficiary_id'";
    $consult = $database->Select($query);
    $_SESSION['consult']=$consult;
    header('location:../../Beneficiary/consulting.php');
}
?>
