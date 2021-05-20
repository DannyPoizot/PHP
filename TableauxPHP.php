<?php
$prenoms = array("Elodie", "Laura" , "Guillaume" , "Chris" , "Aurélien" , "Benoit");
$prenoms[3] = "Jean";
echo $prenoms[3];

$tabAsso = array("Prénom" => "Paul", "Nom" => "Durand", "Adresse" => "20 rue de la paix", "Ville" => "Paris");
$tabAsso["Ville"] = "Caen";
echo $tabAsso["Ville"];

for($i = 0; $i < count($prenoms); $i++){
  echo $prenoms[$i] . "<br>";
}

echo "<br>";

foreach ($tabAsso as $value) {
  echo $value . "<br>";
}
echo "<br>";

foreach ($tabAsso as $key => $value) {
  echo $key . ": " . $value . "<br>";
}
echo "<br>";

if(array_key_exists("Nom", $tabAsso)){
   echo "La clé existe";
} else {
  echo "La clé n'existe pas";
}

echo "<br>";

$legumes = array("Tomates", "Courgettes", "Pommes de terre");

if(in_array("Tomates", $legumes)){
  echo "Le légume est dans le tableau";
} else {
  echo "Le légume n'est pas dans le tableau";
}
echo "<br>";

$position = array_search("Courgettes", $legumes);
echo $position;

echo "<br>";
var_dump($legumes);

unset($legumes[2]);
var_dump($legumes);

echo "<br>";

$i = 0;
$tableau = array();
while($i < 10){
  $nbAleat = rand(1, 50);
  $tableau[] = $nbAleat;
  $i++;
}
var_dump($tableau);

if(in_array(42, $tableau)){
  echo "Le chiffre 42 existe";
} else {
  echo "Le chiffre 42 n'existe pas";
}




?>
