<!--
  TP 4 – TRIER ET FILTRER (base ludotheque, table jeu)


Classement : tous les jeux, du mieux noté au moins bien noté.
     Format : Tetris : 19/20


  2. Jeux récents : les jeux sortis après 2015, du plus ancien au plus récent.
     Format : Fortnite (2017)


  3. Jeux de sport : afficher le titrebre de jeux de sport, puis leur liste.
     Format : 2 jeu(x) de sport :
-->
<!DOCTYPE html>
<html lang="fr">


<head>
   <meta charset="utf-8">
   <title>TP 4 - Trier et filtrer</title>
</head>


<body>


   <?php
   require('connexion.php');
   ?>


   <h2>Classement</h2>
   <ul>
      <?php
      $req1 = $base->query('SELECT titre, note FROM jeu ORDER BY note DESC');
      while ($jeu = $req1->fetch()) {
         echo '<li>' . $jeu['titre'] . ', note :' . $jeu['note'] . '/20</li>';
      }
      ?>
   </ul>


   <h2>Jeux récents</h2>
   <ul>
      <?php
      $req2 = $base->query('SELECT titre, annee FROM jeu WHERE annee > 2015 ORDER BY annee ASC');
      while ($jeu = $req2->fetch()) {
         echo '<li>' . $jeu['titre'] . ', année :' . $jeu['annee'] . '</li>';
      }
      ?>
   </ul>


   <h2>Jeux de sport</h2>
   <?php
   $req3 = $base->query("SELECT titre FROM jeu WHERE genre = 'Sport'");
   echo 'Nombre de jeux :' . $req3->rowCount();
   ?> <ul>


      <?php while ($jeu = $req3->fetch()) {
         echo '<li>' . $jeu['titre'] . '</li>';
      } ?>
   </ul>
</body>


</html>