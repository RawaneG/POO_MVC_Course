<?php
namespace Rawane\Model;
use Rawane\Core\Model;

class Module extends Model
{
    private int $id;
    private string $nom_module;

    public function insert () : int
    {
        $db = parent::database ();
        $db->connexionDB ();
        $sql = "INSERT INTO " .parent::table(). " (`nomModule`) VALUES ( ? )";
        $resultat = $db->executeUpdate ($sql, [$this->nom_module]);
        $db->closeConnexion ();
        return $resultat;
    }

    public function getNom_module()
    {
        return $this->nom_module;
    }
    public function setNom_module($nom_module)
    {
        $this->nom_module = $nom_module;
        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}