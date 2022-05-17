<?php
namespace Rawane\Core;

//--Une interface ne contient que des fonctions abstraites
    interface IModel
    {
        //--Méthodes abstraites : c'est à dire on peut connaître le nom de la 
            //--fonction mais on n'a aucune idée de ce qu'elle va faire.
        //--Méthodes d'instances.
        public function insert () : int;
        public function update () : int;
        //--Méthodes d'instances transformées en Méthodes Statiques.
        public static function delete (int $id) : int;
        public static function findAll (string $title = '', string $query = "") : array;
        public static function findById (int $id) : object | null;
        public static function findBy (string $sql, array $data = null, $single) : object | null | array;
        //--$sql représente la requête SQL.
        //--$single est attribut un booléen qui permet de nous indiquer si une requête une seule donnée ou pas.
        //--$data représente les données que l'on veut manipuler avec la requête.
            //--Exemple : SELECT * FROM Personne WHERE nom_complet LIKE "DIOP";
                //-- Ici "DIOP" correspondant à une donnée issue du tableau $data.
    } 