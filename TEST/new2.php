<?php
/* $c="yonko";$d=0;

 if (isset($_POST['UserName']) AND isset($_POST['PasseWord']))
 {
    if ($_POST['PasseWord']==$c) {
      echo 'c\'est bon bien venue MR.',$_POST['UserName'];$d=1;
    }
    else {
      echo "DZL resseayer encore!!";
    }
 }
if($d==0){
?>
<form action="" method="post">
  <input type="text" name="UserName" value="User Name">;
  <input type="text" name="PasseWord" value="Passe Word">
  <input type="submit" name="envoyer" value="Submit">
</form>

<?php
}
else {
?>
<h1> Bien venue à la page sucurisée </h1>
<?php
 echo 'bon! voilà ce espace vous pouvez trouvez vos données personneles et au
      meme temps personne d\'autre pourra accédé ^_^ ';
}

 ?>*/
 //==========================================================================//

 // session
 session_start();
 /*if (isset($_POST['UserName'])) {
   $Prenom = mysql_escape_string($_POST['UserName']);
   $_SESSION['Prenom']=$Prenom;
  if (isset($_SESSION['Prenom'])) {
    echo 'tu t\'appele :',$_SESSION['Prenom'];
  }
  echo $_POST['UserName'];
}*/
//===========================================================================//

// cookie
/*if (isset($_POST['UserName'])) {
  $Prenom = mysql_escape_string($_POST['UserName']);
  setcookie('UserName' ,$Prenom, time()+365*24*3600  );
 if (isset($_COOKIE['UserName'])) {
   echo 'tu t\'appele :',$_COOKIE['UserName'];
 }
}*/
//===========================================================================//

// base de données
/* =========Methode clasique============*/
  mysqli_connect('localhost','root','','test');
//  mysqli_select_db('test');


/***********Insertion un element**********/
   /*==========Methode classique ===========*/
       //ajouter un element a la base de donnée test dans le tableau SiteWeb
    /*$ajouter=mysql_query("INSERT INTO SiteWeb VALUES ('','Bellaouedj','Yonko','1966/01/12')");
      $ajouter=mysql_query("INSERT INTO SiteWeb VALUES ('','Bellaouedj','IBLYO','1966/01/12')");
     */

   /*==========Methode avec PDO ===========*/
    /* var_dump($_POST);
     $objet = new PDO('mysql:host=localhost;dbname=test','root','');

        $pdoStat = $objet->prepare('INSERT INTO SiteWeb VALUES(NULL,:nom,:prenom)');

        $pdoStat->bindValue(':nom',$_POST['FirstName'], PDO :: PARAM_STR);
        $pdoStat->bindValue(':prenom',$_POST['LastName'], PDO :: PARAM_STR);


        $insertisok = $pdoStat->execute();

        if($insertisok){
           $message = 'Thanks to you to be sign up ';
           }
        else{
              $message = 'Errour : Retray Again Please !';
            }

/**********Modifier un element************/

  // $modifeir_donnée = mysqli_query('UPDATE test SET Nom = "Bellaouedj" ', 'SELECT * WHERE ID = 6');

 //$objet = new PDO('mysql:host=localhost;dbname=test','root','');

/*********Afficher les Données de la base****/
/*********Cree un formulaire*****************/
?>
