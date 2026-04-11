<?php
if($_SERVER['SERVER_NAME']!="web-developer-nantes.com"){
if($_SERVER['SERVER_NAME']=="www.web-developer-nantes.com"){
header("Status:301 Moved Permanently", false, 301);
header("location:https://web-developer-nantes.com".$_SERVER["REQUEST_URI"]."");
exit();
}
if(!$connectionbd=mysqli_connect("localhost","root","20-Juillet-1976","webdk3_webdeveloper")){echo 'ERREUR !!!';}
}else{
     $connectionbd=mysqli_connect("webdqx-webdeveloper.db.tb-hosting.com","webdqx_hakazizi","20-Juillet-1976" ,"webdqx_webdeveloper") OR diemysql_error('erreur de connexion');
}
?>