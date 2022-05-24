<?php
namespace Rawane\Model;
    use Rawane\Core\Model;

    class Classe extends Model
    {
        private int $id;
        private string $libelle;
        private string $filiere;
        private string $niveau;
        
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
        public function insert () : int
        {
            $db = parent::database ();
            $db->connexionDB ();
            $sql = "INSERT INTO " .parent::table(). " (`libelle`,`filiere`, `niveau`) VALUES ( ?, ?, ? ) ";
            $resultat = $db->executeUpdate ($sql, [$this->libelle, $this->filiere, $this->niveau]);
            $db->closeConnexion ();
            return $resultat;
        }
        public function update (int $id) : int
        {
            $db = self::database ();
            $db->connexionDB ();
            $sql = "UPDATE " .self::table(). " SET nom_complet = ?, grade = ? WHERE id = ?";
            $resultat = $db->executeUpdate ($sql, [$this->nomComplet, $this->grade, $id]);
            $db->closeConnexion ();
            return $resultat;
        }
    }