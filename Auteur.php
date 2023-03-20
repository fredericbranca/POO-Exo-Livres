<?php

class Auteur
{
    private string $_prenom;
    private string $_nom;
    private array $_livres;

// Constructeur pour initialiser la personne (prenom, nom)

    public function __construct(string $prenom, string $nom)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_livres = [];
    }

// Getter et setter pour les propriétés de l'auteur

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getLivre()
    {
        return var_dump($this->_livres);
    }

// Méthode pour afficher le prenom et le nom de l'auteur

    public function __toString()
    {
        return $this->_prenom . " " . $this->_nom;
    }

// Méthode pour ajouter un livre à l'auteur

    public function addLivre(Livre $livre)
    {
        $this->_livres[] = $livre;
    }

// Methode pour afficher la bibliographie de l'auteur

    public function afficherBibliographie()
    {
       $result = "<div> <p> <b> Livre de " . $this->_prenom . " " . $this->_nom . "</b> </p>";
       foreach ($this->_livres as $livre){
        $result .= $livre . "<br>";
       }
       $result .= "<br></div>";
       return $result;
    }
}