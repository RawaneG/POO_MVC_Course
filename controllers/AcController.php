<?php
namespace Rawane\Controller;
use Rawane\Core\Controller;
use Rawane\Model\AC;

class AcController extends Controller
{

    public function lister ()
    {
        if($this->request->isGet())
        {
            $acs = AC::findAll('role','ROLE_AC');
            $data = 
            [
                'acs' => $acs
            ];
            $this->render('personne/ac/liste.html.php',$data);
        }
    }
}