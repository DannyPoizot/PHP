<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calcul d'une moyenne</title>
  </head>
  <body>
    <?php
    $html = 15;

    $javascript = 10;

    $css = 12;

    $result = ($html + $javascript + $css) / 3;
    echo "Votre moyenne est de " . $result;

    if($result >= 10){
      echo nl2br("\nVous avez au-dessus de la moyenne, bravo !");
    } else {
      echo "<br>Vous avez en dessous de la moyenne, dommage !";
    }



     ?>
  </body>
</html>
