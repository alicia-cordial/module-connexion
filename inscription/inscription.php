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
          <a href="index.php"><li>La page d'accueil</li></a>
          <a href="inscription.php"><li>Inscription</li></a>
          <a href="profil.php"><li>Profil</li></a>
        </ul>
      </nav>
        </header>
    
    
     
        <main>
        <h1>Bienvenue sur le site des amis de toute forme de vie</h1>
    
        <!--FORMULAIRE--> 

            
<section class="login">
  <form action="my-treatment-page" method="post">
    <fieldset>
      <legend>Tes petites infos</legend>
      
        <article>
          <label for="login">Login :</label>
          <input type="text" id="name" name="user_name" required>
        </article>  
    
        <article>
          <label for="vorname">Prénom :</label>
          <input type="text" id="motdepasse" name="mot_de_passe" required>
        </article>

        <article>
          <label for="lastname">Nom :</label>
          <input type="text" id="name" name="name_login" required>
        </aricle>
    
        <article>
          <label for="password">Mot de passe :</label>
          <input type="password" id="motdepasse" name="mot_de_passe" required>
        </article>
        
        <article>
          <label for="userPassword">Confirmation Mot de passe :</label>
          <input id="userPassword" type="password" required>
        </article>
    
    <input type="submit" class="button" value="Valider">

    </fieldset>
  </form>                                                                                              
</section>

            
     </main>
                                                     
                                                     
         <!--Footer-->
    <footer>  
        <nav id="NavBottom">
        <ul>
        <a href="index.php"><li>La page d'accueil</li></a>
          <a href="inscription.php"><li>Inscription</li></a>
          <a href="profil.php"><li>Profil</li></a>
        </ul>
        </nav>
    </footer>

</body>
</html>