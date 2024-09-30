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

$valide=0;

if($_SERVER['PHP_SELF']==='/index.php'){
	$title='Hakim AZIZI';
}

elseif($_SERVER['REQUEST_URI']==='/collaboration.html'){
	$title='collaboration';
}

elseif($_SERVER['REQUEST_URI']==='/contact.html'){
	$title='contact';
}

elseif($_SERVER['REQUEST_URI']==='/cv-hakim-azizi.html'){
	$title='CV Hakim AZIZI';
}

elseif($_SERVER['REQUEST_URI']==='/partner.html'){
	$title='partenaire';
}

elseif($_SERVER['REQUEST_URI']==='/portfolio.html'){
	$title='portfolio';
}

elseif($_SERVER['REQUEST_URI']==='/web-developer.html'){
	$title='d&eacute;veloppeur web';
}

elseif($_SERVER['REQUEST_URI']==='/projects'){ 
	$title='projets';
}

elseif($_SERVER['REQUEST_URI']==='/projects/afac974.html'){ 
	$title='projet AFAC974';
	$valide=1;
}

elseif($_SERVER['REQUEST_URI']==='/projects/carte-postale.html'){ 
	$title='projet cr&eacute;ation de carte postale';
	$valide=1;
}

elseif($_SERVER['REQUEST_URI']==='/projects/faketory.html'){ 
	$title='projet Faketory';
	$valide=1;
}

elseif($_SERVER['REQUEST_URI']==='/projects/la-rose-de-l-orient.html'){ 
	$title='projet la Rose de l&apos;Orient';
	$valide=1;
}

elseif($_SERVER['REQUEST_URI']==='/projects/robe-et-vetement.html'){ 
	$title='projet Robe et V&ecirc;tement';
	$valide=1;
}

elseif($_SERVER['REQUEST_URI']==='/projects/the-wild-fork.html'){ 
	$title='projet THE Wild FORK';
	$valide=1;
}else{
	/* require'404.php'; */
}



$adjust_url=preg_replace(array("@(^[/]{1})@","@([A-Za-z0-9:_\=\&\.\?\+\%\-])@","@/@"),array("","","../"),$_SERVER['REQUEST_URI']);
require 'database.php';
$data_projects=mysqli_query($connectionbd,"SELECT * FROM `project`");
if (strstr($title, 'projet ')){
$remplacementduget=str_replace(['/projects/','.html'],['','.jpg'],$_SERVER['REQUEST_URI']);
$data_project=mysqli_query($connectionbd,"SELECT * FROM `project` WHERE `screen`='".$remplacementduget."'");
// $data_projet=mysqli_query($connectionbd,"SELECT * FROM `project` WHERE `name`='".$_GET['project']."'");
$project=mysqli_fetch_array($data_project);
if(@$project['name']){extract($project);}
}
?>