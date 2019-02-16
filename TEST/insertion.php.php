
<?php
 /*Ce code la est pour la base de donnée est reliée grace a
   //form action="new2.php" avec le code de new2.php->
  'method PDO' cette method est efficace et meme est nouvelle*/
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <b><i><h1>Inscription</i></h1></b>
   <form action="new2.php" method="post">
    <p>
      <label for="Nom"> Nom </label>
      <input type="text" name="FirstName">
    </p>
    <p>
      <label for="Prenom">Prenom </label>
      <input type="text" name="LastName">
    </p>

    <p><input type="submit" value="Sign up"></p>

   </form>

  </body>
</html>
