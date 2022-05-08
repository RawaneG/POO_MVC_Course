<?php
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

        public function getRole()
        {
            return $this->role;
        }

        public function setRole($role)
        {
            $this->role = $role;
            return $this;
        }
    }