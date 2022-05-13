<?php
namespace Rawane\Controller;
use Rawane\Core\Request;
use Rawane\Core\Controller;
use Rawane\Controller\SecurityController;

class SecurityController extends Controller
{
    public function authentification ()
    {
        //--Affichage du formulaire de connexion : requête GET
        if($this->request->isGet())
        {
            $this->render('security/login.html.php');
        }
        //--Traitement après soumission = requête POST
    }
    public function deconnexion ()
    {
        $this->redirectToRoute("login");
    }
}