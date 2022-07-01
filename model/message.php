<?php

class Message
{
   
        private $id, $nameEmetteur, $emailEmetteur, $telEmetteur,$message;
        
    
       
        public function __construct($id, $nameEmetteur, $emailEmetteur, $telEmetteur,$message)
        {
            $this->id = $id;
            $this->nameEmetteur = $nameEmetteur;
            $this->emailEmetteur = $emailEmetteur;
            $this->telEmetteur = $telEmetteur;
            $this->message = $message;
            

        }
    
     // getters
        public function getId()
        {
            return $this->id;
        }
    

        public function getNameEmetteur()
        {
            return $this->nameEmetteur;
        }


        public function getEmailEmetteur()
        {
            return $this->emailEmetteur;
        }


        public function getTelEmetteur()
        {
            return $this->telEmetteur;
        }
        
      
        public function getMessage()
        {
            return $this->message;
        }

      
        
       
    
        // setters
        
        public function setId(int $id)
        {
            $this->id = $id;
        }

        public function setNameEmetteur(string $nameEmetteur)
        {
            $this->nameEmetteur = $nameEmetteur;
        }
        public function setEmailEmetteur(string $emailEmetteur)
        {
            $this->emailEmetteur = $emailEmetteur;
        }
        public function setTelEmetteur(string $telEmetteur)
        {
            $this->telEmetteur = $telEmetteur;
        }

        public function setMessage(string $message)
        {
            $this->message = $message;
        }
        
      




}
    
?>