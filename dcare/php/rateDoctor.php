<?php
include('database.php');
$database=new Database();

if(isset($_POST['addRate']))
{
    $doctor_id = $_POST['doctor_id'];
    if(!isset($_SESSION['beneficiary_id']))
    {
        header('location:../info.php?doctor_id=' . $doctor_id.'&islogin=1');
    }else {
        $comment = $_POST['comment'];
        $rating = $_POST['rating'];
        $beneficiary_id = $_SESSION['beneficiary_id'];
        if($rating == 0){
            $_SESSION['commentDone'] = "من فضلك قم بإختيار التقييم";
            header('location:../info.php?doctor_id=' . $doctor_id);
        }else {
            $totalRate = $database->Select("SELECT `totalRate` FROM `assessing` WHERE doctor_id = '$doctor_id' ORDER BY `assessing_id` DESC LIMIT 1");
            if($totalRate[0]['totalRate']==0)
                $totalRate = $rating;
            else
                $totalRate = ($totalRate[0]['totalRate'] + $rating) / 2;

            $query = "INSERT INTO `assessing`(`assessing`, `comment`, `doctor_id`, `beneficiary_id`, `totalRate`) 
                            VALUES ('$rating','$comment','$doctor_id','$beneficiary_id','$totalRate')";
            $rr = $database->Update("update doctor set totalRate = '$totalRate' WHERE doctor_id = '$doctor_id'");
            $res = $database->Insert($query);
            $_SESSION['commentDone'] = "تم اضافة تعليق وتقييم بنجاح";
           header('location:../info.php?doctor_id=' . $doctor_id);
        }
    }
}
