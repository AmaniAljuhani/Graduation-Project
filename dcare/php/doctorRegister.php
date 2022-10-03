<?php
include('database.php');

if(isset($_POST['Register']))
{
    //get user data
    $name = $_POST['name'];
    $neighborhood = $_POST['neighborhood'];
    $specialization = $_POST['specialization'];
    $hospital = $_POST['hospital'];
    $department = $_POST['department'];
    $password = $_POST['password'];
    $hashedpassword = $password;
    $email = $_POST['email'];
    $address = $_POST['address']['location'];
    $phone_number = $_POST['phone_number'];
	$cert_file_folder = "../cert_files/";

    //object of database class
    $database=new Database();
    $duplicatedUser = $database->Select("select * from doctor where email = '$email'");
	$duplicatedEmailbeneficiary = $database->Select("select * from beneficiary where email = '$email'");
    $duplicatedNameDoctor = $database->Select("select * from doctor where name = '$name'");
    $duplicatedNamebeneficiary = $database->Select("select * from beneficiary where name = '$name'");
    $formErrors = array();
    if(!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/' , trim($email)))
    {
        $formErrors[]="البريد الالكترونى غير صحيح";
    }
    if($specialization == '0')
    {
        $formErrors[]="يجب اختيار التخصص";
    }
    if($department == '0')
    {
        $formErrors[]="يجب اختيار القسم";
    }

    if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/' , trim($password))) {
        $formErrors[] = "كلمة المرور يجب ان تحتوى على ارقام ورموز واحرف";
    }
	if(!empty($duplicatedUser)){
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
    if(!preg_match('/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/', trim($phone_number))){
        $formErrors[]="رقم الهاتف يجب أن يتكون من 10 أرقام";
    }
	if(!empty($duplicatedName))
    {
        $formErrors[]="الاسم مستخدم من قبل";
    }
	if(!empty($duplicatedEmailbeneficiary)){
		$formErrors[]="البريد الإلكترونى مستخدم من قبل";
	}
    if(empty($formErrors))
    {

$target_file = $cert_file_folder.uniqid()."_". basename(@$_FILES["cert_file"]["name"]);
echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "pdf") {
    echo '<center><div class="alert alert-danger" style="width:50%" role="alert">الصيغ المسموح بها فقط .pdf</div></center>';
    $uploadOk = 0;
}
else if ($uploadOk == 0) {
    echo '<center><div class="alert alert-danger" style="width:50%" role="alert">لم يتم رفع الملف توجد مشكلة ما</div></center>';
} else {
	 if (move_uploaded_file(@$_FILES["cert_file"]["tmp_name"], $target_file)) {
        $query="INSERT INTO `doctor`(`name`, `neighborhood`, `specialization`, `hospital`, `department`, `password`, `email`, `address`, `phone_number`,`cert_file`) 
                              VALUES ('$name','$neighborhood','$specialization','$hospital','$department','$hashedpassword','$email','$address','$phone_number','$target_file')";
        $result = $database->Insert($query);
        if($result)
        {
            $query="SELECT doctor_id from doctor ORDER BY doctor_id DESC LIMIT 1";
            $doctor_id = $database->Select($query);

            header('location:../login.php?active=5');
        }
	 }
    }

	}
			    else
    {
        $_SESSION['registerErrors']='errors';
        $_SESSION['formErrors']=$formErrors;
        header('location:../doctorRegister.php');
    }
}

?>