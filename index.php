<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// 1 - Inclure les fichiers de la classe
require_once('./core/functions.php');
require('./vendor/autoload.php');
    use Rawane\Model\User;
// 2 - Création ou Instanciation de l'objet.
$userConnect = User::findUserByLoginAndPassword('login','Mot de Passe');
dd($userConnect);
// 3 - Donner un état à un objet : Celà consiste à donner aux propriétés de la classe des valeurs

