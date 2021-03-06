<?php
namespace Rawane\Model;
    class Professeur extends Personne
    {
        private string $grade;
        public function __construct()
        {
            parent::$role = 'ROLE_PROFESSEUR';
        }
        //--Approche : Fonctions navigationnelles
        //--Relation :  Many To Many avec Classe
        public function classes () : array
        {
            return [];
        }
        //--Dans la table Professeur je dois être capable de faire :
            //--INSERT
            //--UPDATE
            //--DELETE
            //--SELECT ALL (Exemple : SELECT * FROM Professeur)
            //--SELECT BY ID (Exemple : SELECT * FROM Professeur WHERE ID = 1)

        public function insert () : int
        {
            $db = parent::database ();
            $db->connexionDB ();
            $sql = "INSERT INTO " .parent::table(). " (`nom_complet`,`grade`,`role`) VALUES ( ?, ?, ?)";
            $resultat = $db->executeUpdate ($sql, [$this->nomComplet, $this->grade, parent::$role]);
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
        public function getGrade()
        {
            return $this->grade;
        }
        public function setGrade($grade)
        {
            $this->grade = $grade;
            return $this;
        }
    }