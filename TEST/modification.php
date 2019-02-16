<?php

//ouverture d'une coonextion a la bdd test
 $objet = new PDO('mysql:host=localhost;dbname=test','root','');
//preparation de la requète
 $pdoStat = $objet->prepare('SELECT * FROM siteweb WHERE ID = :num ');
//liaison de parametre nommé
 $pdoStat->bindValue(':num',$_GET['numContect'], PDO :: PARAM_INT);
 $modificationisok = $pdoStat->execute();

 $Resultats = $pdoStat->fetch();
 var_dump($Resultats );
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
     <b><i><h1>Modification</i></h1></b>
     <form action="Modifier.php" method="post" >
       <input type="text"  name="numContect" value="<?= $Resultats['ID'];?>">
      <p>
        <label for="Nom"> Nom </label>
        <input type="text"  name="FirstName" value=" <?= $Resultats['Nom'];?> ">

      </p>
      <p>
        <label for="Prenom">Prenom </label>
        <input type="text"  name="LastName" value=" <?= $Resultats['Prenom'];?> ">
      </p>

      <p><input type="submit" value="Enregitrer"></p>

     </form>

    </body>
  </html>
