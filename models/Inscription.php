<?php
namespace Rawane\Model;
    use Rawane\Core\Model;

    class Inscription extends Model
    {
        public function __construct ()
        {
            parent::$table = 'inscription';
        }
        //--Approche : Fonctions navigationnelles
        //--Relation :  Many To One avec AC
        public function ac () : AC
        {
            $sql = "SELECT P.* FROM inscription I , personne P
            WHERE P.id = I.ac_id 
            AND P.role LIKE 'ROLE_AC'
            AND I.id = ".$this->id;
            return new AC();
        }
        //--Approche : Fonctions navigationnelles
        //--Relation :  Many To One avec Année Scolaire
        public function AnneeScolaires () : AnneeScolaire
        {
            $sql = "SELECT A.* FROM annee_scolaire A , inscription I
            WHERE A.id = I.annee_id 
            AND I.id = ".$this->id;
            return new AnneeScolaires();
        }
    }