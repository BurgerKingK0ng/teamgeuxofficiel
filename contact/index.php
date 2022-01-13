<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<?php include '../include/css/style.php' ?>
	<?php include '../include/icon.php' ?>
	<title> Les Gueux - Site Officiel - Contact </title>
</head>
<body class="index">
	<?php include '../include/menudenavigation.php'; ?>

	<section class="contact">
		<div class="discord">
			<a target="about:blank" href="https://discord.gg/pFh5c26" class="href-d"> 
				<img src="../img/contact/discord.png" class="discord">
			</a>
		</div>
		<div class="mail">
			<a target="about:blank" href="mailto:team.geux.officiel@gmail.com">
				<img src="../img/contact/mail.png" class="mail">
			</a>
		</div>
		<div class="reddit">
			<a target="about:blank" href="https://www.reddit.com/r/LesGeux/">
				<img src="../img/contact/reddit.png" class="reddit">
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
		<form method="post" class="form">
			<input type="text" class="nom" name="nom" id="name" placeholder="Votre Nom" required fo><br>
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
				<div>
					<?php 
						if (isset($_POST['btn'])) {
							echo "<br>" . "Votre nom :" ."<br>".  $_POST['nom'];
						} 
					?>
					<br>
				</div>

				<div>
					<?php 
						if (isset($_POST['btn'])) {
							echo "<br>" . "L'objet :" ."<br>". $_POST['object'];
						} 
					?>
					<br>
				</div>

				<div >
					<?php 
						if (isset($_POST['btn'])) {
							echo "<br>" . "Votre Message :" . "<br>" . $_POST['message'] . "<br>";
						} 
					?>
				</div>

		</div>
	</section>

	<?php include '../include/footer.php'; ?>
</body>
</html>
