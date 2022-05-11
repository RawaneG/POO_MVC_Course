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
            $sql = "SELECT p.* FROM ".parent::table ()." i , personne p WHERE p.id = i.ac_id 
            AND p.role LIKE 'ROLE_AC' AND i.id = ? ";
            return parent::findBy($sql , [$this->id]);
        }
        //--Approche : Fonctions navigationnelles
        //--Relation :  Many To One avec Année Scolaire
        public function anneeScolaire () : AnneeScolaire
        {
            $sql = "SELECT a.* FROM annee_scolaire a , ".parent::table ()." i WHERE a.id = i.annee_id 
            AND i.id = ? ";
            return parent::findBy($sql , [$this->id]);
        }
    }