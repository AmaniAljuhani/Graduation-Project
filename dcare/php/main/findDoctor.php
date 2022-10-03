<?php
include('../database.php');
$database = new Database();
if(isset($_POST['searchBtn'])){
    $search = $_POST['search'];

    $query= "select * from doctor where name LIKE '%$search%' AND Active=1";
    $doctors = $database->Select($query);
    $_SESSION['doctors'] = $doctors;
    header('location:../../showDoctors.php?doctor='.$search);
}