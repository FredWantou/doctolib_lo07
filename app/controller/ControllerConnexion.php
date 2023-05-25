<?php
require_once '../model/ModelPersonne.php';


class ControllerConnexion{
    // --- page d'acceuil
    public static function Acceuil() {
     include 'config.php';
     $vue = $root . '/app/view/fragment/fragmentMenuIndex.php';
     if (DEBUG)
      echo ("Controller : Accueil : vue = $vue");
     require ($vue);
    }

    public static function Login() {
        include 'config.php';
        $vue = $root . '/app/view/connexion/viewLogin.php';
        if (DEBUG)
         echo ("Controller : Accueil : vue = $vue");
        require ($vue);
       }
    
    
    
    public static function insertSpecialite(){
        
    }
}