<?php
namespace Rawane\Controller;
use Rawane\Core\Controller;
use Rawane\Core\Model;
use Rawane\Model\Professeur;


class ProfesseurController extends Controller
{
    public function affecterClasse ()
    {
        
    }
    public function listerProfesseur ()
    {
        if($this->request->isGet())
        {
            $profs = Professeur::findAll('role','ROLE_PROFESSEUR');
            $data = 
            [
                'profs' => $profs
            ];
            $this->render('personne/professeur/liste',$data);
        }
    }
    public function ajouter ()
    {
        if($this->request->isGet())
        {
            $this->render('personne/professeur/add');
        }
        else
        {
            extract($_POST);
            $nouveau_prof = new Professeur ();
            $nouveau_prof->setNomComplet($nom_complet);
            $nouveau_prof->setGrade($grade);
            $nouveau_prof->insert();
            $this->redirectToRoute('professeurs');
        }
    }
    public function supprimer ($id)
    {
        if($this->request->isGet())
        {
            $profs = Professeur::delete($id);
            $this->redirectToRoute("professeurs");
        }
    }
    public function details ($id)
    {
        if($this->request->isGet())
        {
            $profs = Professeur::findById($id);
            dd($profs);
        }
    }
    public function modifier ($id)
    {
        if($this->request->isGet())
        {
            $profs = Professeur::findById($id);
            $data = 
            [
                'profs' => $profs
            ];
            $this->render('personne/professeur/edit',$data);
        }   
        else
        {
            //--Je modifie pour de bon avec POST
        }
    }
}