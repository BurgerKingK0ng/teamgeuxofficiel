<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			font-family: Arial;
		}

		section.contact div{
			display: inline-block;
			height: 98%;
		}

		section.contact div a{
			text-decoration: none;
			color: #000;
		}

		div.discord{
			float: left;
			padding: 20px;
			color: white;
			background-color: #ffffff;
			background-image:url(discord.png);
			background-repeat: no-repeat;
			background-position: center center;
		}

		div.mail{
			margin-left: 33%;
			padding: 20px;
			color: #ffffff;
			background-color: white;
			background-image:url(mail.png);
			background-repeat: no-repeat;
			background-position: center center;
		}

		div.youtube{
			float: right;
			padding: 20px;
			color: white;
			background-color: #ffffff;
			background-image:url(youtube.png);
			background-repeat: no-repeat;
			background-position: center center;
		}

		section.formulaire{
			text-align: center;
		}

		p.text{
			font-weight: bold;
			font-size: 25px;
		}

		form input{
			margin: 5px;
		}

		form textarea{
			margin: 5px;
			height: 200px;
			width: 250px;
		}

		div.envoie{
			font-size: 20px ;
		}
	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<?php include '../include/css/style.php' ?>
	<?php include '../include/icon.php' ?>
	<title> Les Gueux - Site Officiel - Contact </title>
</head>
<body class="index">
	<?php //include '../include/menudenavigation.php'; ?>

	<section class="contact">
		<div class="discord">
			<a target="about:blank" href="https://discord.gg/pFh5c26" class="href-d"> 
				<p class="discord">Notre Discord</p>
			</a>
		</div>
		<div class="mail">
			<a target="about:blank" href="mailto:team.geux.officiel@gmail.com">
				<p class="mail">Notre Adresse Mail</p>
			</a>
		</div>
		<div class="youtube">
			<a target="about:blank" href="https://www.youtube.com/channel/UC-4mhZbz8LKrxmaD-bREwng">	<p class="youtube">Notre Youtube</p>
			</a>
		</div>
	</section>
	
	<section class="formulaire">
		<div class="explication">
			<p class="text">
				Si pour une quelqu'on que raison vous ne pouvez pas nous contacter par ces différents Moyens : <br>
				Alors envoyer nous un formulaire :
			</p>
		</div>
		<form method="post">
			<input type="text" name="nom" id="name" placeholder="Votre Nom" required><br>
			<input type="text" name="object" id="object" placeholder="Objet" required><br>
			<textarea type="text" name="message" class="message" placeholder="Le Message" required></textarea><br>
			<input type="submit" name="btn" id="form"><br>
		</form>
		<br>
		<div class="envoie">
				<?php 
					if (isset($_POST['btn'])) {
						echo "Ce que vous avez envoyer :" ."<br>" ;
					} 
				?>
				<br>
				<?php 
						if (isset($_POST['btn'])) {
							echo "<br>" . "Votre nom :" ."<br>".  $_POST['nom'];
						} 
					?>
				<br>
				<?php 
					if (isset($_POST['btn'])) {
						echo "<br>" . "L'objet :" ."<br>". $_POST['object'];
					} 
				?>
				<br>
				<?php 
					if (isset($_POST['btn'])) {
						echo "<br>" . "Votre Message :" . "<br>" . $_POST['message'] . "<br>";
					} 
				?>
		</div>
	</section>

	<?php include '../include/footer.php'; ?>
</body>
</html>