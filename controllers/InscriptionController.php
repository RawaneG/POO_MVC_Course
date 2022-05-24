<?php
namespace Rawane\Controller;
    use Rawane\Core\Controller;
    use Rawane\Model\Inscription;

class InscriptionController extends Controller
{
    public function lister ()
    {
        if($this->request->isGet())
        {
            $inscriptions = Inscription::registered();
            $data = 
            [
                'inscriptions' => $inscriptions
            ];
            $this->render('inscription/liste',$data);   
        }
    }

    public function ajouter ()
    {
        if($this->request->isGet())
        {
            $inscriptions = Inscription::registered();
            $data = 
            [
                'inscriptions' => $inscriptions
            ];
            $this->render('inscription/add',$data);   
        }
        else
        {

        }
    }

    public function modifier ($id)
    {
        if($this->request->isGet())
        {
            $this->render('inscription/edit');
        }
        else
        {

        }
    }

    public function supprimer ($id)
    {
        if($this->request->isGet())
        {
            $this->render('inscription/delete');
        }
        else
        {

        }
    }

    public function details ($id)
    {
        if($this->request->isGet())
        {
            $this->render('inscription/details');
        }
        else
        {

        }
    }
}