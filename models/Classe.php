<?php
    class Classe extends Model
    {
        //--Approche : Fonctions navigationnelles
        //--Relation :  Many To Many avec Professeur
        public function professeurs () : array
        {
            return [];
        }
    }