<?php
  try {
    // Objet PDO 
    // Instanciation de la connexion 
  $pdo = new PDO("mysql:dbname=profiles;host=localhost", "root", "",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  // rapport d'erreurs sous forme d'exceptions
  catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
  }
  define("RACINE_SITE","/");
?>