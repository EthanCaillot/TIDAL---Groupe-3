<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style2.css">
    
    </head>
    
    
	<?php session_start(); 
	if (isset($_SESSION['username'])) { ?>

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
					<li><a href="logout.php">Deconnexion</a></li>
				</ul>
			</nav>
		</header>
	<?php } 
	else { ?>
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
	<?php } ?>

		<div class="ContainerContact" style="float:left;" >
				<h2>A PROPOS</h2>
    			<p>L'association d’acupuncteurs en médecine traditionnelle chinoise propose de nombreuses soins en fonction de vos pathologies et de leurs caractéristiques.<br>
                    Praticiens depuis 1760, l'association à pour objectifs que votre esprit soit de nouveau associer à votre corps.<br>
				</p>			
		</div>

		<div class="ContainerContact" style="float:right;" >
			<h2>NOUS CONTACTER</h2>
			<p>L'association d’acupuncteurs en médecine traditionnelle chinoise met tout en œuvre pour répondre à vos questions et satisfaire vos demandes.<br>
				Retrouvez-nous en consultation :<br>3 Rue Victor Grignard<br>69100 Villeurbanne</p>
			<p>📞 Par Téléphone : <a href="tel:+33752994728">  07 52 99 47 28</a></p>
			<p>📧 Par E-Mail : <a href="mailto:contact@cpe.fr?subject=Demande de reseignement&body=Bonjour, je souhaiterais obtenir des renseignements sur ">contact@cpe.fr</a></p>
		</div>	
				
		<div class="ContainerMaps" >
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.352760303214!2d4.867562815441659!3d45.784160079105966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea977b847259%3A0x9efbb71d73134a76!2sCPE%20Lyon!5e0!3m2!1sfr!2sfr!4v1621672508873!5m2!1sfr!2sfr" width="100%" height="400 PX" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>

		<div id="map"></div>
        <div id="Footer"></div>
        <script src='../fonctions.js'></script>
        
	</body>
</html>



