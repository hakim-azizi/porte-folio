<?php
if($_SERVER['SERVER_NAME']!="site.com"){
if($_SERVER['SERVER_NAME']=="www.site.com"){
header("Status:301 Moved Permanently", false, 301);
header("location:https://site.com".$_SERVER["REQUEST_URI"]."");
exit();
}
$connectionbd=mysqli_connect("localhost","root","","web_developer");
}else{
$connectionbd=mysqli_connect("data-base-server","database_user","password" ,"database_name");
}
?>