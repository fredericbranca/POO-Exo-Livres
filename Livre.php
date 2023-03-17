<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Livre
{
    private string $_titre;
    private int $_annee;
    private int $_nbPages;
    private int $_prix;
    private Auteur $auteur;

// Constructeur pour initialiser le livre

    public function __construct(string $titre, int $annee, int $nbPages, int $prix, $auteur)
    {
        $this->_titre = $titre;
        $this->_annee = $annee;
        $this->_nbPages = $nbPages;
        $this->_prix = $prix;
        $this->auteur= $auteur;
    }

// Getter et setter pour les propriétés du livre

    public function getTitre() //Titre
    {
        return $this->_titre;
    }

    public function setTitre(string $titre)
    {
        $this->_titre = $titre;
    }

    public function getNbPage() //Nombre de pages
    {
        return $this->_nbPages;
    }

    public function setNbPage(int $nbPages)
    {
        $this->_nbPages = $nbPages;
    }

    public function getAnnee() //Anee
    {
        return $this->_annee;
    }

    public function setAnnee(int $annee)
    {
        $this->_annee = $annee;
    }

    public function getPrix() //Prix
    {
        return $this->_prix;
    }

    public function setPrix(int $prix)
    {
        $this->_prix = $prix;
    }

    public function getAuteur() //Auteur
    {
        return $this->auteur;
    }

// Méthode pour afficher toutes les informations du livre

    public function __toString()
    {
        return $this->_titre . " (" . $this->_annee . ") : " . $this->_nbPages . " pages / " . $this->_prix . " €";
    }

}

?>