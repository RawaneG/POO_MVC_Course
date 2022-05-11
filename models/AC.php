<?php
namespace Rawane\Model;
    class AC extends User
    {
        //--1ère approche
        //--Attributs navigationnels : attributs d'instances issues de relations
            //--Relation One To Many avec Inscription
            private array $inscriptions;
            public function __construct()
            {
                parent::$role = 'ROLE_AC';
                $this->inscriptions = [];
            }
        //--2ème approche
        //--Fonctions navigationnelles : fonctions issues de relations
            //--Relation One To Many avec Inscription
            public function inscriptions () : array
            {
                return [];
            }
        //--Redefinition de la méthode findAll
        public static function findAll () : array
        {
            $sql = "SELECT * FROM " .parent::table(). " WHERE role LIKE ROLE_AC";
            echo $sql;
            return [];
        }
    }