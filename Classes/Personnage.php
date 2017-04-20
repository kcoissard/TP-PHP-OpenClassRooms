<?php 

/**
** Classe Personnage
** Auteur : Kévin
** date 03/08/2016
**/

class Personnage
{
	private $_force=10;
	private $_experience=0;
	private $_degats=5;
	private $_vie=50;
	private $_position='Debout';


	public function gagnerExperience()
	{
		$this->_experience=$this->_experience+1;
	}
	public function etreBlesse()
	{
		echo 'SBAAAM ! <br />';
		$this->_vie=$this->_vie-2;
	}




	public function afficherExperience()
	{
		echo $this->_experience;
	}
	public function afficherVie()
	{
		echo $this->_vie;
	}
}


?>