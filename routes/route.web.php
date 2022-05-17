<?php
use Rawane\Core\Router;
use Rawane\Exception\RouteNotFoundException;
use Rawane\Controller\SecurityController;
use Rawane\Controller\ClasseController;
use Rawane\Controller\PersonneController;
use Rawane\Controller\ProfesseurController;
use Rawane\Controller\AcController;
use Rawane\Controller\EtudiantController;
use Rawane\Controller\RPController;


$router = new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route('/professeurs',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/AC',[AcController::class,"lister"]);
$router->route('/Etudiant',[EtudiantController::class,"lister"]);
$router->route('/RP',[RPController::class,"lister"]);
$router->route('/add',[RPController::class,"ajouter"]);
$router->route('/edit',[RPController::class,"modifier"]);
$router->route('/delete',[RPController::class,"supprimer"]);
$router->route('/details',[RPController::class,"details"]);


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