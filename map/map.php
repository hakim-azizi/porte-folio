<?php echo"<?xml"; ?> version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
		<loc>https://web-developer-nantes.com</loc>
		<lastmod><?php echo date("Y-m-d"); ?></lastmod>
	</url>
<?php
$page = scandir('../');
$lenght_array = count($page);
$number_page=0;
$array_page=[];
for($i=0;$i<$lenght_array;$i++){
	if(strstr($page[$i],'.php') AND !strstr($page[$i],'google')){
		$show_page=str_replace('.php','.html',$page[$i]);
		$show_page=str_replace('projects.html','projects',$show_page);		
		$number_page++; ?>
	<url>
		<loc>https://web-developer-nantes.com/<?php echo $show_page; ?></loc>
		<lastmod><?php echo date("Y-m-d"); ?></lastmod>
	</url>
<?php
	}
}
$project = scandir('../photo');
$lenght_array = count($project);
$number_project=0;
$array_project=[];
for($i=0;$i<$lenght_array;$i++){
	if(strstr($project[$i],'.jpg')){
		$show_project=str_replace('.jpg','.html',$project[$i]);
		$number_project++;
		?>
	<url>
		<loc>https://web-developer-nantes.com/<?php echo $show_project; ?></loc>
		<lastmod><?php echo date("Y-m-d"); ?></lastmod>
	</url>
<?php
	}
}
?>
</urlset>