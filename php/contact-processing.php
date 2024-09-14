<?php
session_start();
require 'security.php';
$validate=$_SESSION['validate'];
$validate_post=md5($_POST['boat']);
$response='';
if(!empty($_POST['boat1']) OR $validate_post!==$validate){$response='la validation anti robot a échouer<br>';}else{
	if(!isset($_POST['email'])) { $response.='le champs mail est vide<br>'; }
	if(!isset($_POST['subject'])) { $rseponse.='le champs sujet est vide<br>'; } 
	if(!isset($_POST['message'])) { $rsponse.='le champs message est vide<br>'; }
	if(!isset($_POST['name'])) { $response.='le champs nom est vide<br'; }
	$tel=preg_replace('#[^+0-9]#',' ',$_POST['tel']);
	if(!preg_match("#^([a-zA-Z][a-zA-Z0-9_.\-]{5,100})@([a-zA-Z0-9_.\-]{5,100})\.([a-z]{2,4})$#",$_POST['email'])){
		$response='Une erreur c&apos;est produite veuillez réessayer plus tard.';
	}else{
		$email=$_POST['email'];
	}
	if(!preg_match("#^([A-Za-z][a-zA-Z0-9_.\- ]{5,100})$#",$_POST['subject'])){
		$response='Une erreur c&apos;est produite, veuillez réessayer plus tard.';
	}else{
		$subject=$_POST['subject'];
	}
	if(!preg_match("#^([A-Za-z][a-zA-Z_.\- ]{5,100})$#",$_POST['name'])){
		$response='Une erreur c&apos;est produite, veuillez réessayer plus tard.';
	}else{
		$name=$_POST['name'];
	}
	if(!preg_match("#^([A-Za-z][a-zA-Z0-9_.\- ]{5,1000})$#",$_POST['message'])){
		$response='Une erreur c&apos;est produite, veuillez réessayer plus tard.';
	}else{
		$message=$_POST['message'];
	}
	if(preg_match("#^([A-Za-z]{2})$#",$_POST['receive-mail'])){
		$receive_mail=$_POST['receive-mail'];
	}
}
if($response===''){
	if(/* mail($email,$subject,$message,$header) */ 1===1){
		$response='L&apos;email a bien &eacute;t&eacute; envoy&eacute;.';
		if(@$receive_mail){$response.='je m&apos;envoie aussi le mail';}
	}else{
       $response='Une erreur c&apos;est produite, veuillez réessayer plus tard.';
	}
}
$_SESSION['validate']='';
$_SESSION['response']=$response;
header('location: ../contact.html')
?>