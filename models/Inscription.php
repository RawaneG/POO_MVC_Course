<?php
namespace Rawane\Model;
    use Rawane\Core\Model;

    class Inscription extends Personne
    {
        private int $etudiant_id;
        private int $ac_id;
        private int $classe_id;
        private int $annee_id;

        //* Permet de Lister tous les étudiants inscrits
        public static function registered() : array | null
        {
            $db = self::database ();
            $db->connexionDB ();
            $sql = "SELECT * FROM Inscription, Classe, AnneeScolaire, Personne
            WHERE classe_id = Classe.id
            AND annee_id = AnneeScolaire.id
            AND etudiant_id = Personne.id";
            $resultat = $db->executeSelect ($sql);
            $db->closeConnexion ();
            return $resultat;
        }
        //* Permet d'inscrire un étudiant
        public function register() : int
        {
                $db = parent::database ();
                $db->connexionDB ();
                $sql = "INSERT INTO Inscription
                (`ac_id`,`etudiant_id`,`classe_id`,`annee_id`)
                VALUES (?, ?, ?, ?)";
                $resultat = $db->executeUpdate($sql,
                [
                        $_SESSION['user_connect']->id,
                        $this->etudiant_id,
                        $this->classe_id,
                        $this->annee_id
                ]);
                $db->closeConnexion ();
                return $resultat;
        }
        public function getEtudiant_id()
        {
                return $this->etudiant_id;
        }
        public function setEtudiant_id($etudiant_id)
        {
                $this->etudiant_id = $etudiant_id;

                return $this;
        }
        public function getAc_id()
        {
                return $this->ac_id;
        }
        public function setAc_id($ac_id)
        {
                $this->ac_id = $ac_id;

                return $this;
        }
        public function getClasse_id()
        {
                return $this->classe_id;
        }
        public function setClasse_id($classe_id)
        {
                $this->classe_id = $classe_id;

                return $this;
        }
        public function getAnnee_id()
        {
                return $this->annee_id;
        }
        public function setAnnee_id($annee_id)
        {
                $this->annee_id = $annee_id;

                return $this;
        }
    }