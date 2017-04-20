<?php 
class Personnage {
	private $id;
	private $nom;
	private $vie;
	private $force;
	private $intel;
	private $vitesse;
	private $agilite;
	private $degats;
	private $experience;
	private $type;
	private $lvl;
	private $description;
	

	/**
	* Constructeur
	* @param $data array différents attributs de l'objet
	**/
	public function __construct($datas = array())
	{
		$this->hydrate($datas);
	}

	/**
	* Fonction d'hydratation de l'objet User par l'appel des setters associés
	* @param $datas array différents attributs de l'objet
	**/
	public function hydrate(array $datas)
	{
		foreach ($datas as $key => $value)
		{
			$method = 'set'.ucfirst($key); //ucfirst foncion pour mettre en maj la première lettre
			if(method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}
	//**************** GETTERS ***************//	
	public function id()
	{
		return $this->id;
	}
	public function nom()
	{
		return $this->nom;
	}
	public function vie()
	{
		return $this->vie;
	}
	public function force()
	{
		return $this->force;
	}
	public function intel()
	{
		return $this->intel;
	}
	public function vitesse()
	{
		return $this->vitesse;
	}
	public function agilite()
	{
		return $this->agilite;
	}
	public function lvl()
	{
		return $this->lvl;
	}
	public function degats()
	{
		//c'est ici qu'on calcule les dégats
		if(force()>=intel() AND force()>=agilite())
		{
			$degats=force()*lvl();
		} 

		elseif(intel()>=force() AND intel()>=agilite())
		{
			$degats=intel()*lvl();
		}

		else
		{
			$degats=agilite()*lvl();
		}

		return $this->degats;
	}
	
	public function experience()
	{
		return $this->experience;
	}
	public function type()
	{
		return $this->type;
	}
	public function description()
	{
		return $this->description;
	}



	//**************** SETTERS ****************// 
	public function setId($id)
	{
		$id= (int) $id;
		$this->id = $id;
	}
	public function setNom($nom)
	{
		if(is_string($nom) && strlen($nom) <= 100)
		{
			$this->nom = $nom;
		}
		else throw new Exception('Le nom est trop long');
	}
	public function setVie($vie)
	{
		if($vie <= 20000)
		{
			$this->vie = $vie;
		}
		else throw new Exception('Trop de vie, max 20 000');
	}
	public function setForce($force)
	{
		if($force <= 1000)
		{
			$this->force = $force;
		}
		else throw new Exception('Trop de force, max 1 000');
	}
	public function setIntel($intel)
	{
		if($intel <= 1000)
		{
			$this->intel = $intel;
		}
		else throw new Exception('Trop intelligent, max 1 000');
	}
	public function setVitesse($vitesse)
	{
		if($vitesse <= 1000)
		{
			$this->vitesse = $vitesse;
		}
		else throw new Exception('Trop rapide, max 1 000');
	}
	public function setAgilite($agilite)
	{
		if($agilite <= 1000)
		{
			$this->agilite = $agilite;
		}
		else throw new Exception('Trop agile, max 1 000');
	}
	public function setExperience($experience)
	{
		if($experience <= 1000000000)
		{
			$this->experience = $this->experience + $experience;
		}
		else throw new Exception('Exp max : 1 000 000 000');
	}
	public function setLvl($lvl)
	{
		if($lvl <= 100)
		{
			$this->lvl = $this->lvl + $lvl;
		}
		else throw new Exception('Lvl max : 100');
	}
	public function setType($type)
	{
		if(is_string($type) && strlen($type) <= 100)
		{
			$this->type = $type;
		}
		else throw new Exception('Type zarbi (Je parle pas de moi)');
	}
	public function setDescription($description)
	{
		if(is_string($description) && strlen($description) <= 255)
		{
			$this->description = $description;
		}
		else throw new Exception('Description max 255 caracs, raconte pas ta vie');
	}


}




?>
