<?php
session_start();

$db = mysqli_connect("localhost", "root", "root", "moduleconnexion");

if(isset($_POST['submit']))
{
      if(!empty ($_POST['login']) && !empty ($_POST['password']))
      {
       
          $login = $_POST['login'];
          $password = $_POST['password'];

        $requete="SELECT login, password FROM `utilisateurs` WHERE `login` = '$login'";
        $result = mysqli_query($db, $requete);
        $userexist =  mysqli_num_rows($result);
   

              
                if($userexist==1)
                {
                
                  $userexist = $result->fetch_assoc();

                  $_SESSION['login'] = $userexist['login'];
                  $_SESSION['password'] = $userexist['password'];
                  
                  header('location:profil.php');
                }
                
                else
                {   
                      echo 'ERREUR';
                }
        }
       
    
      

      else
      {
        $erreur . 'Les identifiants ne sont pas corrects';
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
    <link rel= "stylesheet" href= "conn.css">
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

    <section class="connexion">


<form method="post" action="connexion.php" >
  <fieldset>
<legend> Déjà inscrit? Connecte toi vite!</legend>

    <article>
        <label for= "login">Login</label> 
        <input type="text" name="login"><br/>
    </article>

    <article>
        <label for= "password">Password</password></label>
        <input type="password" name="password" id="password"><br />
    </article>

        <button type="submit" name="submit" value= "Valider">connexion</button>



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



