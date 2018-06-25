<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 10 Partie 5 PHP</title>
  </head>
  <body>
    <?php
    // Je créée mon tableau associatif
      $hautsDeFranceDepartmentList = array('02' => 'Aisne','59' => 'Nord','60' => 'Oise','62' => 'Pas-de-calais','80' => 'Somme');
        // Puis j'utilise une boucle foreach qui va me stocker $indexnumber et sa valeur associée dans $element à chaque boucle
        foreach($hautsDeFranceDepartmentList as $departmentNumber => $department) { ?>
          <!-- Puis on affiche le tout en concaténant -->
        <p><?= 'Le département ' . $department . ' a pour numero ' . $departmentNumber; ?></p>
        <!-- On peut aussi utiliser -->
        <p><?php echo sprintf('Le département %s a pour numero %s',$department,$departmentNumber); ?></p>
      <?php } ?>
  </body>
</html>
