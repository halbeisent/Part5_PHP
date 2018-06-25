<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 9 Partie 5 PHP</title>
</head>
<body>
  <?php
  // Je créée mon tableau associatif
  $hautsDeFranceDepartmentList = array('02' => 'Aisne','59' => 'Nord','60' => 'Oise','62' => 'Pas-de-calais','80' => 'Somme');
    // Puis j'utilise une boucle foreach à laquelle je demande de me stocker la valeur de $hdfDpt dans $element à chaque boucle
    foreach($hautsDeFranceDepartmentList as $department) { ?>
      <!-- Puis je l'affiche -->
      <p><?= $department ?></p>
    <?php } ?>
  </body>
  </html>
