<?php
include('database.php');
if(isset($_POST['Login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword=$password;

    $database = new Database();

    //check if user is admin
    $query = "select * from admin where name = '$username' AND Password = '$hashedPassword'";
    $admin = $database->Select($query);


    $query = "select * from doctor where name = '$username' AND Password = '$hashedPassword'";
    $doctor = $database->Select($query);


    $query = "select * from beneficiary where name = '$username' AND Password = '$hashedPassword'";
    $user = $database->Select($query);

    if(!empty($admin))
    {
        $_SESSION['admin_id']=$admin[0]['admin_id'];
        $_SESSION['email']=$admin[0]['email'];
        $_SESSION['password']=$admin[0]['password'];
        $_SESSION['name']=$admin[0]['name'];
        header('location:../Admin/Doctors.php');
    }
    else if(!empty($user)){
       
        $_SESSION['beneficiary_id'] = $user[0]['beneficiary_id'];
        $_SESSION['password'] = $user[0]['password'];
        $_SESSION['name'] = $user[0]['name'];
        $_SESSION['userName'] = $user[0]['userName'];
        $_SESSION['phone_number'] = $user[0]['phone_number'];
        $_SESSION['email'] = $user[0]['email'];
        $_SESSION['address'] = $user[0]['address'];

        header('location:../Beneficiary/profile.php');
        
    }
    else if(!empty($doctor)){
        if($doctor[0]['Active']==2)
        {
            header('location:../login.php?active=2');
        }
        else if($doctor[0]['Active']==0)
        {
            header('location:../login.php?active=1');
        }
        else if($doctor[0]['Active']==3)
        {
            header('location:../login.php?active=3');
        }else{
            $_SESSION['doctor_id'] = $doctor[0]['doctor_id'];
            $_SESSION['password'] = $doctor[0]['password'];
            $_SESSION['name'] = $doctor[0]['name'];
            $_SESSION['userName'] = $doctor[0]['userName'];
            $_SESSION['from'] = $doctor[0]['work_from'];
            $_SESSION['to'] = $doctor[0]['work_to'];
            $_SESSION['phone_number'] = $doctor[0]['phone_number'];
            $_SESSION['address'] = $doctor[0]['address'];
            $_SESSION['email'] = $doctor[0]['email'];
            $_SESSION['department'] = $doctor[0]['department'];
            $_SESSION['hospital'] = $doctor[0]['hospital'];
            $_SESSION['specialization'] = $doctor[0]['specialization'];
            $_SESSION['neighborhood'] = $doctor[0]['neighborhood'];
            header('location:../Doctor/profile.php');
        }

        
        
    }
    else
    {
        $_SESSION['loginFailed']="يرجى التحقق من اسم المستخدم و كلمة المرور";
        header('location:../login.php');
    }

}

?>