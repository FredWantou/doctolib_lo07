<?php
require_once 'Model.php';
class Modelpersonne{
    public const ADMINISTRATEUR=0;
    public const PRATICIEN=1;
    public const PATIENT=2;
    
    private $id,$nom,$prenom,$adresse,$login,$password,$statut,$specialite_id;
    
    public function __construct($id=NULL,$nom=NULL,$prenom=NULL,$adresse=NULL,$login=NULL,$password=NULL,$statut=NULL,$specialite_id=NULL) {
        if(!is_null($id)){
            $this->id=$id;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->adresse=$adresse;
            $this->login=$login;
            $this->password=$password;
            $this->statut=$statut;
            $this->specialite_id=$specialite_id;
        }
    }
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function getSpecialite_id() {
        return $this->specialite_id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNom($nom): void {
        $this->nom = $nom;
    }

    public function setPrenom($prenom): void {
        $this->prenom = $prenom;
    }

    public function setAdresse($adresse): void {
        $this->adresse = $adresse;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setStatut($statut): void {
        $this->statut = $statut;
    }

    public function setSpecialite_id($specialite_id): void {
        $this->specialite_id = $specialite_id;
    }

    public static function getAllSpecialite(){
        try{
            //recuperation de la connexion
            $database= Model::getInstance();
            //preparation de la requete
            $requete="select * from specialite";
            $sth=$database->prepare($requete);
            //exécution de la requete
            $sth->execute();
            $results=$sth->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (Exception $ex) {
            echo ''.$ex->getMessage();
        }
    }
    
    //methode pour lister les praticiens avec leur specialite
    public static function getPraticien(){
        try{
            //recuperation de la connexion
            $database= Model::getInstance();
            //preparation de la requete
            $requete="select  from specialite";
            $sth=$database->prepare($requete);
            //exécution de la requete
            $sth->execute();
            $results=$sth->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (Exception $ex) {
            echo ''.$ex->getMessage();
        }
    }
}
