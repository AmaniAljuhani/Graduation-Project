<?php
include('../database.php');
unset($_SESSION['consult']);
$database=new Database();

if(isset($_GET['consult_id']))
{
    $consult_id = $_GET['consult_id'];
    $query = "SELECT * FROM `consultation` WHERE `consultation_id` = '$consult_id'";
    $consult = $database->Select($query);
    $_SESSION['consult'] = $consult;
    header('location:../../Doctor/reply.php?consult_id='.$consult_id);
}
else if(isset($_POST['addReply'])){
    $consult_id = $_POST['consult_id'];
    $reply = $_POST['reply'];
    $doctor_id = $_SESSION['doctor_id'];

    $query = "INSERT INTO `replies`(`reply`, `doctor_id`, `consultation_id`) 
                            VALUES ('$reply','$doctor_id','$consult_id')";
    $res = $database->Insert($query);

    $query = "UPDATE `consultation` SET `replied`='1' WHERE `consultation_id` = '$consult_id'";
    $res = $database->Update($query);
    $_SESSION['replyDone']="تم الرد على الاستشاره بنجاح";
    header('location:newConsultancy.php');
}
else
{
    $department = $_SESSION['department'];
    $query="SELECT c.*,b.name as bname FROM `consultation` as c , beneficiary as b where c.beneficiary_id = b.beneficiary_id AND c.department = '$department' and c.replied = 0";
    $consults = $database->Select($query);
    $_SESSION['consults']=$consults;
    header('location:../../Doctor/newConsultancy.php');
}
?>
