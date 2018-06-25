<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8 Partie 5 PHP</title>
</head>
<body>
  <?php
  // Je créée mon tableau
  $monthsList = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
  // Puis j'utilise une boucle foreach (plus adaptée aux tableaux) en lui demandant de me stocker à chaque boucle la valeur de $monthsList dans la variable $month
  foreach($monthsList as $month) {?>
    <!-- Puis je l'affiche -->
    <p><?= $month ?></p>
  <?php } ?>
</body>
</html>
