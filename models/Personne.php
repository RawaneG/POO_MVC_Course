<?php
    //--Personne est une classe "concrète" : Une classe qui produit des objets.
    //--Une classe finale est une classe qui ne peut pas avoir de classes filles, 
        //--Elle est reconnue avec le mot clé "final" suivi de "class".
    //--Une classe "abstraite" est une classe qui ne produit pas d'objet.
        //--Une classe abstraite est non instanciable.
        //-- Elle est reconnue avec le mot clé "abstract" suivi de "class". 

    //-- "->"  nom : Opérateur de portée d'instance.
    //-- Il est utilisé afin d'afficher l'interface de la classe.
    //-- C'est à dire accéder aux propriétés et méthodes visibles de la classe 
    //-- pour être plus précis ceux qui ont la visibilité "public".
    //-- "::"  nom : Opérateur de portée de classe.
    //-- Permet d'acceder aux propriétés et méthodes statiques de la classe,
    //-- pour être plus précis ceux qui ont la visibilité "static".
abstract class Personne extends Model
{
    protected string $role;
    public static function setNombreDePersonnes ($nombreDePersonnes) : void
    {
        self::$nombreDePersonnes = $nombreDePersonnes;
    }
    public static function getNombreDePersonnes () : int
    {
        return self::$nombreDePersonnes;
    }
    //--Attributs d'instances : Attributs spécifiques à chaque objet
    protected int $id;
    protected string $nomComplet;
    //--Attributs de classes ou Static : Attributs accessibles à l'ensemble des objets
    private static int $nombreDePersonnes;
    //--Les setters sont des méthodes publiques qui nous permettent de modifier les propriétés privées d'une classe donnée.
    public function setId ($id) : self
    {
    // //--$this représente l'objet en cours qui utilise la classe
        $this->id = $id;
        return $this;
    }
    public function setNomComplet ($nomComplet) : self
    {    
        $this->nomComplet = $nomComplet;
        return $this;
    }
    //--Les getters sont des méthodes publiques qui nous permettent d'accéder aux propriétés privées d'une classe donnée.
    public function getId () : int
    {
        return $this->id;
    }
    public function getNomComplet () : string
    {
        return $this->nomComplet;
    }
}