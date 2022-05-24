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
            $nouvelle_classe = new Classe ();
            $nouvelle_classe->setLibelle($libelle_classe);
            $nouvelle_classe->setFiliere($filiere_classe);
            $nouvelle_classe->setNiveau($niveau_classe);
            $nouvelle_classe->insert();
            $this->redirectToRoute("classe");
        }
    }
}