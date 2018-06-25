<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6 Partie 5 PHP</title>
  </head>
  <body>
    <?php
    // Je créée le tableau associatif
      $hautsDeFranceDepartmentList = array('02' => 'Aisne','59' => 'Nord','60' => 'Oise','62' => 'Pas-de-calais','80' => 'Somme');
    ?>
    <!-- Puis j'affiche la valeur ayant pour clé 59 -->
    <?= $hautsDeFranceDepartmentList['59']; ?>
  </body>
</html>
