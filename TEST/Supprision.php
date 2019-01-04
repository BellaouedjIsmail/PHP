
<?php

//ouverture d'une coonextion a la bdd test
$objet = new PDO('mysql:host=localhost;dbname=test','root','');
//preparation de la requète
 $pdoStat = $objet->prepare('DELETE  FROM SiteWeb WHERE ID = :num LIMIT 1');
//liaison de parametre nommé
  $pdoStat->bindValue(':num',$_GET['numContect'], PDO :: PARAM_INT);
  $supresionisok = $pdoStat->execute();

  if($supresionisok){
     $message = 'OUI c BON';
     }
  else{
        $message = 'Errour : Retray Again Please !';
      }
  echo $message;
?>
