<?php
namespace Rawane\Controller;
use Rawane\Core\Controller;
use Rawane\Model\Etudiant;

class EtudiantController extends Controller
{

    public function lister ()
    {
        if($this->request->isGet())
        {
            $etudiants = Etudiant::findAll('role','ROLE_ETUDIANT');
            $data = 
            [
                'etudiants' => $etudiants
            ];
            $this->render('personne/etudiant/liste',$data);
        }
    }
    public function ajouter ()
    {
        if($this->request->isGet())
        {
            $this->render('personne/etudiant/add');
        }
        else
        { 
            extract($_POST);
            $nouvel_etudiant = new Etudiant ();
            $nouvel_etudiant->setNomComplet($nom_complet);
            $nouvel_etudiant->setLogin($email);
            $nouvel_etudiant->setMdp($mdp);
            $nouvel_etudiant->setMatricule($matricule);
            $nouvel_etudiant->setAdresse($adresse);
            $nouvel_etudiant->setSexe($sexe);
            $nouvel_etudiant->insert();
            $this->redirectToRoute("Etudiant");
        }
    }
}