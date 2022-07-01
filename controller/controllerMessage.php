<?php
include "../dao/daoMessage.php";


session_start();
$action=$_GET['action'];
$dao = new DaoMessage();
 
switch($action){
    case 'insert':
    $nameEmetteur = $_POST['nameEmetteur'];
    $emailEmetteur=$_POST['emailEmetteur'];
    $telEmetteur=$_POST['telEmetteur'];
    $message=$_POST['message'];

    if(isset($nameEmetteur,$emailEmetteur,$telEmetteur,$message)){
       

    $message = new Message(0,$nameEmetteur,$emailEmetteur,$telEmetteur,$message);
    $dao->saveMessage($message);
   
    header('location: ../index.html');
    }
    break;
 	
}
?>