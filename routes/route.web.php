<?php
use Rawane\Core\Router;
use Rawane\Controller\AcController;
use Rawane\Controller\ClasseController;
use Rawane\Controller\EtudiantController;
use Rawane\Controller\ModuleController;
use Rawane\Controller\PersonneController;
use Rawane\Controller\ProfesseurController;
use Rawane\Controller\RPController;
use Rawane\Controller\SecurityController;
use Rawane\Exception\RouteNotFoundException;

$router = new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route('/professeurs',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/professeurs-add',[ProfesseurController::class,"ajouter"]);
$router->route('/professeurs-edit',[ProfesseurController::class,"modifier"]);
$router->route('/professeurs-delete',[ProfesseurController::class,"supprimer"]);
$router->route('/professeurs-details',[ProfesseurController::class,"details"]);
$router->route('/Etudiant',[EtudiantController::class,"lister"]);
$router->route('/Etudiant-add',[EtudiantController::class,"ajouter"]);
$router->route('/Etudiant-edit',[EtudiantController::class,"modifier"]);
$router->route('/Etudiant-delete',[EtudiantController::class,"supprimer"]);
$router->route('/Etudiant-details',[EtudiantController::class,"details"]);
$router->route('/RP',[RPController::class,"lister"]);
$router->route('/AC',[AcController::class,"lister"]);

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