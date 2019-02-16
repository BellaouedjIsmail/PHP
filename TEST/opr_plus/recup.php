<?php
/*Ce Script est relié à 'formilaire.php' consiste
  le forum et mm récupiratin des données */
var_dump($_POST);

$objet = new PDO('mysql:host=localhost;dbname=test','root','');

   $pdoStat = $objet->prepare('INSERT INTO Formulaire VALUES(NULL,:nom,:prenom,:sexe,:com,:groupe)');

   $pdoStat->bindValue(':nom',$_POST['FirstName'], PDO :: PARAM_STR);
   $pdoStat->bindValue(':prenom',$_POST['LastName'], PDO :: PARAM_STR);
   $pdoStat->bindValue(':sexe',$_POST['sexe'], PDO :: PARAM_STR);
   $pdoStat->bindValue(':com',$_POST['com'], PDO :: PARAM_STR);
   $pdoStat->bindValue(':groupe',$_POST['groupe'], PDO :: PARAM_STR);


   $insertisok = $pdoStat->execute();

   if($insertisok){
      $message = 'Thanks to you to be Active ';
      }
   else{
         $message = 'Errour : Retray Again Please !';
       }
       echo $message;
    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Afficher le contenu du formulaire</h1>
    <ul>
      <li><?php echo $_POST["FirstName"] ?>
      <li><?php echo $_POST["LastName"] ?>
      <li><?php echo $_POST["com"] ?>
      <li><?php echo $_POST["sexe"] ?>
      <li><?php echo $_POST["groupe"] ?>
    </ul>
  </body>
</html>
