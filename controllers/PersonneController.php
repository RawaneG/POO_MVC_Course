<?php
namespace Rawane\Controller;
use Rawane\Core\Controller;
use Rawane\Model\Professeur;    

class PersonneController extends Controller
{
    public function lister ()
    {
        if($this->request->isGet())
        {
            $acs = Professeur::findAll();
            $data = 
            [
                'acs' => $acs
            ];
            $this->render('personne/liste',$data);
        }
    }
}