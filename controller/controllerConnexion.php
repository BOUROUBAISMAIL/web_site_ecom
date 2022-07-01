<?php

include "../dao/daoClient.php";
include "../dao/daoArtisan.php";



$action = $_GET['action'];



    switch($action)
    {
        case "ConnexionClient":
            {   
                $dao= new DaoClient();
                $email = $_POST['email'];
                $password = $_POST['password'];

                $client = $dao->findClient($email, $password);
                if ($client != null) {
                    session_start();
                    $_SESSION['client'] = $client;
                   
                    header('location: ../index.html');
                } else {
                    echo "Failed!";
                   // header('location: ../view/connexion.php');
                }
                break;

            }
        case 'ConnexionArtisan':
            {
                $dao= new DaoArtisan();
                $email = $_POST['email'];
                $password = $_POST['password'];

                $artisan = $dao->findArtisan($email, $password);
                if ($artisan != null) {
                    session_start();
                    $_SESSION['artisan'] = $artisan;
                   
                    header('location: ../index.html');
                } else {
                    echo "Failed!";
                    
                }
                break;
            }
        
    }

    










?>