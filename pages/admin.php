<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset= "utf-8"/>
    <link rel= "stylesheet" href= "../css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@300&display=swap" rel="stylesheet">
    <title>Inscription</title>
</head>
    
  <body>
        <!--Header-->
        <header>
      <nav id="navTop">
        <ul id="listeNavTop">

        <section class="lien">
          <a href="index.php"><li>Accueil</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>

        <section class="lien">
          <a href="inscription.php"><li>Inscription</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>

        <section class="lien">
          <a href="connexion.php"><li>Connexion</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>

        <section class="lien">
          <a href="profil.php"><li>Profil</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>

        </ul>
      </nav>
        </header>
    
    
     
        <main>
        <h1>Bienvenue sur le site des amis de toute forme de vie</h1>

<h2>Tous nos inscrits</h2>

<?php
$bdd = mysqli_connect("localhost", "root", "root", "moduleconnexion");
$requete = "SELECT * FROM 	utilisateurs WHERE 1;";

$query = mysqli_query($bdd, $requete);

$i=0;

echo "<table>" ;

while ($result = mysqli_fetch_assoc($query))
{

  if ($i == 0)
  {

    foreach ($result as $key => $value)
    {
      echo "<th>$key</th>";
    }
    $i++;

  }

  echo "<tr>";

    foreach ($result as $key => $value) 
    {
  echo "<td>$value</td>";
    }
    
  echo "</tr>";
}

echo "</table>";

 ?>

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
