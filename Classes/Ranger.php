<?php 

/**
** Classe Ranger
** Auteur : Kévin
** date 03/08/2016
**/

class Ranger extends Personnage
{

	public function gagnerExperience()
	{
		parent::gagnerExperience();
	}
	
	public function etreBlesse()
	{
		parent::etreBlesse();
	}
	






	public function afficherExperience()
	{
		echo 'Le Ranger a ';
		parent::afficherExperience();
		echo ' points d\'experience. <br/>';
	}
	public function afficherVie()
	{
		echo 'Le Ranger a ';
		parent::afficherVie();
		echo ' points de vie. <br/>';
	}
}


?>