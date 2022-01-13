<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
body{
	font-family: Arial;
}

img.menu-nav{
	float: left;
}

div.slogan p.texte{
	font-size: 50px;
	margin-left: 70%;
	padding-right: 50px;
	float: right;
}

div.slogan{
	display: flex;
}

div.menu-nav{
	background-color: red;
}

div.menu-nav nav ul{
	line-height: calc(1.5em + 20px);
}

div.menu-nav nav ul li.btn{
	background-color: red;
}

div.menu-nav nav ul li.btn a{
	color: #fff;
	background-color: red;
	text-decoration: none;
	display: block;
	padding: 0 10px;
	height: 100%;
	box-sizing: border-box;
}

div.menu-nav nav ul li.btn:hover a{
	background-color: #8B0000;
}

div.menu-nav nav ul li.btn{
	list-style-type: none;
	display: inline-block;
}

</style>
</head>
<body>
<section class="menudenav">
	<div class="slogan">
		<a href="../accueil"><img class="menu-nav" src="img/logo.png" width="96x96"></a>
		<p class="texte">
			Team Geux - Site Officiel
		</p>
	</div>		 
	<div class="menu-nav">
		<nav>
			<ul>
				<li class="btn">
					<a href="../accueil">
						Accueil
					</a>
				</li>
				<li class="btn">
					<a href="../informations">
						Nos Informations 	
					</a>
				</li>
				<li class="btn">
					<a href="../contact">
						Contact
					</a>
				</li>
				<li class="btn">
					<a href="../projets">
						Nos Projets
					</a>
				</li>
			</ul>
		</nav>	
	</div>
</section>
</body>
</html>