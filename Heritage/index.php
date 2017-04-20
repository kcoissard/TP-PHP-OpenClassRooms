<?php

/**
** Sert au test des classes
** Auteur Kévin
** Date 03/08/2016
**/

include 'Personnage.php';
include 'Barbare.php';
include 'Ranger.php';

echo '<br /><b>Combat 1 - Barbare vs Ranger:</b> <br />';
$barbare = new Barbare(Personnage::FORCE_GRANDE, Personnage::PETITE_XP);//création du barbare
$ranger = new Ranger(Personnage::FORCE_MOYENNE, Personnage::MOYENNE_XP);//création du ranger
//$barbare2 = new Barbare(Personnage::FORCE_GRANDE, Personnage::GRANDE_XP);//création du barbare2

Barbare::taper($barbare, $ranger);
Ranger::taper($ranger, $barbare);


echo 'Test compteur : '.Personnage::getCompteur();


?>