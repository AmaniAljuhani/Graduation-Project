<?php
include('../database.php');
unset($_SESSION['doctorsData']);
$database=new Database();

if(isset($_GET['id']))
{
    $candidate_id = $_GET['id'];
    $query="update candidates set promotion = 1 where candidate_id ='$candidate_id' ";
    $res = $database->Update($query);

    $candidateData=$database->Select("SELECT * FROM `candidates` where candidate_id = '$candidate_id'");
    $name = $candidateData[0]['name'];
    $neighborhood = $candidateData[0]['neighborhood'];
    $specialization = $candidateData[0]['specialization'];
    $hospital = $candidateData[0]['hospital'];
    $department = $candidateData[0]['department'];
    $password = '123';
    $email = 'recommendation'.$candidate_id.'@email.com';

    $query="INSERT INTO `doctor`(`name`, `neighborhood`, `specialization`, `hospital`, `department`, `password`, `email`,`Active`) 
                              VALUES ('$name','$neighborhood','$specialization','$hospital','$department','$password','$email','1')";
    $result = $database->Insert($query);

    $_SESSION['doctorsSuccess']="تم اضافة الدكتور بنجاح";
    header('location:Recommendations.php');
}
else if(isset($_GET['did'])){
	    $candidate_id = $_GET['did'];
		$query="DELETE from candidates where candidate_id=".$candidate_id;
		$res = $database->Delete($query);
		if($res){
			    $_SESSION['doctorsSuccess']="تم الحذف بنجاح";
			    header('location:Recommendations.php');
		}
}
else
{
    $query="SELECT * FROM `candidates` where promotion = 0";
    $candidates = $database->Select($query);
    $_SESSION['candidates']=$candidates;
    header('location:../../Admin/Recommendations.php');
}
?>
