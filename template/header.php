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
		<link href="../style/style.css" rel="stylesheet" type="text/css">
		<?php if($title==="Hakim AZIZI" OR $title==="d&eacute;veloppeur web" OR $title==="contact" OR $title==="partenaire"){  ?>
		<link href="style/headband.css" rel="stylesheet" type="text/css">
<?php }  ?>
<?php if($title==='contact'){ ?>
		<link href="style/contact.css" rel="stylesheet" type="text/css">
<?php } ?>
<?php if($title==='portefolio'){ ?>
		<link href="style/portefolio.css" rel="stylesheet" type="text/css">
<?php } ?>
<?php if($title==='projets'){ ?>
		<link href="style/projects.css" rel="stylesheet" type="text/css">
<?php } ?>
	</head>
	<body>
		<header class='navbar'>
			<nav>
				<p><a href='../' <?php if($title==="Hakim AZIZI"){ ?>class='current'<?php } ?>>Accueil</a></p>
				<ul id='show-menu'>
					<li><a href='../web-developer.html' <?php if($title==="d&eacute;veloppeur web"){ ?>class='current'<?php } ?>>d&eacute;veloppeur web</a></li>
					<li><a href='../cv-hakim-azizi.html' <?php if($title==="CV Hakim AZIZI"){ ?>class='current'<?php } ?>>CV</a></li>
					<li><a href='../portefolio.html' <?php if($title==="portefolio"){ ?>class='current'<?php } ?>>Portefolio</a></li>
					<li id='show-projects' onclick="openProjects()"><span <?php if(strstr($title,'projet ')){ ?>class='current'<?php } ?>>Voir les projets</span>
					<ul id='projects'>
					<?php 
						while($projects=mysqli_fetch_array($data_projects)){
							?>
							<li><a href='../projects/<?php echo $projects['name']; ?>.html'<?php
							if($title==='projet AFAC974'){ ?>class='current'<?php }
							elseif($title==='projet cr&eacute;ation de carte postale'){ ?>class='current'<?php }
							elseif($title==='projet Faketory'){ ?>class='current'<?php }
							elseif($title==='projet la Rose de l&apos;Orient'){ ?>class='current'<?php }
							elseif($title==='projet Robe et V&ecirc;tement'){ ?>class='current'<?php }
							elseif($title==='projet THE Wild FORK'){ ?>class='current'<?php }
							?>><?php echo $projects['name']; ?></a></li>
					<?php
						}
					?>
					</ul>				
				</li>
					<li><a href='../collaboration.html' <?php if($title==="collaboration"){ ?>class='current'<?php } ?>>Collaboration</a></li>
					<li><a href='../contact.html' <?php if($title==="contact"){ ?>class='current'<?php } ?>>Contact</a></li>
					<li><a href='../partner.html' <?php if($title==="partenaire"){ ?>class='current'<?php } ?>>Partenaire</a></li>
				</ul>
				<img class='menu' src="../images/menu-burger.png" alt="ouvrir le menu" onclick="openMenu()">
			</nav>
		</header>
		<header class='title'>
			<h1><?php echo ucfirst($title); if($title!=='d&eacute;veloppeur web'){ ?> : d&eacute;veloppeur web <?php } ?></h1>
			<p>Bonjour et bienvenue</p>
		</header>