<?php
use Rawane\Core\Router;
use Rawane\Exception\RouteNotFoundException;
use Rawane\Controller\SecurityController;
use Rawane\Controller\ClasseController;
use Rawane\Controller\PersonneController;


$router = new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personnes',[PersonneController::class,"lister"]);

//--C'est lui qui doit récupérer l'uri et vérifier est-ce qu'elle existe dans le tableau de routes.
//--L'url nous indique précisément quel est le controlleur à charger et par conséquent l'action à effectuer
    //--Résolution des routes 
    try 
    {
        $router->resolve();
    } 
    catch (RouteNotFoundException $ex) 
    {
        echo $ex->message;
    }