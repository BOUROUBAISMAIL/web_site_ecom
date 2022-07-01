<?php

include "../model/artisan.php";

class DaoArtisan
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

    public function saveArtisan(Artisan $artisan)
    {
        $stm=$this->dbh->prepare("INSERT INTO Artisan VALUES(?,?,?,?,?,?,?,?,?)");


        $stm->bindValue(1,$artisan->getEmail());
        $stm->bindValue(2,$artisan->getPrenom());
        $stm->bindValue(3,$artisan->getNom());
        $stm->bindValue(4,$artisan->getMetier());
        $stm->bindValue(5,$artisan->getTel());
        $stm->bindValue(6,$artisan->getAdresse());
        $stm->bindValue(7,$artisan->getVille());
        $stm->bindValue(8,$artisan->getCodePostal());
        $stm->bindValue(9,$artisan->getPassword());

        $stm->execute();

    }

    public function findArtisan($email,$password)
    {
        $artisan=null;
        $stm= ($this->dbh)->prepare("SELECT * FROM Artisan WHERE email=?  AND password=?");

        $stm->bindValue(1,$email);
        $stm->bindValue(2,$password);
        $stm->execute();

        $res= $stm->fetch(PDO::FETCH_ASSOC);

        if (!empty($res))
        {
            
            $artisan = new Artisan($res['email'],$res['prenom'],$res['nom'],$res['metier'],$res['tel'],$res['adresse'],$res['ville'],$res['codePostal'],$res['password']);
            
        }
        
        return $artisan;
    }


}




?>