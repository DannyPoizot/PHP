<?php
function direBonjour($nom){
  echo "Bonjour " . $nom . "<br>";
}

direBonjour("Laura");
direBonjour("Elodie");
direBonjour("Chris");
direBonjour("Guigui");

echo "<br>";

function volumeCone($rayon, $hauteur){
  echo ($rayon * $rayon * 3.14 * $hauteur) * 1/3;
}

volumeCone(7, 2);

echo "<br>";

function calculAge($date){
  $currentDate = date("d-m-Y");
  $age = date_diff(date_create($date), date_create($currentDate));
  echo "<br>Votre age est " . $age -> format("%Y");
}
calculAge("19-11-1991");
?>
