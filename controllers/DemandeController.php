<?php
namespace Rawane\Controller;
    use Rawane\Core\Model;
    use Rawane\Core\Controller;

    class DemandeController extends Controller
    {
        public function lister ()
        {
            if($this->request->isGet())
            {
                $this->render('demande/liste');
            }
        }
        public function ajouter ()
        {
            if($this->request->isGet())
            {
                $this->render('demande/add');
            }
        }
        public function modifier ($id)
        {
            if($this->request->isGet())
            {
                $this->render('demande/edit');
            }
        }
        public function details ($id)
        {
            if($this->request->isGet())
            {
                $this->render('demande/details');
            }
        }
        public function supprimer ($id)
        {
            if($this->request->isGet())
            {
                $this->render('demande/delete');
            }
        }
    }