<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tchat Ajax</title>
  </head>
  <body>
    <div id="messages">
    </div>

 <form method="POST" action="traitementMsg.php">
     <p>Pseudo :</p> <input type="text" name="pseudo" id="pseudo" /><br/>
     <p>Message :</p> <textarea name="message" id="message"></textarea><br/>
     <input type="submit" name="submit" value="Envoyez un message" id="envoi"/>
 </form>
  </body>
</html>
