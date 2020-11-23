<?php
session_start();
if(isset($_POST['submit']))
{
    header('location:inscription.php');
}
?> 




<!DOCTYPE html>

<html>

    <head>
        <meta charset= "utf-8"/>
        <link rel= "stylesheet" href= "../css/index.css">
        <title>PAGE D'ACCUEIL</title>
    </head>

    <body>
        <header>
            <nav id="navTop">
                <ul id="listeNavTop">

                <section class="lien">
                <a href="https://www.futura-sciences.com/sciences/espace/vie-extraterrestre/actualites/"><li>Avoir plus d'informations</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>

        <section class="lien">
        <a href="https://www.nationalgeographic.fr/voyage/2019/05/6-sites-anciens-soi-disant-construits-par-des-extraterrestres"><li>Les constructions des extraterrestres</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>

        <section class="lien">
        <a href="https://en.wikipedia.org/wiki/List_of_UFO_religions"><li>Plus d'informations sur les mouvements UFO</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>
                 <!--<a href="inscription.php"><li>S'inscrire</li></a>-->
                  
                 
                  
                </ul>
              </nav>
        </header>
        <main>

<section class="inscription">
    <h1> Bienvenue sur le site des amis de toute forme de vie</h1>
    <a href="inscription.php" class="button" name="submit" type="submit">
        <span>S'inscrire</span>
    </a>        
</section> 

<section>
    <h2>TITRE DU JOUR</h2> 
        
        <section class="day">
            <h3>Google: guerre contre les extraterrestres</h3>
                <p>L’entreprise se gausse de pouvoir protéger l’ensemble de ses données stockées face à toute éventualité. Même une attaque venue d’un autre monde.</p>
        </section>
</section>

<section class="actus">
    <h2>LES ACTUALITES</h2>

    <section class="column">
        <article class="column1">
            <h3>Sommes-nous vraiment seuls dans l'univers</h3>
                 <p>ENQUÊTE - Si E.T. existe, il devrait déjà être chez nous. Pourtant, on ne le voit pas. Ce paradoxe, dit de Fermi, qui s'appuie sur des hypothèses très discutées, a occasionné de nombreuses réponses depuis sa formulation dans les années 1950.</p>
        </article>

        <article class="column2">
            <h3>Winston Churchill chassait les extraterrestres</h3>
                <p>Un essai inédit, écrit par l'ancien Premier ministre britannique, traitant de la possibilité de l'existence d'autres formes de vie dans l'univers, vient de faire surface rapporte la revue Nature .</p>
        </article>

        <article class="column3">
            <h3>Quand le Pentagone chassait les ovnis</h3>
                <p>Le département américain de la Défense a mené entre 2007 et 2012 un programme confidentiel pour percer le mystère des objets volants non identifiés.</p>
        </article>
    </section>

</section>



        </main>
        
        <footer>
            <ul id="listeNavTop">
            <section class="lien">
                
            <a href="https://www.facebook.com/ovni.vie.extraterrestre/"><li>Facebook</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>

        <section class="lien">
        <a href="https://www.meetup.com/fr-FR/topics/ufos/"><li>Groupes OVNIs près de chez vous</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>

        <section class="lien">
        <a href="https://www.globenewswire.com/news-release/2020/07/02/2056641/0/en/A-group-of-peaceful-alien-race-details-their-troublesome-journey-that-led-to-their-crash-landing-in-Mexico.html"><li>Un livre écrit par des aliens</li></a>
          <img src="../images/rocket.png" alt="ovni"></img>
        </section>
                
                
              </ul>
        </footer>
    </body>

</html>