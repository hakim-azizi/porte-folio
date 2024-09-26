<?php
if(strstr($_SERVER['REQUEST_URI'],'.php')){include'404.php';
}elseif(strstr($_SERVER['REQUEST_URI'],'?')){
	$new_url=preg_replace('#\?.*#','',$_SERVER['REQUEST_URI']);
	header('Status: 301 Moved Permanently', false, 301);
	header('Location: $new_url'.$_SERVER['REQUEST_URI']);
	exit();
}

if($_SERVER['REQUEST_URI']==='/index.html'){ 
	header('Status: 301 Moved Permanently', false, 301);
	header('Location: ./');
	exit();
}

if($_SERVER['REQUEST_URI']==='/projects/'){
	header('Status: 301 Moved Permanently', false, 301);
	header('Location: ../projects');
	exit();
}

if($_SERVER['REQUEST_URI']==='/projects.html'){ 
	header('Status: 301 Moved Permanently', false, 301);
	header('Location: projects');
	exit();
}

if($_SERVER['PHP_SELF']==='/index.php'){
	$title='Hakim AZIZI';
}

if($_SERVER['REQUEST_URI']==='/collaboration.html'){
	$title='collaboration';
}

if($_SERVER['REQUEST_URI']==='/contact.html'){
	$title='contact';
}

if($_SERVER['REQUEST_URI']==='/cv-hakim-azizi.html'){
	$title='CV Hakim AZIZI';
}

if($_SERVER['REQUEST_URI']==='/partner.html'){
	$title='partenaire';
}

if($_SERVER['REQUEST_URI']==='/portefolio.html'){
	$title='portefolio';
}

if($_SERVER['REQUEST_URI']==='/web-developer.html'){
	$title='d&eacute;veloppeur web';
}

if($_SERVER['REQUEST_URI']==='/projects'){ 
	$title='projets';
}

if($_SERVER['REQUEST_URI']==='/projects/afac974.html'){ 
	$title='projet AFAC974';
}

if($_SERVER['REQUEST_URI']==='/projects/carte-postale.html'){ 
	$title='projet cr&eacute;ation de carte postale';
}

if($_SERVER['REQUEST_URI']==='/projects/faketory.html'){ 
	$title='projet Faketory';
}

if($_SERVER['REQUEST_URI']==='/projects/la-rose-de-l-orient.html'){ 
	$title='projet la Rose de l&apos;Orient';
}

if($_SERVER['REQUEST_URI']==='/projects/robe-et-vetement.html'){ 
	$title='projet Robe et V&ecirc;tement';
}

if($_SERVER['REQUEST_URI']==='/projects/the-wild-fork.html'){ 
	$title='projet THE Wild FORK';
}

$adjust_url=preg_replace(array("@(^[/]{1})@","@([A-Za-z0-9:_\=\&\.\?\+\%\-])@","@/@"),array("","","../"),$_SERVER['REQUEST_URI']);

	require 'database.php';
$remplacementduget=str_replace(['/projects/','.html'],'',$_SERVER['REQUEST_URI']);
$data_project=mysqli_query($connectionbd,"SELECT * FROM `project` WHERE `name`='".$remplacementduget."'");
// $data_projet=mysqli_query($connectionbd,"SELECT * FROM `project` WHERE `name`='".$_GET['project']."'");
$project=mysqli_fetch_array($data_project);
if(!@$project['name']){/* require '404.php'; */ $valide=0;}else{extract($project);$valide=1;}
$data_projects=mysqli_query($connectionbd,"SELECT * FROM `project`");
?>