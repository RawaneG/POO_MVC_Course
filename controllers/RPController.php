<?php
namespace Rawane\Controller;
use Rawane\Core\Controller;
use Rawane\Model\RP;

class RPController extends Controller
{

    public function lister ()
    {
        if($this->request->isGet())
        {
            $rps = RP::findAll('role','ROLE_RP');
            $data = 
            [
                'rps' => $rps
            ];
            $this->render('personne/rp/liste.html.php',$data);
        }
    }
    public function ajouter ()
    {
        if($this->request->isGet())
        {
            $this->render('personne/rp/add.html.php');
        }
    }
    public function modifier ()
    {
        if($this->request->isGet())
        {
            $this->render('personne/rp/edit.html.php');
        }
    }
    public function supprimer ()
    {
        if($this->request->isGet())
        {
            $this->render('personne/rp/delete.html.php');
        }
    }
    public function details ()
    {
        if($this->request->isGet())
        {
            $this->render('personne/rp/details.html.php');
        }
    }
}