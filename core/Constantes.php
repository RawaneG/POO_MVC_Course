<?php
namespace Rawane\Core;
    class Constantes
    {
        public const WEB_ROOT = "http://localhost:8001/";
        public static function ROOT ()
        {
            return str_replace("public","",$_SERVER["DOCUMENT_ROOT"]);
        }
    }