<?php
include('database.php');
if(isset($_POST['contactUS'])){
    $name =$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $database = new Database();
    $query = "INSERT INTO `contactus`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
    $result = $database->Insert($query);

    $_SESSION['messageSent'] = 'تم إرسال رسالتك بنجاح شكرا لك';
    header('location:../contact.php');
}