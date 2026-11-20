<?php
/*
  CONNEXION.PHP
  Recopier ici le code de connexion du TP 1, sans le message "Connexion réussie !".
  Ce fichier sera inclus dans les TP 2 à 9 avec : require 'connexion.php';
*/

try {
  $base = new PDO('mysql:host=localhost;dbname=ludotheque;charset=utf8mb4', 'root', '');
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('Erreur : ' . $e->getMessage());
}
