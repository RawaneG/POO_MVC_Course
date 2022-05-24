<?php
use Rawane\Core\Router;
use Rawane\Controller\AcController;
use Rawane\Controller\ClasseController;
use Rawane\Controller\EtudiantController;
use Rawane\Controller\ModuleController;
use Rawane\Controller\DemandeController;
use Rawane\Controller\PersonneController;
use Rawane\Controller\ProfesseurController;
use Rawane\Controller\RPController;
use Rawane\Controller\SecurityController;
use Rawane\Controller\InscriptionController;
use Rawane\Exception\RouteNotFoundException;

$router = new Router();
$router->route('/',[SecurityController::class,"authentification"]);
$router->route('/inscription',[InscriptionController::class,"lister"]);
$router->route('/inscription-add',[InscriptionController::class,"ajouter"]);
$router->route('/inscription-edit',[InscriptionController::class,"modifier"]);
$router->route('/inscription-details',[InscriptionController::class,"details"]);
$router->route('/inscription-delete',[InscriptionController::class,"supprimer"]);
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route('/professeurs',[ProfesseurController::class,"lister"]);
$router->route('/professeurs-add',[ProfesseurController::class,"ajouter"]);
$router->route('/professeurs-edit',[ProfesseurController::class,"modifier"]);
$router->route('/professeurs-delete',[ProfesseurController::class,"supprimer"]);
$router->route('/professeurs-details',[ProfesseurController::class,"details"]);
// $router->route('/Etudiant',[EtudiantController::class,"lister"]);
// $router->route('/Etudiant-add',[EtudiantController::class,"ajouter"]);
// $router->route('/Etudiant-edit',[EtudiantController::class,"modifier"]);
// $router->route('/Etudiant-delete',[EtudiantController::class,"supprimer"]);
// $router->route('/Etudiant-details',[EtudiantController::class,"details"]);
$router->route('/classe',[ClasseController::class,"lister"]);
$router->route('/classe-add',[ClasseController::class,"ajouter"]);
$router->route('/classe-edit',[ClasseController::class,"modifier"]);
$router->route('/classe-delete',[ClasseController::class,"supprimer"]);
$router->route('/classe-details',[ClasseController::class,"details"]);
$router->route('/module',[ModuleController::class,"lister"]);
$router->route('/module-add',[ModuleController::class,"ajouter"]);
$router->route('/module-edit',[ModuleController::class,"modifier"]);
$router->route('/module-delete',[ModuleController::class,"supprimer"]);
$router->route('/module-details',[ModuleController::class,"details"]);
$router->route('/demande',[DemandeController::class,"lister"]);
$router->route('/demande-add',[DemandeController::class,"ajouter"]);
$router->route('/demande-edit',[DemandeController::class,"modifier"]);
$router->route('/demande-delete',[DemandeController::class,"supprimer"]);
$router->route('/demande-details',[DemandeController::class,"details"]);

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