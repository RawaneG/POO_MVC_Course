<?php
namespace Rawane\Model;
use Rawane\Core\Model;

class Enseigner extends Model
{
    private int $id;
    private int $professeur_id;
    private int $module_id;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getProfesseur_id()
    {
        return $this->professeur_id;
    }
    public function setProfesseur_id($professeur_id)
    {
        $this->professeur_id = $professeur_id;
        return $this;
    }
    public function getModule_id()
    {
        return $this->module_id;
    }
    public function setModule_id($module_id)
    {
        $this->module_id = $module_id;
        return $this;
    }

    public static function findAllEnseignants () : array | null
    {
        $db = parent::database ();
        $db->connexionDB ();
        $sql = "SELECT * FROM Enseigner, Personne, Module WHERE
        professeur_id = Personne.id AND module_id = Module.id";
        $resultat = $db->executeSelect($sql);
        $db->closeConnexion ();
        return $resultat;
    }
    public static function findById (int $id) : object | null
    {
        $db = self::database ();
        $db->connexionDB ();
        //--Requête préparée : C'est lorsque l'on injecte une variable pendant l'execution d'une requête.
        $sql = "SELECT * FROM Enseigner WHERE professeur_id = ?";
        $resultat = $db->executeSelect ($sql , [$id], true);
        $db->closeConnexion ();
        return $resultat;
    }
    public function insertModules (array $module, int $id) : array | int | null
    {
        $db = self::database ();
        $db->connexionDB ();
        for($i = 0; $i < count($module); $i++)
        {
            $sql = "INSERT INTO Enseigner (`rp_id`,`professeur_id`,`module_id`)
            VALUES (? , ? , ?)";
        $resultat = $db->executeSelect ($sql ,
        [$_SESSION['user_connect']->id, $id , $module[$i]]);
        }
        $db->closeConnexion ();
        return $resultat;
    }
}