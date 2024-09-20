<?php
if(strstr($_SERVER['REQUEST_URI'],'.php')){include'404.php';
}elseif(strstr($_SERVER['REQUEST_URI'],'?')){
	$new_url=preg_replace('#\?.*#','',$_SERVER['REQUEST_URI']);
	header("Status: 301 Moved Permanently", false, 301);
	header("Location: $new_url");
	exit();
}else{$request_url=$_SERVER['REQUEST_URI'];}

if($request_url==='/index.html'){ 
	header("Status: 301 Moved Permanently", false, 301);
	header("Location: ./");
	exit();
}
if($request_url==='/projects.html'){ 
	header("Status: 301 Moved Permanently", false, 301);
	header("Location: projects");
	exit();
}

if($request_url==='/projects/'){
	header("Status: 301 Moved Permanently", false, 301);
	header("Location: ../projects");
	exit();
}

$adjust_url=preg_replace(array("@(^[/]{1})@","@([A-Za-z0-9:_\=\&\.\?\+\%\-])@","@/@"),array("","","../"),$request_url);
$real_url=$_SERVER['PHP_SELF'];

if(@$_GET['project']){
require 'database.php';
$data_projet=mysqli_query($connectionbd,"SELECT * FROM `project` WHERE `name`='".$_GET['project']."'");
$project=mysqli_fetch_array($data_projet);
if(mb_strlen(@$project['name'])===0){require '404.php';}else{extract($project);}
}
?>