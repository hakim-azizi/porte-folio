<?php
require './php/security.php';
$page_title = str_replace(['/','-l-','-','.html'],['',' l&apos;',' ',''],$request_url);
if($page_title==='partner'){$page_title='Partenaire';}
if($page_title==='projects'){$page_title='Projets';}
if(@$_GET['project']){$page_title=str_replace('projects','projet ',$page_title);}
if($adjust_url===''){$adjust_url='../';}
if($real_url==='/index.php'){$page_title='Hakim AZIZI';}
?><!DOCTYPE html>
<html lang='fr'>
	<head>
		<title>D&eacute;veloppeur web : <?php echo $page_title; ?></title>
		<meta name='Description' content=''>
		<meta name='Keywords' content=''>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta name='contactstate' content='France'>
		<meta name='contactcity' content='Nantes'>
		<meta name='language' content='fr'>
		<link href="<?php echo $adjust_url; ?>style/style.css" rel="stylesheet" type="text/css">
<?php if($page_title==='Hakim AZIZI'){ ?>
	<link href="style/home.css" rel="stylesheet" type="text/css">
<?php } ?>
<?php if($page_title==='contact'){ ?>
	<link href="style/contact.css" rel="stylesheet" type="text/css">
<?php } ?>
<?php if($page_title==='portefolio'){ ?>
	<link href="style/portefolio.css" rel="stylesheet" type="text/css">
<?php } ?>
	</head>
	<body>
		<header class='header'>
			<nav>
				<p><a href='<?php echo $adjust_url; ?>'>Accueil</a></p>
				<ul id='show-menu'>
					<li><a href='<?php echo $adjust_url; ?>portefolio.html'>Portefolio</a></li>
					<li><a href='<?php echo $adjust_url; ?>projects.html'>Projets</a></li>
					<li><a href='<?php echo $adjust_url; ?>collaboration.html'>Collaboration</a></li>
					<li><a href='<?php echo $adjust_url; ?>contact.html'>Contact</a></li>
					<li><a href='<?php echo $adjust_url; ?>partner.html'>Partenaire</a></li>
				</ul>
				<img class='menu' src="<?php echo $adjust_url; ?>images/menu-burger.png" alt="ouvrir le menu" onclick="openMenu()">
			</nav>
		</header>
		<header class='title'>
			<h1><?php echo ucfirst($page_title) ?> : d&eacute;veloppeur web</h1>
			<p>Bonjour et bienvenue</p>
		</header>