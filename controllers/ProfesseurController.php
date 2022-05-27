<?php
namespace Rawane\Controller;
    use Rawane\Core\Controller;
    use Rawane\Core\Model;
    use Rawane\Model\Professeur;
    use Rawane\Model\Enseigner;
    use Rawane\Model\Module;

class ProfesseurController extends Controller
{
    public function lister ()
    {
        if($this->request->isGet())
        {
            $profs = Enseigner::findAllEnseignants();
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
            $modules = Module::findAll();
            $data =
            [
                'modules' => $modules
            ];
            $this->render('personne/professeur/add',$data);
        }
        else
        {
            extract($_POST);
            $mes_modules = [];
            foreach ($modules as $module)
            {
                $mes_modules[] = array_push($mes_modules,$module);
            }
            $nouveau_prof = new Professeur ();
            $nouveau_prof->setNomComplet($nom_complet);
            $nouveau_prof->setGrade($grade);
            $last_id = $nouveau_prof->insert();
            if($last_id > 0)
            {
                $latest_prof = new Enseigner ();
                $latest_prof->insertModules($mes_modules, $last_id);
            }
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
            $profs = Enseigner::findById($id);
            $modules = Module::findAll();
            $data =
            [
                'profs' => $profs,
                'modules' => $modules
            ];
            $this->render('personne/professeur/edit',$data);
        }
        else
        {
            extract($_POST);
            $nouveau_prof = new Professeur ();
            $nouveau_prof->setNomComplet($nom_complet);
            $nouveau_prof->setGrade($grade);
            $nouveau_prof->update($id);
            $this->redirectToRoute("professeurs");
        }
    }
}