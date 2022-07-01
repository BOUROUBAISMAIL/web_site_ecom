<?php
include "../model/message.php";


class DaoMessage
{
    private $dbh;
    
 
    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=annonces',"root","");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function saveMessage(Message $message)
    {
        $stm = $this->dbh->prepare("INSERT INTO message (nameEmetteur,emailEmetteur,telEmetteur,message)  VALUES (?, ?, ?, ?)");

        

     	$stm->bindValue(1,$message->getNameEmetteur());
     	$stm->bindValue(2,$message->getEmailEmetteur());
        $stm->bindValue(3,$message->getTelEmetteur());
        $stm->bindValue(4,$message->getMessage());
        

     
    	$stm->execute();
      
    }

    public function findAll()
    {
    	$stm = $this->dbh->prepare("select * from Message");

    	$stm->execute();
    	$result = $stm->fetchAll();

    	return $result;
    }
}
?>
	