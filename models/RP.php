<?php
namespace Rawane\Model;

    class RP extends User
    {
        public function __construct()
        {
            parent::$role = 'ROLE_RP';
        }
        //--Redefinition de la méthode findAll
        public static function findAll () : array
        {
            $sql = "SELECT * FROM " .parent::table(). " WHERE `role` LIKE ? ";
            return parent::findBy($sql, [parent::$role]);
        }
    }