<?php
namespace Rawane\Model;

    class RP extends User
    {
        public function __construct()
        {
            parent::$role = 'ROLE_RP';
        }
        //--Redefinition de la méthode findAll
        public static function findAll () : array
        {
            $db = parent::database ();
            $db->connexionDB ();
            $sql = "SELECT * FROM " .parent::table(). " WHERE `role` LIKE 'ROLE_RP'";
            $resultat = $db->executeSelect ($sql);
            $db->closeConnexion ();
            return $resultat;
        }
    }