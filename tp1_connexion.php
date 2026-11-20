<?php
/*
  TP 1 – SE CONNECTER À LA BASE DE DONNÉES

  1. Se connecter à la base ludotheque avec PDO
     (serveur : localhost, utilisateur : root, mot de passe : root avec MAMP, vide avec WAMP/XAMPP).
  2. Activer l'affichage des erreurs SQL.
  3. Afficher « Connexion réussie ! » si tout va bien.
  4. En cas d'erreur, afficher le message d'erreur et arrêter le script.

  Expérience : remplacer "ludotheque" par "ludotek". Quel message obtenez-vous ?
*/
try {
  $base = new PDO('mysql:host=localhost;dbname=ludotheque;charset=utf8mb4', 'root', '');
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo " Connexion réussie !";
} catch (PDOException $e) {
  die('Erreur : ' . $e->getMessage());
}
