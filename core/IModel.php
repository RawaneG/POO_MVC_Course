<?php
//--Une interface ne contient que des fonctions abstraites
    interface IModel
    {
        //--Méthodes abstraites : c'est à dire on peut connaître le nom de la 
            //--fonction mais on n'a aucune idée de ce qu'elle va faire.
        public function insert () : int;
        public function update () : int;
        public function delete () : int;
        public function findAll () : array;
        public function findById () : object | null;
        public function findBy (string $sql, array $data = null, $single = false) : object | null | array;
        //--$sql représente la requête SQL.
        //--$single est attribut un booléen qui permet de nous indiquer si une requête une seule donnée ou pas.
        //--$data représente les données que l'on veut manipuler avec la requête.
            //--Exemple : SELECT * FROM Personne WHERE nom_complet LIKE "DIOP";
                //-- Ici "DIOP" correspondant à une donnée issue du tableau $data.
    }