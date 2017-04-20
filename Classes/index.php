<?php

/**
** Sert au test des classes
** Auteur Kévin
** Date 03/08/2016
**/

include 'Personnage.php';
include 'Barbare.php';
include 'Ranger.php';


$barbare = new Barbare;//création du barbare
$ranger = new Ranger;//création du ranger
$barbare2 = new Barbare;//création du barbare2

echo '<b>Combat 1 - Barbare vs Ranger:</b> <br />'; //on enleve gagnerExperience de barbare pour tester l'heritage
$ranger->afficherVie();//vie départ
$barbare->afficherVie();//vie départ
$barbare->afficherExperience();//xp barbare
$ranger->etreBlesse();//tape 1ère fois
$ranger->afficherVie();//vie etape 1
$barbare->gagnerExperience();//+1xp 
$barbare->afficherExperience();//xp barbare
$ranger->etreBlesse();//tape 2ème fois
$ranger->afficherVie();//vie arrivée
$barbare->gagnerExperience();//+1xp 
$barbare->afficherExperience();//xp barbare


?>