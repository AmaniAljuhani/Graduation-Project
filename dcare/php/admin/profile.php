<?php
include('../database.php');
if(isset($_POST['editProfile'])){

    $database = new Database();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = '';
    $oldHashedPassword = $_SESSION['password'];
    $id = $_SESSION['admin_id'];
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
		else if(strlen($name) > 14){
			 $formErrors[] = "اسم المستخدم يجب ان يكون اقل من 14 حرف";
		}
        $hashedPassword = $password;
    }
    if(empty($formErrors)) {
        $query = "UPDATE `admin` SET `name`='$name',`password`='$hashedPassword',`email`='$email' WHERE admin_id='$id'";
        $result = $database->Update($query);

        $_SESSION['password'] =$password;
        $_SESSION['name'] =$name; 
        $_SESSION['email'] =$email; 
        $_SESSION['success']="تم تحديث البيانات بنجاح";
        header('location:../../admin/profile.php');
    }
    else
    {
        $_SESSION['formErrors']=$formErrors;
        header('location:../../admin/profile.php');
    }
}