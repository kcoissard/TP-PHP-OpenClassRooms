<?php

 	include('connectDb.php');
   include('../model/FilmRepository.php');
   $filmRepository= new FilmRepository($bdd);

   
  $films=$filmRepository->getAll();


	$titre='Liste Films';

//	ob_start();
?>
<table border>
        <tr>
            <td><strong><?php echo $titre; ?></strong></td>
        </tr>

        <?php
	foreach($films as $film) {
			?>
	
	            <tr>
	                <td>
	                    <?php echo $film->getTitre(); ?>
	                </td>
	            </tr>
	            <?php
			} ?>
    </table>

<?php
//	$contenu=ob_get_clean();
	?>