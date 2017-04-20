<?php
	$titre='Welcome';

	ob_start();
?>

<p>Ceci est le contenu</p>

<?php
	$contenu=ob_get_clean();

?>