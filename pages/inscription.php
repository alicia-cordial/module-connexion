<?php

$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion', 'root', 'root');
 
if(isset($_POST['forminscription'])) 
{
    $login = htmlspecialchars($_POST['login']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $nom = htmlspecialchars($_POST['nom']);
  $password = $_POST['password'];
  $password2 = $_POST['password2'];  
   if(!empty($_POST['login']) AND !empty($_POST['password']) AND !empty($_POST['password2']) AND !empty($_POST['prenom']) AND !empty($_POST['nom'])) 
   {
        if($password == $password2) 
        {
            $insertmbr = $bdd->prepare("INSERT INTO utilisateurs(login, password, nom, prenom) VALUES(?, ?, ?, ?)");
            $insertmbr->execute(array($login, $password, $nom, $prenom));
            $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
        }
   else {
             $erreur = "Vos mots de passes ne correspondent pas !";
        }
    }
else {
      $erreur = "Tous les champs doivent être complétés !";
    }
    
}
?>


   
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset= "utf-8"/>
    <link rel= "stylesheet" href= "../css/inscription.css">
    <title>Inscription</title>
</head>
    
  <body>
        <!--Header-->
        <header>
      <nav id="navTop">
        <ul id="listeNavTop">
        <section class="lien">
          <a href="index.php"><li>Accueil</li></a>
          <img src="../images/ovni.png" alt="ovni"></img>
        </section>

        <section class="lien">
          <a href="connexion.php"><li>Connexion</li></a>
          <img src="../images/ovni.png" alt="ovni"></img>
        </section>

        <section class="lien">
          <a href="profil.php"><li>Profil</li></a>
          <img src="../images/ovni.png" alt="ovni"></img>
        </section>
        </ul>
      </nav>
        </header>
    
    
     
        <main>
        <h1>Bienvenue sur le site des amis de toute forme de vie</h1>
    
        <!--FORMULAIRE--> 



<section class="inscription">
  <form action="inscription.php" method="post">
    <fieldset>
      <legend>Tes petites infos</legend>
      
        <article class="user-box">
          <label for="login">Login :</label>
          <input type="text" placeholder="Votre pseudo" id="login" name="login" value="<?php if(isset($login)) { echo $login; } ?>" />
        </article>  
    
        <article class="user-box">
          <label for="prenom">Prénom :</label>
          <input type="prenom" placeholder="Votre prenom" id="prenom" name="prenom" />
        </article>

        <article class="user-box">
          <label for="nom">Nom :</label>
          <input type="nom" placeholder="Votre nom" id="nom" name="nom" />
        </aricle>
    
        <article class="user-box">
          <label for="password">Mot de passe :</label>
          <input type="password" placeholder="Votre mot de passe" id="password" name="password" />
        </article>
        
        <article class="user-box">
          <label for="password2">Confirmation Mot de passe :</label>
          <input type="password2" placeholder="Confirmez votre mdp" id="password2" name="password2" />
        </article>
    
        <input type="submit" name="forminscription" value="Je m'inscris" />
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
       <p> It's an Alien Production ©</p>
    </footer>

</body>
</html>