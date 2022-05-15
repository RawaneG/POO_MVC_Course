<?php
namespace Rawane\Model;

    class Etudiant extends User
    {
        private string $matricule;
        private string $sexe;
        private string $adresse;

        public function __construct()
        {
            parent::$role = 'ROLE_ETUDIANT';
        }

        public function getMatricule()
        {
            return $this->matricule;
        }

        public function setMatricule($matricule)
        {
            $this->matricule = $matricule;
            return $this;
        }

        public function getSexe()
        {
            return $this->sexe;
        }

        public function setSexe($sexe)
        {
            $this->sexe = $sexe;
            return $this;
        }

        public function getAdresse()
        {
            return $this->adresse;
        }

        public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
            return $this;
        }
        //--Redefinition de la méthode findAll
        public static function findAll () : array
        {
            $db = parent::database ();
            $db->connexionDB ();
            $sql = "SELECT * FROM " .parent::table(). " WHERE `role` LIKE 'ROLE_ETUDIANT'";
            $resultat = $db->executeSelect ($sql);
            $db->closeConnexion ();
            return $resultat;
        }
    }