<?php
namespace Rawane\Controller;
use Rawane\Core\Request;
use Rawane\Core\Controller;
use Rawane\Model\User;
use Rawane\Core\Session;

class SecurityController extends Controller
{
    public function authentification ()
    {
        //--Affichage du formulaire de connexion : requête GET
        if($this->request->isGet())
        {
            if(Session::isConnect())
            {
                unset($_SESSION['user_connect']);
                session_destroy();
            }
            $this->render('security/login');
        }
        //--Traitement après soumission = requête POST
        else
        {
            extract($_POST);
            $user = User::findUserByLoginAndPassword($login,$password);
            if($user == null)
            {
                $this->redirectToRoute('login');
            }
            else
            {
                $_SESSION['user_connect'] = $user;
                $this->redirectToRoute('professeurs');
            }
        }
    }
    public function inscription ()
    {
        //--Affichage du formulaire de connexion : requête GET
        if($this->request->isGet())
        {
            $this->render('security/'.__FUNCTION__);
        }
        //--Traitement après soumission = requête POST
    }
    public function deconnexion ()
    {
        unset($_SESSION['user_connect']);
        session_destroy();
        $this->redirectToRoute("login");
    }
    public function introuvable ()
    {
        if($this->request->isGet())
        {
            unset($_SESSION['user_connect']);
            session_destroy();
            $this->render('page_not_found/index');
        }
    }
}