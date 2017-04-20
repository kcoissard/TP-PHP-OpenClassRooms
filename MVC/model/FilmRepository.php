<?php

include('Film.php');

class FilmRepository // MAJUSCULE A Film car c'est une classe
{
	private $pdo;

	function __construct(PDO $unpdo){
		$this->pdo=$unpdo;
	}

	public function getAll(){
		$query = $this->pdo->prepare('SELECT * FROM `FILMS`ORDER BY nom_film LIMIT 0 , 15'); // requête SQL
	 	$query->execute(); // paramètres et exécution
	 	$tabFilm=array();

	 	while($donnees = $query->fetch()){
	 		$film= new Film([
	 			'titre' =>$donnees['nom_film']]);
	 		array_push($tabFilm, $film);
	 	}

	 	return $tabFilm;
 	}
}
?>
