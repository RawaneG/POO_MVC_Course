<?php
    class Inscription 
    {
        //--Approche : Fonctions navigationnelles
        //--Relation :  Many To One avec AC
        public function ac () : AC
        {
            return new AC();
        }
        //--Approche : Fonctions navigationnelles
        //--Relation :  Many To One avec Année Scolaire
        public function AnneeScolaires () : AnneeScolaire
        {
            return new AnneeScolaires();
        }
    }