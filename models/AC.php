<?php
    class AC extends User
    {
        //--1ère approche
        //--Attributs navigationnels : attributs d'instances issues de relations
            //--Relation One To Many avec Inscription
            private array $inscriptions;
            public function __construct()
            {
                self::$role = 'ROLE_AC';
                $this->inscriptions = [];
            }
        //--2ème approche
        //--Fonctions navigationnelles : fonctions issues de relations
            //--Relation One To Many avec Inscription
            public function inscriptions () : array
            {
                return [];
            }
    }