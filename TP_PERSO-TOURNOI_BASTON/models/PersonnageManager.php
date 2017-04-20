<?php
class PersonnageManager extends Manager {

	/**
	 * Class Constructor
	 */
	public function __construct($pdo)
	{
		parent::__construct($pdo);
	}

	/**
	* Récupère un personnage en fonction de son Id
	*
	* @param $id int
	*
	* @return Personnage
	**/
	public function getPersonnage($id){
		$req = $this->pdo->prepare('SELECT * FROM personnages WHERE id = :id');
		$req->execute(array(
			'id' => $id
			));
		if($datas = $req->fetch(PDO::FETCH_ASSOC)) return new Personnage($datas);
		else throw new Exception('Personnage non trouvée');
	}

	/**
	* Récupère la liste des objets de type personnage
	*
	* @return array of Personnage $array_of_personnage
	**/
	public function getAllPersonnage(){
		$array = array();
		$req = $this->pdo->prepare('SELECT * FROM personnages');
		$req->execute();
		while ($data = $req->fetch()){
			$array[] = new Personnage([
				'id' => $data['id'],
				'nom' => $data['nom'],
				'vie' => $data['vie'],
				'force' => $data['force'],
				'intel' => $data['intel'],
				'vitesse' => $data['vitesse'],
				'lvl' => $data['lvl'],
				'agilite' => $data['agilite'],
				'degats' => $data['degats'],
				'experience' => $data['experience'],
				'type' => $data['type'],
				'description' => $data['description']
				]);
		}
		return $array;
	}


	//ajoute un perso à la bdd avec les paramètres envoyés
	public function add(Personnage $perso)
	{

	    $q = $this->pdo->prepare('INSERT INTO personnages(nom, vie, force, intel, vitesse, agilite, degats, lvl, experience, type, description) VALUES(:nom, :vie, :force, :intel, :vitesse, :agilite, :degats, :lvl, :experience, :type, :description)');


	    $q->bindValue(':nom', $perso->nom());

	    $q->bindValue(':vie', $perso->vie(), PDO::PARAM_INT);

	    $q->bindValue(':force', $perso->force(), PDO::PARAM_INT);

	    $q->bindValue(':intel', $perso->intel(), PDO::PARAM_INT);

	    $q->bindValue(':vitesse', $perso->vitesse(), PDO::PARAM_INT);

	    $q->bindValue(':agilite', $perso->agilite(), PDO::PARAM_INT);

	    $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);

	    $q->bindValue(':lvl', $perso->lvl(), PDO::PARAM_INT);

	    $q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);

	    $q->bindValue(':type', $perso->type());

	    $q->bindValue(':description', $perso->description());

	    $q->execute();
	}


	//supprime
	public function delete(Personnage $perso)
  	{

    	$this->pdo->exec('DELETE FROM personnages WHERE id = '.$perso->id());

  	}

  	//met à jour
  	public function update(Personnage $perso)
  	{

	    $q = $this->pdo->prepare('UPDATE personnages SET vie = :vie, force = :force, intel = :intel, vitesse = :vitesse, agilite = :agilite, degats = :degats, lvl = :lvl, experience = :experience, type = :type, description = :description WHERE id = :id');

	    $q->bindValue(':vie', $perso->vie(), PDO::PARAM_INT);

	    $q->bindValue(':force', $perso->force(), PDO::PARAM_INT);

	    $q->bindValue(':intel', $perso->intel(), PDO::PARAM_INT);

	    $q->bindValue(':vitesse', $perso->vitesse(), PDO::PARAM_INT);

	    $q->bindValue(':agilite', $perso->agilite(), PDO::PARAM_INT);

	    $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);

	    $q->bindValue(':lvl', $perso->lvl(), PDO::PARAM_INT);

	    $q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);

	    $q->bindValue(':type', $perso->type());

	    $q->bindValue(':description', $description->type());

	    $q->bindValue(':id', $perso->id(), PDO::PARAM_INT);

	    $q->execute();

  	}

}