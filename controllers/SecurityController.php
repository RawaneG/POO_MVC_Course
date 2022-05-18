<?php
namespace Rawane\Controller;
use Rawane\Core\Request;
use Rawane\Core\Controller;

class SecurityController extends Controller
{
    public function authentification ()
    {
        //--Affichage du formulaire de connexion : requête GET
        if($this->request->isGet())
        {
            $this->render('security/login');
        }
        //--Traitement après soumission = requête POST
    }
    public function inscription ()
    {
        //--Affichage du formulaire de connexion : requête GET
        if($this->request->isGet())
        {
            $this->render('security/'.__FUNCTION__);
        }
        //--Traitement après soumission = requête POST
    }
    public function deconnexion ()
    {
        $this->redirectToRoute("login");
    }
}