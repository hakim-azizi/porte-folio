<?php
$description='';
$filename = 'cv-hakim-azizi.pdf';
$content = file_get_contents($filename);
header("Content-Disposition: inline; filename=$filename");
header("Content-type: application/pdf; text/html;");
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
 include 'template/header.php';
echo $content;
 include 'template/footer.php';
?>