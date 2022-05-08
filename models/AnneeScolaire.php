<?php
    class AnneeScolaire extends Model
    {
        
        //--Approche : Fonctions navigationelles
        //--Relation :  One to Many avec Inscriptions
        public function inscriptions () : array
        {
            return [];
        }
        //--Implémentation des fonctions de IModel
        public function insert () : int
        {
            return 0;
        }
        public function update () : int
        {
            return 0;
        }
        public function delete () : int
        {
            return 0;
        }
        public function findAll () : array
        {
            return [];
        }
        public function findById () : object | null
        {
            return null;
        }
        public function findBy (string $sql, array $data = null, $single = false) : object | null | array
        {
            return null;
        }
    }