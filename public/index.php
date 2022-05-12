<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// 1 - Inclure les fichiers de la classe
require_once('../core/functions.php');
require('../vendor/autoload.php');
use Rawane\Exception\RouteNotFoundException;
use Rawane\Controller\SecurityController;
use Rawane\Controller\ClassController;
use Rawane\Core\Router;

$router = new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[ClassController::class,"listerClasse"]);
$router->route('/add-classe',[ClassController::class,"creerClasse"]);

//--C'est lui qui doit récupérer l'uri et vérifier est-ce qu'elle existe dans le tableau de routes.
    //--Si l'uri existe la fonction a pour rôle de charger l'action correspondante.
    try 
    {
        $router->resolve();
    } 
    catch (RouteNotFoundException $ex) 
    {
        echo $ex->message;
    }

