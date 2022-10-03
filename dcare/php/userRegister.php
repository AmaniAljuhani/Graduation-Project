<?php
include('database.php');

if(isset($_POST['Register']))
{
    //get user data
    $name = $_POST['name'];
    $password = $_POST['password'];
    $hashedpassword = $password;
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    //object of database class
    $database=new Database();
    $duplicatedUser = $database->Select("select * from beneficiary where email = '$email'");
	$duplicatedEmailDoctor = $database->Select("select * from doctor where email = '$email'");
    $duplicatedNameDoctor = $database->Select("select * from doctor where name = '$name'");
    $duplicatedNamebeneficiary = $database->Select("select * from beneficiary where name = '$name'");


    $formErrors = array();
    if(!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/' , trim($email)))
    {
        $formErrors[]="البريد الالكترونى غير صحيح";
    }

    if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/' , trim($password))) {
        $formErrors[] = "كلمة المرور يجب ان تحتوى على ارقام ورموز واحرف";
    }
    if(!empty($duplicatedUser))
    {
        $formErrors[]="البريد الإلكترونى مستخدم من قبل";
    }
    if(!empty($duplicatedNameDoctor))
    {
        $formErrors[]="الاسم مستخدم من قبل";
    }
	if(!empty($duplicatedNamebeneficiary))
    {
        $formErrors[]="الاسم مستخدم من قبل";
    }
	if(!empty($duplicatedEmailDoctor))
    {
        $formErrors[]="البريد الإلكترونى مستخدم من قبل";
    }
    if(!preg_match('/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/', trim($phone_number))){
        $formErrors[]="رقم الهاتف يجب أن يتكون من 10 أرقام";
    }
    if(empty($formErrors))
    {
        $query="INSERT INTO `beneficiary`(`name`, `password`, `email`, `phone_number`, `address`) 
                            VALUES ('$name','$hashedpassword','$email',$phone_number,'$address')";
        $result = $database->Insert($query);
        if($result)
        {
            $query="SELECT beneficiary_id from beneficiary ORDER BY beneficiary_id DESC LIMIT 1";
            $user_id = $database->Select($query);

            header('location:../login.php?active=4');
        }
    }
    else
    {
        $_SESSION['registerErrors']='errors';
        $_SESSION['formErrors']=$formErrors;
        header('location:../userRegister.php');
    }

}

?>