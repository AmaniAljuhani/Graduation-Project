<?php
include('../database.php');
if(isset($_POST['addDoctor'])){
    $database = new Database();

    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $hospital = $_POST['hospital'];
    $neighborhood = $_POST['neighborhood'];
    $department = $_POST['department'];
    $feedback = $_POST['feedback'];
    $error = true;
    if(!isset($_SESSION['beneficiary_id']))
    {
        $_SESSION['commentDone'] = "قم بتسجيل الدخول حتى تتمكن من ترشيح الطبيب";
        header('location:../../doctor.php');
    }else {
        if ($specialization == '0') {
            $_SESSION['errorDoctor'] = "يجب اختيار التخصص";
            $error = false;
        }
        if ($department == '0') {
            $_SESSION['errorDoctor'] = "يجب اختيار القسم";
            $error = false;
        }
        if ($error) {
            $query = "INSERT INTO `candidates`(`name`, `specialization`, `hospital`, `neighborhood`, `feedback`, `department`) 
                              VALUES ('$name','$specialization','$hospital','$neighborhood','$feedback','$department')";

            $res = $database->Insert($query);
            $_SESSION['addDone'] = "تم ترشيح الطبيب بنجاح";
            header('location:../../doctor.php');
        }
        else
        {
            header('location:../../doctor.php');
        }
    }
}