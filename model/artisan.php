<?php

class Artisan
{


    private $email,$prenom,$nom,$metier,$tel,$adresse,$ville,$codePostal,$password;

    public function __construct($email,$prenom,$nom,$metier,$tel,$adresse,$ville,$codePostal,$password)
    {
        $this->email=$email;
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->metier= $metier;
        $this->tel=$tel;
        $this->adresse=$adresse;
        $this->ville=$ville;
        $this->codePostal=$codePostal;
        $this->password=$password;


    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getMetier()
    {
        return $this->metier;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getVille()
    {
        return $this->ville;
    }
    public function getCodePostal()
    {
        return $this->codePostal;
    }
    public function getPassword()
    {
        return $this->password;
    }


    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function setPrenom($prenom)
    {
        $this->prenom=$prenom;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }
    public function setMetier($metier)
    {
        $this->metier=$metier;
    }
    public function setTel($tel)
    {
        $this->tel=$tel;
    }
    public function setAdresse($adresse)
    {
        $this->adresse=$adresse;
    }

    public function setVille($ville)
    {
        $this->ville=$ville;
    }
    public function setCodePostal($codePostal)
    {
        $this->codePostal=$codePostal;
    }
    public function setPassword($password)
    {
        $this->password=$password;
    }

}
?>