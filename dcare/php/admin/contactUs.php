<?php
include('../database.php');
unset($_SESSION['doctorsData']);
$database=new Database();




 if(isset($_GET['id'])){
	    $id = $_GET['id'];
		$query="DELETE from contactus where id=".$id;
		$res = $database->Delete($query);
		if($res){
			    $_SESSION['doctorsSuccess']="تم الحذف بنجاح";
			    header('location:contactus.php');
		}
}



$query="select * from contactus";
$contactus = $database->Select($query);
$_SESSION['contactus']=$contactus;
header('location:../../Admin/contactuUs.php');

?>
