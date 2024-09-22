<?php
if(strstr($_SERVER['REQUEST_URI'],'.php')){include'404.php';
}elseif(strstr($_SERVER['REQUEST_URI'],'?')){
	$new_url=preg_replace('#\?.*#','',$_SERVER['REQUEST_URI']);
	header("Status: 301 Moved Permanently", false, 301);
	header("Location: $new_url");
	exit();
}

if($_SERVER['REQUEST_URI']==='/index.html'){ 
	header("Status: 301 Moved Permanently", false, 301);
	header("Location: ./");
	exit();
}

if($_SERVER['REQUEST_URI']==='/projects/'){
	header("Status: 301 Moved Permanently", false, 301);
	header("Location: ../projects");
	exit();
}

if($_SERVER['REQUEST_URI']==='/projects.html'){ 
	header("Status: 301 Moved Permanently", false, 301);
	header("Location: projects");
	exit();
}

if($_SERVER['REQUEST_URI']==='/projects'){ 
	$title="projet";
}

if($_SERVER['REQUEST_URI']==='/collaboration.html'){
	$title="collaboration";
}

if($_SERVER['REQUEST_URI']==='/contact.html'){
	$title="collaboration";
}

if($_SERVER['REQUEST_URI']==='/cv.html'){
	$title="cv";
}

if($_SERVER['REQUEST_URI']==='/partner.html'){
	$title="partenaire";
}

if($_SERVER['REQUEST_URI']==='/portefolio.html'){
	$title="portefolio";
}

if($_SERVER['REQUEST_URI']==='/projects.html'){
	$title="projets";
}

if($_SERVER['REQUEST_URI']==='/web-developer.html'){
	$title="d&eacute;veloppeur web";
}

if($_SERVER['PHP_SELF']==='/index.php'){
	$title="Hakim AZIZI";
}

$adjust_url=preg_replace(array("@(^[/]{1})@","@([A-Za-z0-9:_\=\&\.\?\+\%\-])@","@/@"),array("","","../"),$_SERVER['REQUEST_URI']);

// if($_GET['project']){
 require 'database.php';
$remplacementduget=str_replace(['/projects/','.html'],'',$request_url);
$data_projet=mysqli_query($connectionbd,"SELECT * FROM `project` WHERE `name`='".$remplacementduget."'");
$data_projet=mysqli_query($connectionbd,"SELECT * FROM `project` WHERE `name`='".$_GET['project']."'");
$project=mysqli_fetch_array($data_projet);
if(!$project['name']){/* require '404.php'; */ $valide=0;}else{extract($project);$valide=1;}
// }
?>