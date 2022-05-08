<?php
    class Professeur extends Personne
    {
        public function __construct()
        {
            $this->role = 'ROLE_PROFESSEUR';
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

    }