<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Envoi formulaire en mail</title>
  </head>
  <body>
    <form class="" action="TemplateMail.php" method="post">
      <input type="text" name="nom" placeholder="Entrez votre nom...">
      <input type="text" name="prenom" placeholder="Entrez votre prenom...">
      <input type="mail" name="mail" placeholder="Entrez votre mail...">
      <input type="text" name="sujet" placeholder="Sujet">
      <textarea name="message" rows="8" cols="80" placeholder="Entrez votre message"></textarea>
      <button type="submit" name="button">Envoyer</button>
    </form>
  </body>
</html>
