<?php 

/**
** Classe Barbare
** Auteur : Kévin
** date 03/08/2016
**/

class Barbare extends Personnage
{


	public function gagnerExperience()
	{
		parent::gagnerExperience();
	}
	public function etreBlesse()
	{
		parent::etreBlesse();
	}




	public function taperBarbare(Barbare $barbare_ennemi)
	{
		$barbare_ennemi->_vie=$barbare_ennemi->_vie-5;
	}




	public function afficherExperience()
	{
		echo 'Le Barbare a ';
		parent::afficherExperience();
		echo ' points d\'experience. <br/>';
	}
	public function afficherVie()
	{
		echo 'Le Barbare a ';
		parent::afficherVie();
		echo ' points de vie. <br/>';
	}
}


?>