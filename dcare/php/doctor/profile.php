<?php
include('../database.php');
if(isset($_POST['editProfile'])){

    $database = new Database();
    $name=$_POST['name'];
    $specialization=$_POST['specialization'];
    $hospital=$_POST['hospital'];
    $neighborhood=$_POST['neighborhood'];
    $department=$_POST['department'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $address=$_POST['address']['location'];
    $password=$_POST['password'];
    $hashedPassword = '';
    $oldHashedPassword = $_SESSION['password'];
    $id = $_SESSION['doctor_id'];
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
		else if(strlen($name) >= 31){
			 $formErrors[] = "اسم المستخدم يجب ان يكون اقل من 30 حرف";
		}
        $hashedPassword = $password;
    }
    if(!preg_match('/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/', trim($phone_number))){
        $formErrors[]="رقم الهاتف يجب ان يكون اقل من 10 ارقام";
    }


    if(empty($formErrors)) {
        $query = "UPDATE `doctor` SET `name`='$name',`work_from`='$from',`work_to`='$to',`neighborhood`='$neighborhood',`specialization`='$specialization',`hospital`='$hospital',`department`='$department',`password`='$hashedPassword',`email`='$email',`address`='$address',`phone_number`='$phone_number' WHERE doctor_id = '$id'";
        $result = $database->Update($query);
	if($result){
		$_SESSION['name'] = $name;
        $_SESSION['neighborhood'] =$neighborhood;
        $_SESSION['specialization'] =$specialization; 
        $_SESSION['hospital'] =$hospital; 
        $_SESSION['from'] =$from;
        $_SESSION['to'] =$to;
        $_SESSION['department'] =$department;
        $_SESSION['password'] =$password; 
        $_SESSION['email'] =$email; 
        $_SESSION['address'] =$address; 
        $_SESSION['phone_number'] =$phone_number; 
        $_SESSION['success']="تم تحديث البيانات بنجاح";
        header('location:../../Doctor/profile.php');
	}

    }
    else
    {
        $_SESSION['formErrors']=$formErrors;
        header('location:../../Doctor/profile.php');
    }
}