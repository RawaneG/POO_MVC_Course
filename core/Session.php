<?php
namespace Rawane\Core;

class Session
{
    private User $user;
    
    public function __construct ()
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
    }
    //--Ajouter une valeur dans la session
    public function set (string $key, $data)
    {
        $_SESSION[$key] = $data;
    }
    //--Nous permet de récupérer une clé de la session
    public function get (string $key)
    {
        return $_SESSION[$key];
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}