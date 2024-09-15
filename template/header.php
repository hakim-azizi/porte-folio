<?php
require './php/security.php';
$page_title = str_replace(['/','.html'],'',$request_url);
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
		<link href="style/style.css" rel="stylesheet" type="text/css">
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
				<p><a href='./'>Accueil</a></p>
				<ul>
					<li><a href='portefolio.html'>Portefolio</a></li>
					<li><a href='projects.html'>Projets</a></li>
					<li><a href='collaboration.html'>Collaboration</a></li>
					<li><a href='contact.html'>Contact</a></li>
				</ul>
			</nav>
		</header>
		<header class='title'>
			<h1><?php echo ucfirst($page_title) ?> : d&eacute;veloppeur web</h1>
			<p>Bonjour et bienvenue</p>
		</header>