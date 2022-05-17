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
            $profs = Professeur::findAll();
            $data = 
            [
                'profs' => $profs
            ];
            $this->render('personne/liste.html.php',$data);
        }
    }
}