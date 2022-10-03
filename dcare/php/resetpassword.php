<?php
include('database.php');
$database = new  Database();
if(isset($_POST['Reset'])){
    $email = $_POST['email'];
    $newPassword = $_POST['newPassword'];
    $type = $_POST['type'];

    $user = $database->Select("select * from ".$type." where email = '$email' ");
    if($user){
        //$update = $database->Update("update ".$type." set `password` = '$newPassword' where email = '$email'");
        header('location:../login.php?reset=1');
    }else
    {
        $_SESSION['loginFailed']="  البريد الإلكترونى غير صحيح";
        header('location:../login.php');
    }
}