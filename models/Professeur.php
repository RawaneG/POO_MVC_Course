<?php
namespace Rawane\Model;

    class Professeur extends Personne
    {
        public function __construct()
        {
            parent::$role = 'ROLE_PROFESSEUR';
        }
        //--Approche : Fonctions navigationnelles
        //--Relation :  Many To Many avec Classe
        public function classes () : array
        {
            return [];
        }
        //--Dans la table Professeur je dois être capable de faire : 
            //--INSERT
            //--UPDATE
            //--DELETE
            //--SELECT ALL (Exemple : SELECT * FROM Professeur)
            //--SELECT BY ID (Exemple : SELECT * FROM Professeur WHERE ID = 1)
        //--Redefinition de la méthode findAll
        public static function findAll () : array
        {
            $sql = "SELECT * FROM " .parent::table(). " WHERE role LIKE ROLE_PROFESSEUR";
            echo $sql;
            return [];
        }
    }