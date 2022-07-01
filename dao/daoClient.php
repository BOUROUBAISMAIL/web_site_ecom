<?php

include "../model/client.php";

class DaoClient
{
    private $dbh;

    public function __construct()
    {
        try{
            $this->dbh = new PDO('mysql:host=localhost;dbname=annonces',"root","");

        }catch(PDOException $e)
        {
            print "erreur !".$e->getMessage()."<br>";
            die();
        }
    }

    public function saveClient($client)
    {
        $stm=$this->dbh->prepare("INSERT INTO Client VALUES(?,?,?,?,?,?,?,?)");


        $stm->bindValue(1,$client->getEmail());
        $stm->bindValue(2,$client->getPrenom());
        $stm->bindValue(3,$client->getNom());
        $stm->bindValue(4,$client->getTel());
        $stm->bindValue(5,$client->getAdresse());
        $stm->bindValue(6,$client->getVille());
        $stm->bindValue(7,$client->getCodePostal());
        $stm->bindValue(8,$client->getPassword());

        $stm->execute();

    }

    

    public function findClient($email,$password)
    {
        $client=null;
        $stm= ($this->dbh)->prepare("SELECT * FROM Client WHERE email=?  AND password=?");

        $stm->bindValue(1,$email);
        $stm->bindValue(2,$password);
        $stm->execute();

        $res= $stm->fetch(PDO::FETCH_ASSOC);

        if (!empty($res))
        {
            
            $client = new Client($res['email'],$res['prenom'],$res['nom'],$res['tel'],$res['adresse'],$res['ville'],$res['codePostal'],$res['password']);
            
        }
        
        return $client;
    }


}




?>