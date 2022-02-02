<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

include 'classes/Habitation.php';
include 'classes/Maison.php';
include 'classes/Appartement.php';

$maison1 = new Maison("Boubly","03459",3,4,true,2,true);
$maison2 = new Maison("Gotham","23456", 5, 3, false, 3, false);

$appartement = new Appartement("MorrayLand", "34512",1,4,true);

echo "<pre>";
echo "maison 1 : ";
var_dump($maison1->getVille());
var_dump($maison1->getCp());
var_dump($maison1->getChambres());
var_dump($maison1->getPieces());
var_dump($maison1->isJardin());
var_dump($maison1->getEtages());
var_dump($maison1->isGarage());
echo "maison 2 : ";
var_dump($maison2->getVille());
var_dump($maison2->getCp());
var_dump($maison2->getChambres());
var_dump($maison2->getPieces());
var_dump($maison2->isJardin());
var_dump($maison2->getEtages());
var_dump($maison2->isGarage());
echo "appartement : ";
var_dump($maison1->getVille());
var_dump($maison1->getCp());
var_dump($maison1->getChambres());
var_dump($maison1->getPieces());
var_dump($maison1->isGarage());
echo "</pre>";
