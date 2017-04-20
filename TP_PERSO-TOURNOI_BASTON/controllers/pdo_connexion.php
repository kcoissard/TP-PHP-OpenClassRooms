<?php

//Connexion à la base de donnée 
$host="localhost"; 

$dbname="jeu_combat";
try
{
	$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
} catch (Exception $e) {
       die('Erreur : VOUS NETES PAS CONNECTE '.$e->getMessage());
}