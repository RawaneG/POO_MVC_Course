<?php
namespace Rawane\Controller;
use Rawane\Core\Request;
use Rawane\Core\Controller;
use Rawane\Controller\PersonneController;

class PersonneController extends Controller
{
    public function lister ()
    {
        if($this->request->isGet())
        {
            $this->render('personne/liste.html.php');
        }
    }
}