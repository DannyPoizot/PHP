<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Texte PHP</title>
  </head>
  <body>
    <h1>Affichage de texte en PHP</h1>

      <p>Ce texte a été écrit uniquement en HTML (Bon, jusque là, trop facile !)</p>

      <?php
        echo "Ce texte a été écrit uniquement en PHP (Un peu plus ardu mais accessible !)";
       ?>

       <p>Aujourd'hui nous sommes le <?php date_default_timezone_set("Europe/Paris"); echo date("d-m-y h:i:s"); ; ?></p>
  </body>
</html>
