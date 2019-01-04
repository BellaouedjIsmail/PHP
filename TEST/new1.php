

  <?php/*
$variable = 'hellow world!<br \>';

echo ' <br \>hellow world! <br \>';
echo ' <br \>',$variable;
$age = 20;
if ($age <20){echo 'oui c sur <br \>';}
  else {echo 'non,c pas le cas <br \>';};
  $n = 1;
//===========================================================================//

/*while ($n <20)
   {
	  echo 'il vas boucler ',20-$n,'<br \>';
      $n = $n+1;
   }
for ($n=1;$n<21;$n++)
   {  echo 'il vas boucler :',20-$n,'<br \>'; }
*/
//===========================================================================//
//Functions
/*function fact($nombre )
{
	$n=1 ; $k=1;
	while ( $k <= $nombre )
	{
        $n=$n * $nombre;
        $n=$n+1;
		$k++;
	}
	echo 'le fact de ',$nombre,' est :...';
 return $n;
}
//===========================================================================//
// formulaire & données
//try with usual function
  /*$_GET[] 'from URL'*/

/*echo 'We will see our numbre  <br  />';
echo $_GET['nombre'], '<br  />';
echo 'now we will see our coefficient <br  />';
echo $_GET['coefficient'] ,'<br  />';

if (!isset($_GET['nom']) AND !isset($_GET['pseudo']))
{
  ?>
  <a href="?nombre=19 & coefficient=3 & nom=ismail & pseudo=yonko">Hellow World! </a>
<?php

if (isset($_GET['nom']) AND isset($_GET['pseudo']))
 {
   echo 'We will see your name  <br  />';
   echo $_GET['nom'], '<br  />';
   echo 'now we will see your pseudo <br  />';
   echo $_GET['pseudo'], '<br  />';
 }
   /*forum  $_POST*/
  /*if (isset($_POST['ch']))
  {
    $checkch=intval($_POST['ch']);
    $chiff=48;
    echo  'TU vas ajouter ',$_POST['ch'],' à 48 et la resultat est: ',$chiff+ $checkch ;
  }
  ?>
  <form action="" method="post">
    <input type='text' name='ch' value="TON NOMBRE ICI!" />
    <input type="submit" name="envoyer" value="AJouter à 48 !"  />

  </form>
<?php
//---------------------------------------------------------------------------//




*/
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

   <form action="new2.php" method="post">
    <p>
      <label for="Nom"> Nom </label>
      <input type="text" name="FirstName">
    </p>
    <p>
      <label for="Prenom">Prenom </label>
      <input type="text" name="LastName">
    </p>
    <p>
      <label for="Date de Naissance">Date de Naissance</label>
      <input type="text" name="Date_de_Naissance">
    </p>
    <p><input type="submit" value="Sign up"/p>

   </form>

  </body>
</html>
