<?php
    class Model implements IModel
    {
            //--Implémentation des fonctions de IModel
            public function insert () : int
            {
                return 0;
            }
            public function update () : int
            {
                return 0;
            }
            public function delete () : int
            {
                return 0;
            }
            public function findAll () : array
            {
                return [];
            }
            public function findById () : object | null
            {
                return null;
            }
            public function findBy (string $sql, array $data = null, $single = false) : object | null | array
            {
                return null;
            }
    }