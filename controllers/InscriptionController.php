<?php
namespace Rawane\Controller;
    use Rawane\Core\Controller;
    use Rawane\Model\Inscription;
    use Rawane\Model\Classe;
    use Rawane\Core\Model;
    use Rawane\Model\AnneeScolaire;
    use Rawane\Model\Etudiant;

class InscriptionController extends Controller
{
    public function lister ()
    {
        if($this->request->isGet())
        {
            $inscriptions = Inscription::registered();
            $data =
            [
                'inscriptions' => $inscriptions
            ];
            $this->render('inscription/liste',$data);
        }
    }
    public function ajouter ()
    {
        if($this->request->isGet())
        {
            $inscriptions = Inscription::registered();
            $classes = Classe::findAll();
            $annees = AnneeScolaire::findAll();
            $data =
            [
                'annees' => $annees,
                'classes' => $classes,
                'inscriptions' => $inscriptions
            ];
            $this->render('inscription/add',$data);
        }
        else
        {
            extract($_POST);
            $nouvel_etudiant = new Etudiant ();
            $nouvel_etudiant->setNomComplet($nom_complet);
            $nouvel_etudiant->setAdresse($adresse);
            $nouvel_etudiant->setSexe($sexe);
            $last_id = $nouvel_etudiant->insert();
            if($last_id > 0)
            {
                $inscription = new Inscription ();
                $inscription->setEtudiant_id($last_id);
                $inscription->setClasse_id($classe);
                $inscription->setAnnee_id($annee);
                $inscription->register();
                $matricule = 'MAT-'.date('dmYhis');
                $nouvel_etudiant->setMatricule($matricule);
                $nouvel_etudiant->setId($last_id);
                $nouvel_etudiant->matricule();
            }
            $this->redirectToRoute('inscription');
        }
    }
    public function modifier ($id)
    {
        if($this->request->isGet())
        {
            $this->render('inscription/edit');
        }
        else
        {

        }
    }
    public function supprimer ($id)
    {
        if($this->request->isGet())
        {
            $this->render('inscription/delete');
        }
        else
        {

        }
    }
    public function details ($id)
    {
        if($this->request->isGet())
        {
            $this->render('inscription/details');
        }
        else
        {

        }
    }
}