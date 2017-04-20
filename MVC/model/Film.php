<?php

class Film // MAJUSCULE A Film car c'est une classe
{
	private $titre;

	function __construct($untitre){
		$this->titre=$untitre;
	}

	public function getTitre(){
		return $this->titre;
	}

}


?>