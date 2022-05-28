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
            $mes_profs = Professeur::findAll('role','ROLE_PROFESSEUR');
            $data =
            [
                'mes_profs' => $mes_profs
            ];
            $this->render('personne/professeur/add',$data);
        }
        else
        {
            extract($_POST);
            if($id == "" && $modifier == "")
            {
                $nouveau_prof = new Professeur ();
                $nouveau_prof->setNomComplet($nom_complet);
                $nouveau_prof->setGrade($grade);
                $nouveau_prof->setRole($grade);
                $nouveau_prof->insert();
                $this->redirectToRoute('professeurs');
            }
            else
            {
                $nouveau_prof = new Professeur ();
                $nouveau_prof->setNomComplet($nom_complet);
                $nouveau_prof->setGrade($grade);
                $nouveau_prof->update($id);
                $this->redirectToRoute("professeurs");
            }
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
            $this->render('personne/professeur/details');
        }
    }
    public function modifier ($id)
    {
        if($this->request->isGet())
        {
            $mes_profs = Professeur::findAll('role','ROLE_PROFESSEUR');
            $profs = Professeur::findById($id);
            $data =
            [
                'mes_profs' => $mes_profs,
                'profs' => $profs
            ];
            $this->render('personne/professeur/add',$data);
        }
    }
}