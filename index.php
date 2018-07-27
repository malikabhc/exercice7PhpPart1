<?php
  $lastname = 'B.';
  $firstname = 'Malika';
  $age = 26;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
      <?php
        echo 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans.';
      ?>
    </p>
<!-- AUTRE POSSIBILITE
<p>Bonjour <?php echo $lastname . ' ' . $firstname ?>, tu as <?php echo $age ?> ans.</p>
-->
  </body>
</html>
