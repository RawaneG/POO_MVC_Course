<?php
    namespace Rawane\Core;
    class Request 
    {
        //--On recupére l'Uri et on prends la partie du lien qui nous intéresse avec explode ()
        //--C'est l'URI qui permet au routeur de savoir quelle est l'action qu'il doit executer
        public function getUri ()
        {
            $url = explode("/", $_SERVER['REQUEST_URI']);
            unset($url[0]);
            return array_values($url);
        }
        public function isGet () : bool
        {
            return $_SERVER['REQUEST_METHOD'] == 'GET';
        }
        public function isPost () : bool
        {
            return $_SERVER['REQUEST_METHOD'] == 'POST';
        }
    }