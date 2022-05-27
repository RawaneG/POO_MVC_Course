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
            public function update (int $id) : int
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
            public static function findAll (string $title = '', string $query = '') : array | null
            {
                $db = self::database ();
                $db->connexionDB ();
                if($title != '' && $query != '')
                {
                    $sql = "SELECT * FROM " .self::table(). " WHERE $title LIKE ? ";
                    $resultat = $db->executeSelect ($sql, [$query]);
                }
                else
                {
                    $sql = "SELECT * FROM " .self::table();
                    $resultat = $db->executeSelect ($sql);
                }
                $db->closeConnexion ();
                return $resultat;
            }
            public static function findById (int $id) : object | null
            {
                $db = self::database ();
                $db->connexionDB ();
                //--Requête préparée : C'est lorsque l'on injecte une variable pendant l'execution d'une requête.
                $sql = "SELECT * FROM " .self::table(). " WHERE id = ?";
                $resultat = $db->executeSelect ($sql , [$id], true);
                $db->closeConnexion ();
                return $resultat;
            }
            public static function findBy (string $sql, array $data = [], $single = false) : object | null | array
            {
                $db = self::database ();
                $db->connexionDB ();
                //--Requête préparée : C'est lorsque l'on injecte une variable pendant l'execution d'une requête.
                $resultat = $db->executeSelect ($sql , $data, $single);
                $db->closeConnexion ();
                return $resultat;
            }
    }