<?php
include('../database.php');
if(isset($_POST['editProfile'])){

    $database = new Database();
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = '';
    $oldHashedPassword = $_SESSION['password'];
    $id = $_SESSION['beneficiary_id'];
    $formErrors = array();
    if(empty($password))
        $hashedPassword = $oldHashedPassword;
    else {
        if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/', trim($password))) {
            $formErrors[] = "كلمة السر يجب ان تحتوى على ارقام ورموز واحرف";
        }
		else if($name == null || $name == ""){
			 $formErrors[] = "اسم المستخدم يجب ان لا يكون فارغ !";
		}
		else if(strlen($name) > 15){
			 $formErrors[] = "اسم المستخدم يجب ان يكون اقل من 14 حرف";
		}
        $hashedPassword = $password;
    }


    if(empty($formErrors)) {
        $query = "UPDATE `beneficiary` SET `name`='$name',`password`='$hashedPassword',`email`='$email',`address`='$address',`phone_number`='$phone_number' WHERE beneficiary_id='$id'";
        $result = $database->Update($query);

        $_SESSION['password'] =$password;
        $_SESSION['name'] =$name; 
        $_SESSION['userName'] =$userName;
        $_SESSION['phone_number'] =$phone_number;
        $_SESSION['email'] =$email; 
        $_SESSION['address'] =$address; 
        $_SESSION['success']="تم تحديث البيانات بنجاح";
        header('location:../../Beneficiary/profile.php');
    }
    else
    {
        $_SESSION['formErrors']=$formErrors;
        header('location:../../Beneficiary/profile.php');
    }
}