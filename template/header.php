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
		<style>

			* {
				margin: 0;
				padding: 0;
				color: #000;
			}

			body {
				background: #DCE7FF;
				background-repeat: no-repeat;
				background-size: cover;
				color: #f7efef;
			}

			.header>nav{
				display: flex;
				justify-content: space-between;
				align-items: center;
				padding:0 1rem;
				background: #000;
				height: 100px;
			}

			.header>nav>ul {
				display: flex;
				flex-wrap: wrap;
				justify-content: flex-end;
				align-items: center;
				gap: 1rem;
			}

			.header>nav>p,
			.header>nav>ul>li {
				text-align: center;
				list-style: none;
				background-color: #f7efef;
				height: 50px;
				border-radius: 50%;
				width: 100px;
			}

			.header>nav>p:hover,
			.header>nav>ul>li:hover {
				font-weight: bold;
				cursor: pointer;
				background: #000;
				border: 2px solid #f7efef;
			}

			.header>nav>p>a,
			.header>nav>ul>li>a {
				text-decoration: none;
				color: #000;
				display: block;
				width: 100%;
				height: 100%;
				line-height: 50px;
				margin-top: auto;
				margin-bottom: auto;
			}

			.header>nav>p>a:hover,
			.header>nav>ul>li>a:hover {
				color: #f7efef;
			}

			.content,
			.title {
				margin: 1rem;
			}

			h1 {
				text-align: center;
				font-size: 2rem;
			}

			h2 {
				font-size: 1.5rem;
			}

			h3,
			p {
				font-size: 1.2rem;
			}

			.content {
				display: flex;
				justify-content: center;
				flex-wrap: wrap;
				gap: 2rem;
			}

			.content>div,
			.content>section{
				width:47%;
				min-width: 300px;
			}

			.content2 {
				overflow: hidden;
			}

			#resize {
				display: flex;
				flex-wrap: nowrap;
				gap: 2%;
				width: 304%;
			}

			.slide {
				width: 32%;
				display:block;
			}

			.slide>img{
				width:100%;
				height:auto;
			}

			form {
				display: flex;
				align-items: center;
				flex-direction: column;
				gap: 1rem;
			}

			label {
				width: 250px;
			}

			input,
			textarea,
			button {
				padding: .2rem .5rem;
				width: 250px;
				border-radius: 51px;
				border: none;
				background: #F2F6FF;
			}

			.adjust {
				margin-top: -1rem;
				display: flex;
				justify-content: space-between;
			}

			.adjust:hover {
				cursor: pointer;
			}
			
			.adjust>input {
				width: 12px;
				height: 12px;
			}

			.adjust>input:hover {
				cursor: pointer;
			}

			textarea {
				height: 250px;
				border-radius: 15px;
			}

			button:hover {
				background: #C0C5ED;
				cursor: pointer;
			}

			footer {
				margin-top: 2rem;
			}

			.footer {
				display: flex;
				background: #000;
				align-items: center;
				gap: 2rem;
			}

			.footer>address,
			.footer>p {
				color: #f7efef;
			}

		</style>
	</head>
	<body>
		<header class='header'>
			<nav>
				<p><a href='./'>accueil</a></p>
				<ul>
					<li><a href='projet.html'>Projet</a></li>
					<li><a href='collaboration.html'>Collaboration</a></li>
					<li><a href='contact.html'>Contact</a></li>
					<li><a href='urllien.html'>liendelurl</a></li>
					<li><a href='urllien.html'>liendelurl</a></li>
				</ul>
			</nav>
		</header>
		<header class='title'>
			<h1><?php echo ucfirst($page_title) ?> : d&eacute;veloppeur web</h1>
			<p>Bonjour et bienvenue</p>
		</header>
