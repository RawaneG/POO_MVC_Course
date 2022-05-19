<?php
namespace Rawane\Model;
    use Rawane\Core\Model;

    class Classe extends Model
    {
        private int $id;
        private string $libelle;
        private string $filiere;
        private string $niveau;
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

        public function getLibelle()
        {
            return $this->libelle;
        }

        public function setLibelle($libelle)
        {
            $this->libelle = $libelle;
            return $this;
        }

        public function getFiliere()
        {
            return $this->filiere;
        }

        public function setFiliere($filiere)
        {
            $this->filiere = $filiere;
            return $this;
        }

        public function getNiveau()
        {
            return $this->niveau;
        }

        public function setNiveau($niveau)
        {
            $this->niveau = $niveau;
            return $this;
        }
    }