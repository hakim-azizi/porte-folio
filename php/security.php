<?php
$request_url=$_SERVER['REQUEST_URI'];
if(strstr($request_url,'.php')){include'404.php';}
if($request_url==='/index.html'){ require 'php/404.php';}
if(strstr($request_url,'?')){
    $new_url=preg_replace('#\?.*#','',$request_url);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location: $new_url");
    exit();
}
$real_url=$_SERVER['PHP_SELF'];
?>