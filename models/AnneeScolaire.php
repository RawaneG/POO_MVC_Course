<?php
namespace Rawane\Model;
    use Rawane\Core\Model;

    class AnneeScolaire extends Model
    {
        //--Approche : Fonctions navigationelles
        //--Relation :  One to Many avec Inscriptions
        public function inscriptions () : array
        {
            return [];
        }
        //--Implémentation des fonctions de IModel
    }