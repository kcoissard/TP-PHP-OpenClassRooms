<?php 

/**
** Classe Personnage
** Auteur : Kévin
** date 03/08/2016
**/

class Personnage
{	
	//on déclare la force du perso
	private $_force=0;
	const FORCE_PETITE=10;
	const FORCE_MOYENNE=50;
	const FORCE_GRANDE=100;

	private $_experience=0;
	const PETITE_XP=1;
	const MOYENNE_XP=5;
	const GRANDE_XP=10;

	private $_vie=50;

	private $_degats=5;

	private static $_compteur=0;
	

	private static $_texteEntree = 'Un nouveau personnage  apparait :';
	private static $_nbCoups = 0;


		public function __construct($forceDemandee, $xpDemandee)
		{
			$this->setForce($forceDemandee);
			$this->setExperience($xpDemandee);
			self::nouveauPerso();//Un nouveau personnage apparait :
			echo '<br />';
			self::$_compteur++;
		}


		/*SETTERS*/
		public function setForce($force)
		{
			if(in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
			{
				$this->_force=$force;
			}
		}
		public function setExperience($experience)
		{
			if(in_array($experience, [self::PETITE_XP, self::MOYENNE_XP, self::GRANDE_XP]))
			{
				$this->_experience=$experience;
			}
		}

		/*GETTERS*/
	    public function getForce()
	    {
	        return $this->_force;
	    }
	    public function getExperience()
	    {
	        return $this->_experience;
	    }
	    public function getVie()
	    {
	        return $this->_vie;
	    }

	    public function getCompteur()
	    {
	    	return self::$_compteur;
	    }


	    /* AFFICHAGE */
		public function afficherExperience()
		{
			echo 'XP : ';
			echo self::getExperience();
			echo ' points d\'experience. <br/>';
		}
		public function afficherVie()
		{
			echo 'HP : ';
			echo self::getVie();
			echo ' points de vie. <br/>';
		}
		public function afficherForce()
		{
			echo 'Force : ';
			echo self::getForce();
			echo ' points de force. <br/>';
		}



    // Un nouveau perso apparait
	public function nouveauPerso()
	{	
		self::$_texteEntree;
		echo ' C\'est un ' , get_class($this) , "\n";
		echo '<br />';
		self::afficherVie();//vie départ
		self::afficherExperience();//xp barbare
		self::afficherForce();//Force
	}

	

	public function taper(Personnage $perso, Personnage $perso_ennemi)
	{	

		self::$_nbCoups++;
		echo 'Mouvement numero : ';
		echo self::$_nbCoups.' <br />';

		echo ' Le '.get_class($perso).' frappe le '.get_class($perso_ennemi).' !';
		$perso_ennemi->_vie=$perso_ennemi->_vie-(0.2*$perso->_force);
		echo ' Le '.get_class($perso_ennemi).' a desormais '.$perso_ennemi->_vie.' points de vie. <br />';

		self::gagnerExperience($perso);
		echo ' Le '.get_class($perso).' a gagne '.$perso->_experience.' points d\'xp ! <br /> <br />';

	}

	
	//Gagner 1 xp
	public function gagnerExperience(Personnage $perso)
	{
		$perso->_experience=0.1*$perso->_force;
	}


	
}


?>