<?php
namespace Rawane\Controller;
use Rawane\Core\Controller;
use Rawane\Model\Professeur;

class ProfesseurController extends Controller
{
    public function affecterClasse ()
    {
        
    }
    public function listerProfesseur ()
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
}