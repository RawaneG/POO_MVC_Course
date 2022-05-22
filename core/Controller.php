<?php
    namespace Rawane\Core;
    use Rawane\Core\Constantes;
    use Rawane\Core\HtmlProvider;
    use Rawane\Core\Session;

    class Controller
    {
        protected Request $request;
        //--Injection de la Request dans le controller
        public function __construct (Request $request)
        {
            $this->request = $request;
        }
        //--Cette fonction nous permet de charger la vue
        public function render (string $path, array $data = [])
        {
            $data["Constantes"] = Constantes::class;
            $data["request"] = $this->request;
            ob_start();
            extract($data);
            require_once(Constantes::ROOT()."templates/".$path.".html.php");
            $content_for_views = ob_get_clean();
            if(Session::isConnect())
            {
                ob_start(); 
                require_once(Constantes::ROOT()."templates/layout/menu.html.php");
                $menu_for_users = ob_get_clean();
            }
            require_once(Constantes::ROOT()."templates/layout/base.html.php");
        }
        //--
        public function redirectToRoute ($uri)
        {
            header("location:".Constantes::WEB_ROOT.$uri);
        }
    }