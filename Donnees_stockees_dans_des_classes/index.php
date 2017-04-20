<?php
include'Personnage.php';
include'connectDb.php';
$bdd = connectDb();

$request = $bdd->prepare('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages');
$request->execute();
    

while ($perso = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.

{

  echo $perso['nom'], ' a ', $perso['forcePerso'], ' de force, ', $perso['degats'], ' de degats, ', $perso['experience'], ' d\'experience et est au niveau ', $perso['niveau'] , '<br />';

}

$request->closeCursor();




$request = $bdd->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages');


while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.

{

  // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.

  // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.

  $perso = new Personnage($donnees);

        

  echo $perso->nom(), ' a ', $perso->forcePerso(), ' de force, ', $perso->degats(), ' de degats, ', $perso->experience(), ' d\'experience et est au niveau ', $perso->niveau(), '<br />';

}

$request->closeCursor();