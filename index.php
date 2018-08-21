<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <!--Création d'un formulaire simple avec get en méthode-->
    <form action="user.php" method="GET">
      <label for="lastName">Votre nom: </label><input type="text" id="lastName" name="lastName" placeholder="nom" /><!--Champs nom-->
      <label for="firstName">Votre prénom: </label><input type="text" id="firstName" name="firstName" placeholder="prénom" /><!--Champs prénom-->
      <input type="submit" value="Page suivante" />
      <!--Le clic "envoyer" enverra à user.php les données saisie dans l'url
      car utilisation de GET dans la méthode du formulaire-->
    </form>
  </body>
</html>
