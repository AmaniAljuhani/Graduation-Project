<?php
include('../database.php');
$database = new Database();
if(isset($_GET['department'])){
    $department = $_GET['department'];
    $query = "select * from doctor WHERE department ='$department' AND Active=1";
    $doctors = $database->Select($query);
    $_SESSION['doctors'] = $doctors;
    header('location:../../showDoctors.php?department='.$department);
}
else if(isset($_POST['filter'])){
    $department = $_POST['department'];
    $neighborhood = $_POST['neighborhood'];
    $hospital = $_POST['hospital'];
    $specialization = $_POST['specialization'];
    $assessing = $_POST['assessing'];
    $query = "select DISTINCT doctor.* ";

    if($assessing)
        $query.=",assessing.totalRate from doctor,assessing Where assessing.doctor_id=doctor.doctor_id and doctor.department = '$department' and assessing.totalRate = '$assessing'AND Active=1 ";
    else
        $query.=" from doctor where department = '$department' AND Active=1 ";
    if($neighborhood)
        $query.=" AND doctor.neighborhood like '%$neighborhood%'AND Active=1";
    if($hospital)
        $query.=" AND doctor.hospital like '%$hospital%'";
    if($specialization)
        $query.=" AND doctor.specialization = '$specialization'AND Active=1";

    $doctors = $database->Select($query);
    $_SESSION['doctors'] = $doctors;

    header('location:../../showDoctors.php?department='.$department);
}

