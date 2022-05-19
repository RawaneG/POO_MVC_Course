<?php
namespace Rawane\Controller;
use Rawane\Core\Request;
use Rawane\Core\Controller;
use Rawane\Model\User;


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
        else
        {
            extract($_POST);
            $connected = User::findUserByLoginAndPassword($login,$password);
            if($connected == null)
            {
                $this->redirectToRoute('login');
            }
            else
            {
                $this->redirectToRoute('Etudiant');
            }
        }
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