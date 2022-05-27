<?php
namespace Rawane\Controller;
use Rawane\Core\Controller;
use Rawane\Model\Module;

class ModuleController extends Controller
{
    public function lister ()
    {
        if($this->request->isGet())
        {
            $modules = Module::findAll();
            $data =
            [
                'modules' => $modules
            ];
            $this->render('module/liste',$data);
        }
    }
    public function ajouter ()
    {
        if($this->request->isGet())
        {
            $this->render('module/add');
        }
        else
        {
            extract($_POST);
            $nouveau_module = new Module ();
            $nouveau_module->setNom_module($libelle_module);
            $nouveau_module->insert();
            $this->redirectToRoute('module');
        }
    }
    public function modifier ()
    {
        if($this->request->isGet())
        {
            $this->render('module/edit');
        }
        else
        {
            # code...
        }
    }
    public function supprimer ()
    {
        if($this->request->isGet())
        {
            $this->render('module/delete');
        }
        else
        {
            # code...
        }
    }
}