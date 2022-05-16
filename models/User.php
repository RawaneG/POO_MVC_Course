<?php
namespace Rawane\Model;

    abstract class User extends Personne
    {
        protected string $login;
        protected string $mdp;

        public function getLogin()
        {
            return $this->login;
        }

        public function setLogin($login)
        {
            $this->login = $login;
            return $this;
        }

        public function getMdp()
        {
            return $this->mdp;
        }

        public function setMdp($mdp)
        {
            $this->mdp = $mdp;
            return $this;
        }

        public static function findUserByLoginAndPassword (string $login, string $password) : object | null
        {   
            return parent::findBy ("SELECT * FROM Personne WHERE login = ? AND password = ? ",
            [$login, $password], true);
        }
    }