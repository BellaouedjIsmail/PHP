<?php
/*Ce Script est relié à 'recup.php' consiste
  le forum et mm insertion des données */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Formulaire</h1>
    <form action="recup.php" method="post">
      <p>
        <label for="Nom"> Nom </label>
        <input type="text"  name="FirstName" value="Your Name">

      </p>
      <p>
        <label for="Prenom">Prenom </label>
        <input type="text"  name="LastName" value="Your Last Name  ">
      </p>
      <p>
        <label for="Commentaire">Commentaire </label>
        <textarea name="com" id="Commentaire" cols="30" rows="10"></textarea>
      </p>
      <p>Vous etes :</p>
      <p>
        <label for="sexe">Homme </label>
        <input type="radio"  name="sexe" value="h" checked="cehcked">
        <label for="sexe">Femme </label>
        <input type="radio"  name="sexe" value="f" checked="cehcked">

      </p>
      <label for="groupe">Groupe</label>
      <select name="groupe">
          <option value="1">Famille</option>
          <option value="2">Ami</option>
          <option value="3">Travail</option>
          <option value="4">Autres</option>
      </select>

      <p><input type="submit" value="Enregitrer"></p>

    </form>
  </body>
</html>
