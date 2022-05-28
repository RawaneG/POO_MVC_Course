<?php
namespace Rawane\Controller;
use Rawane\Core\Controller;
use Rawane\Controller\ClasseController;
use Rawane\Model\Classe;

class ClasseController extends Controller
{
    public function lister ()
    {
        if($this->request->isGet())
        {
            $classes = Classe::findAll();
            $data =
            [
                'classes' => $classes
            ];
            $this->render('classe/liste',$data);
        }
    }

    public function ajouter ()
    {
        if($this->request->isGet())
        {
            $this->render('classe/add');
        }
        else
        {
            extract($_POST);
            if($modifier == "" && $id == "")
            {
                $nouvelle_classe = new Classe ();
                $nouvelle_classe->setLibelle($libelle_classe);
                $nouvelle_classe->setFiliere($filiere_classe);
                $nouvelle_classe->setNiveau($niveau_classe);
                $nouvelle_classe->insert();
                $this->redirectToRoute("classe");
            }
            else
            {
                $nouvelle_classe = new Classe ();
                $nouvelle_classe->setLibelle($libelle_classe);
                $nouvelle_classe->setFiliere($filiere_classe);
                $nouvelle_classe->setNiveau($niveau_classe);
                $nouvelle_classe->update($id);
                $this->redirectToRoute("classe");
            }
        }
    }

    public function supprimer ($id)
    {
        if($this->request->isGet())
        {
            $classes = Classe::delete($id);
            $this->redirectToRoute("classe");
        }
    }

    public function details ($id)
    {
        if($this->request->isGet())
        {
            $classes = Classe::findById($id);
            dd($classes);
        }
    }

    public function modifier ($id)
    {
        if($this->request->isGet())
        {
            $classes = Classe::findById($id);
            $data =
            [
                'classes' => $classes
            ];
            $this->render('classe/add',$data);
        }
    }
}