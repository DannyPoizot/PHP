<?php

  if(empty($_POST["nom"]) AND empty($_POST["surname"])){
    echo "Vous n'avez pas rempli un champ";
  } else {
    echo $_POST["nom"] . "<br>" . $_POST["surname"];
  };
  if(isset($_post["mot_de_passe"]) AND $_post["mot_de_passe"] == "diantre"){
    echo "<br>  Mot de passe correct";
  } else {
    echo "<br> Mot de passe incorrect";
  }

?>
