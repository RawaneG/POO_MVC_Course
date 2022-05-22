<?php
    namespace Rawane\Core;
    use Rawane\Core\Session;        
    use Rawane\Exception\RouteNotFoundException;
    class Router
    {
        private Request $request;
        
        //--Après la fonction construct, $request aura la capacité d'utiliser les fonctions qui se trouvent
        //--dans la classe Request.
        public function __construct ()
        {
            $this->request = new Request ();
        }

        private array $routes = [];

        public function route (string $uri, array $action)
        {
            $this->routes[$uri] = $action;
        }

        public function resolve ()
        {
            //--
            $uri = "/".$this->request->getUri()[0];
            if(isset($this->routes[$uri]))
            {
                $route = $this->routes[$uri];
                [$ctrClass, $action] = $route;
                if(class_exists($ctrClass) && method_exists($ctrClass , $action))
                {
                    //--
                    $ctrl = new $ctrClass($this->request);
                    //--On met toutes les pages ne nécessitant pas une connexion dans la variable Free
                    $free = ['SecurityController/authentification'];
                    //--FreeTest est la variable à comparer avec Free pour vérifier si elle nécessite une 
                        //--connexion ou pas.
                    $freeTest = explode("\\" , $ctrl::class)[2]."/".$action;
                    //--On vérfie si le controller ainsi que l'action de FreeTest se trouvent dans la variable Free
                    if(in_array($freeTest, $free))
                    {
                        //--Si c'est le cas on appelle la fonction du controller correspondant
                        call_user_func(array($ctrl , $action));
                    }
                    //--Dans le cas contraire ça veut dire que l'utilisateur se trouve dans une page nécessitant
                        //--une connexion
                    else if (Session::isConnect())
                    {
                        //--S'il est connecté donc l'action du controller correspondant est encore appelé
                        call_user_func(array($ctrl , $action));
                    }
                    //--Dans le cas contraire l'utilisateur n'est pas connecté et une erreur est affichée
                    else
                    {
                        throw new RouteNotFoundException();
                    }
                }
                else
                {
                    throw new RouteNotFoundException();
                }
            }
            else
            {
                throw new RouteNotFoundException();
            }
        }
    }