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
        public function insert () : int
        {
            $db = parent::database ();
            $db->connexionDB ();
            $sql = "INSERT INTO " .parent::table(). " (`nom_complet`,`adresse`,`sexe`) VALUES ( ?, ?, ?)";
            $resultat = $db->executeUpdate ($sql, [$this->nomComplet, $this->adresse, $this->sexe]);
            $db->closeConnexion ();
            return $resultat;
        }
        public function matricule () : string
        {
            $db = parent::database ();
            $db->connexionDB ();
            $sql = "UPDATE Personne SET matricule = ? WHERE id = ?";
            $resultat = $db->executeUpdate ($sql, [$this->matricule, $this->id]);
            $db->closeConnexion ();
            return $resultat;
        }
        public function update (int $id) : int
        {
            $db = self::database ();
            $db->connexionDB ();
            $sql = "UPDATE " .self::table(). " SET nom_complet = ?, role = ?, matricule = ?, adresse = ?,
            sexe = ? WHERE id = ?";
            $resultat = $db->executeUpdate ($sql, [$this->nomComplet, $this->login, $this->password,
            parent::$role, $this->matricule, $this->adresse, $this->sexe, $id]);
            $db->closeConnexion ();
            return $resultat;
        }
    }