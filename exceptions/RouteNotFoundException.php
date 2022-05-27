<?php
    namespace Rawane\Exception;
    use Rawane\Core\Constantes;

    class RouteNotFoundException extends \Exception
    {
        public function message()
        {
            header("location:".Constantes::WEB_ROOT.'not_found');
        }
    }