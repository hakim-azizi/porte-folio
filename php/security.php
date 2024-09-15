<?php
$request_url=$_SERVER['REQUEST_URI'];
if(strstr($request_url,'.php')){include'404.php';}
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

if(strstr($request_url,'?')){
    $new_url=preg_replace('#\?.*#','',$request_url);
    header("Status: 301 Moved Permanently", false, 301);
    header("Location: $new_url");
    exit();
}
$adjust_url=preg_replace(array("@(^[/]{1})@","@([A-Za-z0-9:_\=\&\.\?\+\%\-])@","@/@"),array("","","../"),$request_url);
$real_url=$_SERVER['PHP_SELF'];
?>