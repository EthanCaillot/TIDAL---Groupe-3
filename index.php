<!DOCTYPE html>
<html>
	
	<head>
		<title>Accueil</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body class="accueil" onload="Footer()">
		<header>
			<nav class="navbar">
				<a href="index.php">
					<img src="images/accu.png">
				</a>
				<ul>
					<li><a class="active" href=index.php>Accueil</a></li>
					<li><a href=recherchePatho.php>Liste Pathologies</a></li>
					<li><a href=Contact.php>A propos & Contact</a></li>
					<li><a href="register.php">S'inscrire</a></li>
					<li><a href="login.php">Connexion</a></li>
				</ul>
			</nav>
		</header>

		<h1>Bienvenue sur le site de l'association des acuponcteurs !</h1>
        
		<img src="images/Massage.jpg" class="centre">

		<p>Sur notre site vous pourrez faire des recherches sur vous en fonction de vos synptomes. Il suffit d'aller sur la page "Liste des Pathologies" et créer un filtre pour vos différents symptomes. Il vous resortira tout les potentiels points à soigner.</p>

		<div id="Footer"></div>
		<script src='fonctions.js'></script>
	</body>
	
</html>