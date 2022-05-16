<?php
namespace Rawane\Core;

    abstract class Model implements IModel
    {
        protected static function database () : Database
        {
            return new Database ();
        }
        public static function table () : string
        {
            $table = get_called_class();
            $table = str_replace('Rawane\\Model\\', '', $table);
            if($table == 'User' || $table == 'AC' || $table == 'RP' || $table == 'Etudiant' || $table == 'Professeur')
            {
                $table = 'Personne';
            }
            return $table;
        }
            //--Implémentation des fonctions de IModel
            public function insert () : int
            {
                return 0;
            }
            public function update () : int
            {
                return 0;
            }
            public static function delete (int $id) : int
            {
                $db = self::database ();
                $db->connexionDB ();
                //--Requête non préparée : C'est lorsque l'on injecte une variable pendant l'écriture d'une requête. (C'est à éviter)
                $sql = "DELETE FROM " .self::table(). " WHERE id = $id";
                $resultat = $db->executeUpdate ($sql);
                $db->closeConnexion ();
                return $resultat;
            }
            public static function getClassName () : string
            {
                $classParent = get_called_class();
                $current_classParent = str_replace('Rawane\\Model\\', '', $classParent);
                return $current_classParent;
            }
            public static function obtainRole () : string
            {
                $nom_classe = self::getClassName ();
                $current_role = 'ROLE_'.strtoupper($nom_classe);
                return $current_role;
            }
            public static function findAll () : array
            {
                $db = self::database ();
                $db->connexionDB ();
                if(self::table() == 'Personne' || self::table() == 'User')
                {
                    $sql = "SELECT * FROM " .self::table(). " WHERE `role` LIKE ? ";
                }
                else
                {
                    $sql = "SELECT * FROM " .self::table(). " WHERE `role` LIKE 'ROLE_PROFESSEUR'";
                }
                $resultat = $db->executeSelect ($sql, [self::obtainRole()]);
                $db->closeConnexion ();
                return $resultat;
            }
            public static function findById (int $id) : object | null
            {
                $db = self::database ();
                $db->connexionDB ();
                //--Requête préparée : C'est lorsque l'on injecte une variable pendant l'execution d'une requête.
                $sql = "SELECT * FROM " .self::table(). " WHERE id = ?";
                $resultat = $db->executeSelect ($sql , [$id]);
                $db->closeConnexion ();
                return $resultat;
            }
            public static function findBy (string $sql, array $data = null, $single) : object | null | array
            {
                $db = self::database ();
                $db->connexionDB ();
                //--Requête préparée : C'est lorsque l'on injecte une variable pendant l'execution d'une requête.
                $resultat = $db->executeSelect ($sql , $data, $single);
                $db->closeConnexion ();
                return $resultat;
            }
    }