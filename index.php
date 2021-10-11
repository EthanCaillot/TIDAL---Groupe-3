<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body class="accueil" onload="Footer()">
	<header>
        <nav class="navbar">
            <a href="index.html">
                <img src="images/accu.png">
            </a>
            <ul>
                <li><a href=index.html>Accueil</a></li>
                <li><a href=html/Connexion.html>Connexion</a></li>
                <li><a href=html/recherchePatho.html>Liste Pathologies</a></li>
                <li><a href=html/Contact.html>A propos & Contact</a></li>
            </ul>
        </nav>
    </header>
    <h1>Bienvenue sur le site de l'association des acuponcteurs !</h1>

    <div id="Footer"></div>
    <script src='html/fonctions.js'></script>
		<a href="logout.php">Déconnexion</a>
		</div>
	</body>
	
</html>