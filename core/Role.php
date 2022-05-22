<?php
namespace Rawane\Core;

class Role
{
    private Session $session;
    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    public static function isRP () : bool
    {
        return self::isConnect() && $_SESSION['user_connect']['role'] == 'ROLE_RP';
    }    
    public static function isAC () : bool
    {
        return self::isConnect() && $_SESSION['user_connect']['role'] == 'ROLE_AC';
    }    
    public static function isEtudiant ()
    {
        return self::isConnect() && $_SESSION['user_connect']['role'] == 'ROLE_ETUDIANT';
    }
}