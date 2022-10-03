<?php
session_start();
include('connection.php');
class Database
{

    public function Insert($query)
    {
        $sql = $GLOBALS['con']->prepare($query);
        try {
            $sql->execute();
        } catch (PDOExeption $e) {
            echo $e->getMessage();
        }
        return true;
    }
    public function Select($query)
    {
        $sql = $GLOBALS['con']->prepare($query);
        try {
            $sql->execute();
            $data = $sql->fetchAll();
            return $data;
        } catch (PDOExeption $e) {
            echo $e->getMessage();
        }
    }
    public function Update($query)
    {
        $sql = $GLOBALS['con']->prepare($query);
        try {
            $sql->execute();
        } catch (PDOExeption $e) {
            echo $e->getMessage();
        }
        return true;
    }
    public function Delete($query)
    {
        $sql = $GLOBALS['con']->prepare($query);
        try {
            $sql->execute();
        } catch (PDOExeption $e) {
            echo $e->getMessage();
        }
        return true;
    }
}