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
        //--Redefinition de la méthode insert
        public function insert () : int
        {
            $db = parent::database ();
            $db->connexionDB ();
            $sql = "INSERT INTO " .parent::table(). " (`nom_complet`,`role`, `login`, `password` ) VALUES ( ?, ?, ?, ?)";
            $resultat = $db->executeUpdate ($sql, [$this->nomComplet, parent::$role, $this->login, $this->mdp]);
            $db->closeConnexion ();
            return $resultat;
        }
    }