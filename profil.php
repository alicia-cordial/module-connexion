<?php
session_start();

$db = mysqli_connect("localhost", "root", "root", "moduleconnexion");


if(isset($_POST['submit']))
{
      if(!empty ($_POST['login']) && !empty ($_POST['prenom']) && !empty ($_POST['nom']) && !empty ($_POST['password']) && !empty ($_POST['password2']))
      {
       
          $login = $_POST['login'];
          $prenom = $_POST['prenom'];
          $nom = $_POST['nom'];
          $password = $_POST['password'];
          $password2 = $_POST['password2'];  
      

      
      if($password == $password2)
      {
        $requete=" INSERT INTO utilisateurs (login, prenom, nom, password)
        VALUES(' " .$login. "', '" .$prenom. "', '" .$nom. "', '" .$password. "');";
        $result = mysqli_query($db, $requete); 

        if(!mysqli_query($db, $requete))
        {
          die('impossible de se connecter:' .mysqli_error($db));
        }

        else
        {
          header('location:connexion.php');
        }
      }

      else
      {
        $erreur . 'Les mots de passes ne sont pas identiques';
      }


      }
      else
      {
        $erreur = "Tous les champs ne sont pas rentrés";
      }

    }

else
{
  $erreur = "Il faut appuyer sur le bouton";
}



?>   




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset= "utf-8"/>
    <link rel= "stylesheet" href= "inscription.css">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@300&display=swap" rel="stylesheet">
    <title>Inscription</title>
</head>
    
  <body>
        <!--Header-->
        <header>
      <nav id="navTop">
        <ul id="listeNavTop">
          <a href="inscription.php"><li>S'inscrire</li></a>
          <a href="connexion.php"><li>Connexion</li></a>
          <a href="profil.php"><li>Profil</li></a>
        </ul>
      </nav>
        </header>
    
    
     
        <main>
        <h1>Bienvenue sur le site des amis de toute forme de vie</h1>
        <h2>Pour modifier vos petites infos d'alien c'est par ici</h2>
        <!--FORMULAIRE--> 



<section class="login">
  <form action="inscription.php" method="post">
    <fieldset>
      <legend>Tes petites infos à modifier</legend>
      
        <article>
          <label for="login">Login :</label>
          <input type="text" name="login" required pattern = "^[A-Za-z '-]+$" maxlengh = "20">
        </article>  
    
        <article>
          <label for="prenom">Prénom :</label>
          <input type="text"  name="prenom" required>
        </article>

        <article>
          <label for="nom">Nom :</label>
          <input type="text" name="nom" required>
        </aricle>
    
        <article>
          <label for="password">Mot de passe :</label>
          <input type="password"  name="password" required>
        </article>
        
        <article>
          <label for="password2">Confirmation Mot de passe :</label>
          <input name="password2" type="password2" required>
        </article>
    
    <input type="submit" class="button" value="Valider" name="submit">
</fieldset>


<?php
if (isset($erreur))
{
  echo $erreur;
}
?>


</form>                                                                                              
</section>
   
     </main>
                                                     
                                                     
         <!--Footer-->
    <footer>  
        <nav id="NavBottom">
        <ul>
          <a href="inscription.php"><li>S'inscrire</li></a>
          <a href="connexion.php"><li>Connexion</li></a>
          <a href="profil.php"><li>Profil</li></a>
        </ul>
        </nav>
    </footer>

</body>
</html>