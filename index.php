<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$stephen = new Auteur("Stephen", "King");
$victor = new Auteur("Victor", "Hugo");

$livre1 = new Livre("CA", 1986, 1138, 20, $stephen);
$livre2 = new Livre("Semetierre", 1983, 374, 15, $stephen);
$livre3 = new Livre("Le Fléau", 1978, 823, 14, $stephen);
$livre4 = new Livre("Shining", 1977, 447, 16, $stephen);
$livre5 = new Livre("Les misérables", 1862, 2598, 15, $victor);
$livre6 = new Livre("Notre-Dame de Paris", 1831, 940, 20, $victor);


$stephen->addLivre($livre1);
$stephen->addLivre($livre2);
$stephen->addLivre($livre3);
$stephen->addLivre($livre4);
$victor->addLivre($livre5);
$victor->addLivre($livre6);

// echo $stephen->getLivre();

// echo $stephen;

// echo $livre1;

// echo $livre1->getAuteur();

echo $stephen->afficherBibliographie();
echo $victor->afficherBibliographie();