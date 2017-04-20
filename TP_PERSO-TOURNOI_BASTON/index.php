<?php

/**
* Chargement des classes
**/ 
require 'models/Myautoloader.php';
require 'connexion.php';
$myautoloader = new Myautoloader();
$myautoloader->register();
require_once 'controllers/instanced_managers.php';
?>


<!DOCTYPE html>
<html>

	<head> 


		<meta charset="utf-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="assets/css/bootstrap.css"/>
		<link rel="stylesheet" href="assets/css/style.css"/>
		<link  rel="stylesheet" href="assets/css/js/bootstrap.js"/>
		<title>BAAASTON Game</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>

	<body style=" margin-top: 0;
	  		padding-top: 0;
	  		background: url(assets/images/wallpaper6.jpg) no-repeat center; 
  			background-attachment: fixed;
  			-webkit-background-size: cover; 
  			background-size: 100% 100%; 
  			min-height: calc(100vh - 40px);">
		

		<div>
			<?php
				include('navbar.php');

			//Debugging
			ini_set('display_errors','On');
			error_reporting(E_ALL | E_STRICT);

			//include('view/liste_personnages.php');

			// Les différentes Routes.
			if(isset($_GET['page'])) 
			{
				$page = htmlspecialchars($_GET['page']);
				switch ($page) 
				{
					case 'home': 
						$page = 'home';
						break;
					case 'liste_personnages' :
						$page = 'liste_personnages';
						break;
					case 'creer_perso' :
						$page = 'creer_perso';
						break;
					default :
						$page = '404';
						break;
				}
			}
			 else {
				$page = 'liste_personnages';
			}
			include('view/'.$page.'.php');
?>
		</div>


	</body>
</html>