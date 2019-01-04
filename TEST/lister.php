
<?php
//ouverture d'une coonextion a la bdd test
$objet = new PDO('mysql:host=localhost;dbname=test','root','');
//preparation de la requète
 $pdoStat = $objet->prepare('SELECT * FROM SiteWeb');
 $Listerisok = $pdoStat->execute();

 if(!$Listerisok){
       $message = 'Errour : Retray Again Please !';
     }
  $Resultats = $pdoStat->fetchAll();

//ar_dump($Resultats );
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>YONKO</title>
   </head>
   <body>
     <h1>LES Données de bdd</h1>
     <ul>
       <?php foreach ($Resultats  as $SiteWeb):?>
        <li>
          <?= $SiteWeb['Nom'] ?> <?= $SiteWeb['Prenom'] ?>

          <a href="Supprision.php?numContect=<?= $SiteWeb['ID']?>"> Supprimer </a>
          <a href="modification.php?numContect=<?= $SiteWeb['ID']?>"> Modifier </a>

        </li>
      <?php endforeach; ?>

     </ul>
   </body>
 </html>
