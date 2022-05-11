<?php
namespace Rawane\Model;
    use Rawane\Core\Model;

    class Classe extends Model
    {
        private int $id;
        public function __construct ()
        {
            parent::$table = 'classe';
        }
        //--Approche : Fonctions navigationnelles
        //--Relation :  Many To Many avec Professeur
        public function professeurs () : array | null
        {
            $sql = "SELECT ...";
            return parent::findyBy($sql, [$this->id]);
        }
    }