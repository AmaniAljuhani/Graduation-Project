<?php

$dsn = 'mysql:host=localhost;dbname=dcare2';
$user = 'root';
$pass = '';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try{
    $GLOBALS['con'] = new PDO($dsn , $user , $pass , $option);
    $GLOBALS['con']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Failed to connect" . $e->getMessage();
}

?>