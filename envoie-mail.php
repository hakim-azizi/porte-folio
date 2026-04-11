<?php
$array_mail=[array('mail'=>'hakazizi@hotmail.com','name'=>'hakazizi azizi'),array('mail'=>'hakim-azizi-1976@hotmail.com','name'=>'hakim azizi')];
echo count($array_mail).'<br><br>';
for($i=0;$i<count($array_mail);$i++){
echo $array_mail[$i]['mail'].' '.$array_mail[$i]['name'].'<br>';

// On va dabors définir le fichier à envoyer et à qui
$fichier = 'cv-hakim-azizi.pdf';
$destinataire = "".$array_mail[$i]['name']." <".$array_mail[$i]['mail'].">";
$sujet = 'Candidature pour une alternance en développement web.';
// On créer un boundary unique
$boundary = md5(uniqid(rand(), true));
// On met les entêtes
$entetes = 'Content-Type: multipart/mixed;'."\r\n".' boundary="'.$boundary.'"';
$header = "From: Hakim AZIZI <hakim-azizi-1976@hotmail.com>\r\n";

$body = 'This is a multi-part message in MIME format.'."\r\n";
$body .= '--'.$boundary."\r\n";
// ici, c'est la première partie, notre texte HTML (ou pas !)
// Là, on met l'entête
$body .= 'Content-Type: text/html; charset="UTF-8"'."\r\n";
// On peut aussi mettres les autres (voir à la fin)
$body .= "\r\n";
// On remet un deuxième retour à la ligne pour dire que les entêtes sont finie, on peut afficher notre texte !
$body .= "Bonjour M ".$array_mail[$i]['name'].",

Je suis un développeur web passionné et motivé à la recherche d'une opportunité d'alternance pour continuer à monter en compétences.
J'ai été particulièrement attiré par votre entreprise pour la diversité de ses projets et la réputation d'excellence de ses équipes techniques. 
Je suis convaincu que travailler avec vous me permettrait de grandir professionnellement tout en vous apportant mes compétences en développement web.
Je vous invite à consulter mon CV en pièce jointe pour découvrir plus en détail mon parcours et mes réalisations.
Je serais ravi de pouvoir échanger avec vous pour discuter de la manière dont je pourrais contribuer à vos projets.
Dans l'attente d'une réponse concernant un contrat d'alternance, je souhaitais vous proposer un stage d'un mois sous convention avec la Wild Code School. Ce stage pourrait faire office de période de connaissance mutuelle, vous permettant de mieux évaluer mes compétences et ma motivation avant de finaliser l'alternance. Je suis à votre disposition pour discuter de cette option et vous fournir les documents nécessaires. 

Cordialement,";
// Le texte est finie, on va faire un saut à la ligne
$body .= "\r\n";
// Et on commence notre deuxième partie qui va contenir le PDF
$body .= '--'.$boundary."\r\n";
// On lui dit (dans le Content-type) que c'est un fichier PDF
$body .= 'Content-Type: application/pdf; name="'.$fichier.'"'."\r\n";
$body .= 'Content-Transfer-Encoding: base64'."\r\n";
$body .= 'Content-Disposition: attachment; filename="'.$fichier.'"'."\r\n";
// Les entêtes sont finies, on met un deuxième retour à la ligne
$body .= "\r\n";
$source = file_get_contents($fichier);
$source = base64_encode ($source);
$source = chunk_split($source);
$body .= $source;
// On ferme la dernière partie :
$body .= "\r\n".'--'.$boundary.'--';
// On envoi le mail :
if(mail($destinataire, $sujet, $body, $header, $entetes)){
echo"Le mail a bien été envoyer à ".$array_mail[$i]['name']."";}else{
echo"ERROR !!! Le mail mail n'a pas été envoyer à ".$array_mail[$i]['name']." ERROR !!!";
}
echo'<br>';
}
?>