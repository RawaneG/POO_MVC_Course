<?php
namespace Rawane\Controller;
use Rawane\Core\Controller;
use Rawane\Model\Etudiant;

class EtudiantController extends Controller
{

    public function lister ()
    {
        if($this->request->isGet())
        {
            $etudiants = Etudiant::findAll('role','ROLE_ETUDIANT');
            $data = 
            [
                'etudiants' => $etudiants
            ];
            $this->render('personne/etudiant/liste',$data);
        }
    }
}