<?php
require './php/security.php';
?><!DOCTYPE html>
<html lang='fr'>
	<head>
		<title>D&eacute;veloppeur web<?php if($title!=='d&eacute;veloppeur web'){ echo ' : '.$title; } ?></title>
		<meta name='Description' content=''>
		<meta name='Keywords' content=''>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta name='contactstate' content='France'>
		<meta name='contactcity' content='Nantes'>
		<meta name='language' content='fr'>
		<link href="<?php echo $adjust_url; ?>style/style.css" rel="stylesheet" type="text/css">
<?php if($title==='Hakim AZIZI'){ ?>
	<link href="style/home.css" rel="stylesheet" type="text/css">
<?php } ?>
<?php if($title==='contact'){ ?>
	<link href="style/contact.css" rel="stylesheet" type="text/css">
<?php } ?>
<?php if($title==='portefolio'){ ?>
	<link href="style/portefolio.css" rel="stylesheet" type="text/css">
<?php } ?>
<?php if($title==='projet'){ ?>
	<link href="style/projects.css" rel="stylesheet" type="text/css">
<?php } ?>
	</head>
	<body>
		<header class='navbar'>
			<nav>
				<p><a href='../'>Accueil</a></p>
				<ul id='show-menu'>
					<li><a href='../web-developer.html'>d&eacute;veloppeur web</a></li>
					<li><a href='../cv-hakim-azizi.pdf'>CV</a></li>
					<li><a href='../portefolio.html'>Portefolio</a></li>
					<li id='show-projects'  onclick="openProjects()">Voir les projets
					<ul id='projects'>
					<?php 
						while($projects=mysqli_fetch_array($data_projects)){
							?>
							<li><?php echo $projects['name']; ?></li>
						<?php
						}
						?>
					</ul>				
				</li>
					<li><a href='../collaboration.html'>Collaboration</a></li>
					<li><a href='../contact.html'>Contact</a></li>
					<li><a href='../partner.html'>Partenaire</a></li>
				</ul>
				<img class='menu' src="../images/menu-burger.png" alt="ouvrir le menu" onclick="openMenu()">
			</nav>
		</header>
		<header class='title'>
			<h1><?php echo ucfirst($title); if($title!=='d&eacute;veloppeur web'){ ?> : d&eacute;veloppeur web <?php } ?></h1>
			<p>Bonjour et bienvenue</p>
		</header>