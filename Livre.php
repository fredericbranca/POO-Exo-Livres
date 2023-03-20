<?php


class Livre
{
    private string $_titre;
    private int $_annee;
    private int $_nbPages;
    private float $_prix;
    private Auteur $_auteur;

// Constructeur pour initialiser le livre

    public function __construct(string $titre, int $annee, int $nbPages, float $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_annee = $annee;
        $this->_nbPages = $nbPages;
        $this->_prix = $prix;
        $this->_auteur= $auteur;
        $this->_auteur->addLivre($this);
    }

// Getter et setter pour les propriétés du livre

    public function getTitre(): string //Titre
    {
        return $this->_titre;
    }

    public function setTitre(string $titre)
    {
        $this->_titre = $titre;
    }

    public function getNbPage(): int //Nombre de pages
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
        return $this->_auteur;
    }

// Méthode pour afficher toutes les informations du livre

    public function __toString()
    {
        return $this->_titre . " (" . $this->_annee . ") : " . $this->_nbPages . " pages / " . $this->_prix . " €";
    }

}

?>