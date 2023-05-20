<?php
require_once '../model/ModelPersonne.php';


class ControllerAdministrateur{
    // --- page d'acceuil
    public static function AdministrateurAccueil() {
     include 'config.php';
     $vue = $root . '/app/view/viewAdministrateurAccueil.php';
     if (DEBUG)
      echo ("ControllerVin : caveAccueil : vue = $vue");
     require ($vue);
    }
    
    public static function specialiteReadAll(){
        $results= Modelpersonne::getAllSpecialite();
        //Construction du chemin de la vue
        include 'config.php';
        $vue=$root.'/app/view/administrateur/viewSpecialite.php';
        if (DEBUG)
         echo ("ControllerVin : vinReadAll : vue = $vue");
        require ($vue);
    }
    
    public static function insertSpecialite(){
        
    }
}

