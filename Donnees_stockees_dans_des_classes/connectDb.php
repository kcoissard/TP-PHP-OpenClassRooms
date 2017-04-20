<?php  function connectDb(){

      $host="localhost"; // ou sql.hebergeur.com

      $dbname="jeu_combat";
  try {
       $bdd=new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
       
       
       return $bdd;
      } catch (Exception $e) {
       die('Erreur : VOUS NETES PAS CONNECTE '.$e->getMessage());
  }

}

?>
