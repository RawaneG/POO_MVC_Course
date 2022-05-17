<?php
namespace Rawane\Model;

    class RP extends User
    {
        public function __construct()
        {
            parent::$role = 'ROLE_RP';
        }
    }