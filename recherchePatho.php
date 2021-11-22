<!DOCTYPE html>
<html>
    <head>
        <title>Liste des pathologies</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body onload="Footer()">
        <header>
            <nav class="navbar">
				<a href="index.php">
					<img src="images/accu.png">
				</a>
				<ul>
					<li><a href=index.php>Accueil</a></li>
					<li><a href=recherchePatho.php>Liste Pathologies</a></li>
					<li><a href=Contact.php>A propos & Contact</a></li>
					<li style="float:right"><a href="register.php">S'inscrire</a></li>
					<li style="float:right"><a href="login.php">Connexion</a></li>
					<li style="float:right"><a href="logout.php">Déconnexion</a></li>
				</ul>
			</nav>
        </header>

        <section id="recherche" class="pagePatho"></br>
            <h1>Rechercher une pathologie</h1></br>
            <form>
                <div>
                  <input type="search" id="maRecherche" name="q"
                   placeholder="Rechercher la pathologie…">
                  <button>Rechercher</button>
                </div>
            </form>
            </br>
            <div class="grid-item">
                <img src="../images/recherchePatho_img1.jpg">
            </div></br>
            <li><a href="#pathoMeridien">Pathologies de méridien</a></li></br>
            <li><a href="#pathoOrgane">Pathologies d’organe/viscère (tsang/fu)</a></li></br>
            <li><a href="#pathoTendino">Pathologies des tendino-musculaires ( jing jin)</a></li></br>
            <li><a href="#pathoBranche">Pathologie des branches (voies luo)</a></li></br>
            <li><a href="#pathoVaisseaux">Pathologies des merveilleux vaisseaux</a></li></br>
        </section>

        <section id="pathoMeridien" class="pagePatho"></br>
            <h1>Pathologies de méridien</h1></br>
            <h2>Caractéristiques</h2></br>
            <form action="#">
                <button type="submit">Haut de page</button>
             </form>
            <div class="grid-container">
    
            </div>
        </section>

        <section id="pathoOrgane" class="pagePatho"></br>
            <h1>Pathologies d’organe/viscère (tsang/fu)</h1></br>
            <h2>Caractéristiques</h2></br>
            <form action="#">
                <button type="submit">Haut de page</button>
             </form>
            <div class="grid-container">
            </div>
        </section>

        <section id="pathoTendino" class="pagePatho"></br>
            <h1>Pathologies des tendino-musculaires ( jing jin)</h1></br>
            <h2>Caractéristiques</h2></br>
            <form action="#">
                <button type="submit">Haut de page</button>
             </form>
            <div class="grid-container">
    
            </div>
        </section>

        <section id="pathoBranche" class="pagePatho"></br>
            <h1>Pathologie des branches (voies luo)</h1></br>
            <h2>Caractéristiques</h2></br>
            <form action="#">
                <button type="submit">Haut de page</button>
             </form>
            <div class="grid-container">
    
            </div>
        </section>

        <section id="pathoVaisseaux" class="pagePatho"></br>
            <h1>Pathologies des merveilleux vaisseaux</h1></br>
            <h2>Caractéristiques</h2></br>
            <form action="#">
                <button type="submit">Haut de page</button>
             </form>
            <div class="grid-container">
    
            </div>
        </section>
        
        <div id="Footer"></div>
        <script src='fonctions.js'></script>
        <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=acuponcture', 'sam', 'test');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        ?>
        <form method="post" action="traitement.php">
        
            <label for="pays">Dans quel pays habitez-vous ?</label><br />-->
            <select name="recherchePatho" id="maRecherche">
        
        <?php
        
        $reponse = $bdd->query('SELECT desc FROM keywords where name=$_GET["q"]');
        
        while ($donnees = $reponse->fetch())
        {
        $desc=$row['desc'];
        $idS=$row['idS'];
        echo "<ul>\n";
        echo "<li>" . "<a href=\"search.php?id=$ID\">" .$idS . " " . $row . "</a></li>\n";
        echo "</ul>";
        }
        ?>
        </body>
</html>

<!--test -->
