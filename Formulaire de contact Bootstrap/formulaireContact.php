<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Formulaire de contact</title>
  </head>
  <body>
    <div class="container">
        <h1>Contact</h1>
          <form id="valid">
            <fieldset>
              <div class="form-group">
                <label for="nom">Entrez votre nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Exemple : Dupont">
              </div>
              <div class="form-group">
                <label for="prenom">Entrez votre prénom</label>
                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Exemple : Martin">
              </div>
              <div class="form-group">
                <label for="email">Entrez votre mail</label>
                <input type="email" class="form-control" id="email" name="mail" placeholder="exemple@exemple.com">
              </div>
              <div class="form-group">
                <label for="password">Mot de Passe</label>
                <input type="password" class="form-control" name="password" id="password">
              </div>
              <div class="form-group">
                <label for="confirmPassword">Confirmez votre mot de passe</label>
                <input type="password" class="form-control" name="confirm" id="confirmPassword">
              </div>
              <div class="form-group">
                <label for="selection">Sujet</label>
                <select id="selection" class="form-control" name="choice">
                  <option value="">Sélectionnez un sujet</option>
                    <option value="Vieille">Vieille</option>
                    <option value="Maison">Maison</option>
                    <option value="En bois">En bois</option>
                </select>
              </div>
              <div class="form-group">
                <label for="message"></label>
                <textarea class="form-control" id="message" name="message" rows="8" cols="80"></textarea>
              </div>
              <input class="btn border rounded" type="submit" name="button" value="Envoyer">
            </fieldset>
          </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="js/contact-script.js"></script>

  </body>
</html>
