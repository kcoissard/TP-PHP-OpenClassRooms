<?php 
include('./controllers/liste_personnages_controller.php');
?>

<div id="perso_list">
	<div class="persos">
	<?php
		foreach ($persos as $perso) // On fait une boucle dans notre array, et on prend un par un chaque perso
		{
			?>

				<div class="col-lg-2 col-sm-6" style="text-align:center; margin-top:5px; ">
				  	<div class="thumbnail-perso" >
						<div class="panel panel-default">
					    	<div class="panel-heading">
					    		<div class="panel-title" > 
					    		 	<img src="<?php echo "assets/images/".$perso->type()."_tete.png"; ?>" width=80  />
						    		<h3><?= $perso->nom(); ?> <br /><span style="font-size:x-small;"><?php echo $perso->type(); ?></span></h3> 
						    	
						    		<?php echo '<b>Level : '.$perso->lvl().'</b>'?> <?php echo ' (+'.$perso->experience().'xp) <br />'; ?>
					    		</div>
					    		
							</div>
					  		<div class="panel-body">
					  			<div class="desc">
						  			<img  src="assets/images/icone-coeur.png" width=30  /><?php echo $perso->vie().'<br />'; ?>
						  			<?php 

						  			$force=$perso->force();
						  			$intel=$perso->intel();
						  			$agilite=$perso->agilite();

						  			if($force>=$intel AND $force>=$agilite)
						  				{echo '<b>Force : '.$perso->force().'</b><br />';}
						  			else{echo 'Force : '.$perso->force().'<br />';} 

						  			if($intel>=$force AND $intel>=$agilite)
						  				{echo '<b>Intelligence : '.$perso->intel().'</b><br />';}
						  			else{echo 'Intelligence : '.$perso->intel().'<br />';} 
						  			

						  			if($agilite>=$force AND $agilite>=$intel)
						  				{echo '<b>Agilité : '.$perso->agilite().'</b><br />';}
						  			else{echo 'Agilité : '.$perso->agilite().'<br />';} 

						  			 echo 'Vitesse : '.$perso->vitesse().'<br />'; ?>
						  		</div>
								
								<a style="margin-top:5px;" href="index.php?page=home&section=fiche_perso&perso_id="<?php $perso->id(); ?>" class="btn btn-default"> Fiche perso </a>  	
							</div>
						</div>
					</div>
				</div>

			<?php
			// Fin affichage de tous les utilisateurs
		} ?>
	</div>
</div>
