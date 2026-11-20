<!--
  TP 2 – COMPTER LES JEUX

  Afficher : Il y a 10 jeux dans la ludothèque.
  (le nombre doit venir de la base, pas être écrit à la main)

  Expérience : ajouter un jeu dans phpMyAdmin puis recharger la page.
-->
<?php require 'connexion.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>TP 2 - Compter les jeux</title>
</head>

<body>
  <?php
  $base = new PDO('mysql:host=localhost;dbname=ludotheque', 'root', '');
  $requete = $base->query('SELECT COUNT(*) FROM jeu');
  $nbr = $requete->fetchColumn();
  echo "Il y a " . $nbr . " jeux dans la ludothèque.";
  ?>
</body>

</html>