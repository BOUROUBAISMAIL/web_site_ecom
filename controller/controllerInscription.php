<?php

include "../dao/daoClient.php";
include "../dao/daoArtisan.php";

session_start();

$action = $_GET['action'];



    switch($action)
    {
        case "InscriptionClient":
            {   
                $dao= new DaoClient();
                $email = $_POST['email'];
                $prenom=$_POST['prenom'];
                $nom=$_POST['nom'];
                $tel=$_POST['tel'];
                $adresse=$_POST['adresse'];
                $ville=$_POST['ville'];
                $codePostal=$_POST['codePostal'];
                $password=$_POST['password'];

                if(isset($email,$prenom,$nom,$tel,$adresse,$ville,$codePostal,$password))
                {
                    $client= new Client($email,$prenom,$nom,$tel,$adresse,$ville,$codePostal,$password);
                    $dao->saveClient($client);
                    header('location:../index.html');
                }
                break;
            }
        case 'InscriptionArtisan':
            {
                $dao= new DaoArtisan();
                $email = $_POST['email'];
                $prenom=$_POST['prenom'];
                $nom=$_POST['nom'];
                $metier=$_POST['metier'];
                $tel=$_POST['tel'];
                $adresse=$_POST['adresse'];
                $ville=$_POST['ville'];
                $codePostal=$_POST['codePostal'];
                $password=$_POST['password'];

                if(isset($email,$prenom,$nom,$metier,$tel,$adresse,$ville,$codePostal,$password))
                {
                    $artisan= new Artisan($email,$prenom,$nom,$metier,$tel,$adresse,$ville,$codePostal,$password);
                    $dao->saveArtisan($artisan);
                    header('location: ../index.html');
                }
                break;
            }
        
    }

    










?>