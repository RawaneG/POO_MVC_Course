<?php
namespace Rawane\Controller;
use Rawane\Core\Request;
use Rawane\Core\Controller;
use Rawane\Model\Professeur;


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
        else
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                extract($_POST);

                $nouveau_prof = new Professeur ();
                $nouveau_prof->setNomComplet($nom_complet);
                $nouveau_prof->setGrade($grade);
                $nouveau_prof->insert();
            }
        }
        //--Traitement après soumission = requête POST
    }
    public function deconnexion ()
    {
        $this->redirectToRoute("login");
    }
}