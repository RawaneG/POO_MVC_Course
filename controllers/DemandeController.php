<?php
namespace Rawane\Controller;
    use Rawane\Core\Model;
    use Rawane\Core\Controller;
    use Rawane\Model\Demande;

    class DemandeController extends Controller
    {
        public function lister ()
        {
            if($this->request->isGet())
            {
                $demandes = Demande::findAll();
                $data =
                [
                    'demandes' => $demandes
                ];
                $this->render('demande/liste',$data);
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