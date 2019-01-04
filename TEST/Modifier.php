
<?php

//ouverture d'une coonextion a la bdd test
$objetPdo = new PDO('mysql:host=localhost;dbname=test','root','');
//preparation de la requète
// $pdoStat = $objet->prepare('UPDATE test SET Nom=:nom,Prenom=:prenom WHERE ID=:num LIMIT 1');
$pdoStat = $objetPdo->prepare('UPDATE SiteWeb SET Nom=:nom,Prenom=:prenom
            WHERE ID=:num LIMIT 1');


//liaison de parametre nommé
  $pdoStat->bindValue(':num',$_POST['numContect'], PDO :: PARAM_INT);
  $pdoStat->bindValue(':nom', $_POST['FirstName'], PDO :: PARAM_STR);
  $pdoStat->bindValue(':prenom',$_POST['LastName'], PDO :: PARAM_STR);

  $modificationisok = $pdoStat->execute();

  $Resultats = $pdoStat->fetch();
  //var_dump($Resultats );

  if(  $modificationisok){
     $message = 'OUI c BON: la modification est bonne';
     }
  else{
        $message = 'Errour : Retray Again Please !';
      }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Resultat de la modification</h1>
    <p><?=  $message ?></p>
  </body>
</html>
