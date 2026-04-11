<?php
session_start();
$validate=$_SESSION['validate'];
$validate_post=md5($_POST['boat']);
$response='';
if(!empty($_POST['boat1']) OR $validate_post!==$validate){$response='La validation anti robot a échou&eacute;.<br>';}else{
	if(!isset($_POST['email'])) { $response.='le champs mail est vide.<br>'; }
	if(!isset($_POST['subject'])) { $rseponse.='Le champs sujet est vide.<br>'; } 
	if(!isset($_POST['message'])) { $rsponse.='Le champs message est vide.<br>'; }
	if(!isset($_POST['name'])) { $response.='Le champs nom est vide.<br'; }
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
		$message='name : '.$name.'<br />';
		$message.='telephone : '.$tel.'<br />';
		$message.='email : '.$email.'<br />';
		$message.='----------------------------------------------- <br />';
		$message.=$_POST['message'];
	}
	if(preg_match("#^([A-Za-z]{2})$#",$_POST['receive-mail'])){
		$receive_mail=$_POST['receive-mail'];
	}
}
if($response===''){
	$header = "From: $name <$email>\n";
	$header .= "MIME-version: 1.0\n";
	$header .= "Content-type: text/html; charset= iso-8859-1\n";

	$header1 = "From: Hakim AZIZI <noreply@web-developer-nantes.com>\n";
	$header1 .= "MIME-version: 1.0\n";
	$header1 .= "Content-type: text/html; charset= iso-8859-1\n";

	if(mail('hakim-azizi@web-developer-nantes.com',$subject,$message,$header)){
		$response='L&apos;email a bien &eacute;t&eacute; envoy&eacute;.';
		if(@$receive_mail){mail($email,$subject,"Voici le message que vous m'avez envoyé :
			".$message,$header1);}
	}else{
		$response='Une erreur c&apos;est produite, veuillez réessayer plus tard envoie.';
	}
}

$_SESSION['validate']='';
$_SESSION['response']=$response;
header('location: ../contact.html')
?>