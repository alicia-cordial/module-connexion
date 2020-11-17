<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset= "utf-8"/>
    <link rel= "stylesheet" href= "connexion.css">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@300&display=swap" rel="stylesheet">
    <title>Connexion</title>
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
        <h1>Bienvenue sur le site des croyants de toute forme de vie</h1>
   
    <!--Formulaire-->      

<form action="/my-treatment-page" method="post">
    <fieldset>
        <legend>Connectez-vous</legend>

        <article>
          <label for="login">Login :</label>
          <input type="text" id="name" name="user_name" required>
        </article>  

    <input type="submit" class="button" value="Valider">
        </fieldset>
    </form>
                  
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