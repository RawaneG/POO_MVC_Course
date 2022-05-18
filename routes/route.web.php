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
$router->route('/register',[SecurityController::class,"inscription"]);
$router->route('/',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route('/professeurs',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/professeurs-add',[ProfesseurController::class,"ajouter"]);
$router->route('/professeurs-edit',[ProfesseurController::class,"modifier"]);
$router->route('/professeurs-delete',[ProfesseurController::class,"supprimer"]);
$router->route('/professeurs-details',[ProfesseurController::class,"details"]);
$router->route('/AC',[AcController::class,"lister"]);
$router->route('/AC-add',[AcController::class,"ajouter"]);
$router->route('/AC-edit',[AcController::class,"modifier"]);
$router->route('/AC-delete',[AcController::class,"supprimer"]);
$router->route('/AC-details',[AcController::class,"details"]);
$router->route('/Etudiant',[EtudiantController::class,"lister"]);
$router->route('/Etudiant-add',[EtudiantController::class,"ajouter"]);
$router->route('/Etudiant-edit',[EtudiantController::class,"modifier"]);
$router->route('/Etudiant-delete',[EtudiantController::class,"supprimer"]);
$router->route('/Etudiant-details',[EtudiantController::class,"details"]);
$router->route('/RP',[RPController::class,"lister"]);
$router->route('/RP-add',[RPController::class,"ajouter"]);
$router->route('/RP-edit',[RPController::class,"modifier"]);
$router->route('/RP-delete',[RPController::class,"supprimer"]);
$router->route('/RP-details',[RPController::class,"details"]);


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