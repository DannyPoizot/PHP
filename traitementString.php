<?php
$phrase = "Coucou, je suis une phrase";

echo strlen($phrase);

echo "<br>". $phrase;

$replace = str_replace("phrase", "nouvelle phrase", $phrase);

echo "<br>";

echo "<br>".$replace;

echo "<br>";

$melange = str_shuffle($phrase);

echo "<br>" . $melange;

echo "<br>";

date_default_timezone_set("Europe/Paris");
echo "<br>" . "Nous sommes le " . date("d-m-y H:i:s");



?>
