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
            public static function delete (int $id) : int
            {
                return 0;
            }
            public static function findAll () : array
            {
                return [];
            }
            public static function findById (int $id) : object | null
            {
                return null;
            }
            public static function findBy (string $sql, array $data = null, $single = false) : object | null | array
            {
                return null;
            }
    }