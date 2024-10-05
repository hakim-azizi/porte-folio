<?php
require './php/security.php';
?><!DOCTYPE html>
<html lang='fr'>
	<head>
		<title>D&eacute;veloppeur web<?php if($title!=='d&eacute;veloppeur web'){ echo ' : '.$title; } ?></title>
		<meta name='Description' content='<?php echo $metat_description; ?>'>
		<meta name='Keywords' content='<?php echo $keywords; ?>'>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta name='contactstate' content='France'>
		<meta name='contactcity' content='Nantes'>
		<meta name='language' content='fr'>
		<link href="<?php echo $adjust_url; ?>style/style.css" rel="stylesheet" type="text/css">
		<?php if($title==="Hakim AZIZI" OR $title==="d&eacute;veloppeur web" OR $title==="contact" OR $title==="partenaire"){  ?>
		<link href="<?php echo $adjust_url; ?>style/headband.css" rel="stylesheet" type="text/css">
<?php }  ?>
<?php if($title==='contact'){ ?>
		<link href="<?php echo $adjust_url; ?>style/contact.css" rel="stylesheet" type="text/css">
<?php } ?>
<?php if($title==='portfolio'){ ?>
		<link href="<?php echo $adjust_url; ?>style/portfolio.css" rel="stylesheet" type="text/css">
<?php } ?>
	</head>
	<body>
		<header class='navbar'>
			<nav>
				<p><a href='../<?php echo "$adjust_url'"; if($title==="Hakim AZIZI"){ ?> class='current'<?php } ?>>Accueil</a></p>
				<ul id='show-menu'>
					<li><a href='<?php echo $adjust_url; ?>web-developer.html' <?php if($title==="d&eacute;veloppeur web"){ ?>class='current'<?php } ?>>D&eacute;veloppeur web</a></li>
					<li><a href='<?php echo $adjust_url; ?>cv-hakim-azizi.html' <?php if($title==="CV Hakim AZIZI"){ ?>class='current'<?php } ?>>CV</a></li>
					<li><a href='<?php echo $adjust_url; ?>portfolio.html' <?php if($title==="portfolio"){ ?>class='current'<?php } ?>>Portfolio</a></li>
					<li id='show-projects' onclick="openProjects()"><span <?php if(strstr($title,'projet ')){ ?>class='current'<?php } ?>>Voir les projets</span>
					<ul id='projects'>
					<?php 
					$i=0;
					while($projects=mysqli_fetch_array($data_projects)){
						if($i===0){
								if($title==='projet AFAC974'){ ?>
									<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>' class='current'><?php echo $projects['name']; ?></a></li><?php }else{ ?>
									<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>'><?php echo $projects['name']; ?></a></li><?php  }
						}

						if($i===1){
							if($title==='projet cr&eacute;ation de carte postale'){ ?>
								<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>' class='current'><?php echo $projects['name']; ?></a></li><?php }else{ ?>
								<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>'><?php echo $projects['name']; ?></a></li><?php }
						}
						
						if($i===2){
							if($title==='projet Faketory'){ ?>
								<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>' class='current'><?php echo $projects['name']; ?></a></li><?php }else{  ?>
								<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>'><?php echo $projects['name']; ?></a></li><?php }
						}	
						
						if($i===3){
							if($title==='projet la Rose de l&apos;Orient'){ ?>
							<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>' class='current'><?php echo $projects['name']; ?></a></li><?php }else{ ?>
								<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>'><?php echo $projects['name']; ?></a></li><?php }
						}	
							
						if($i===4){
							if($title==='projet Robe et V&ecirc;tement'){ ?>
								<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>' class='current'><?php echo $projects['name']; ?></a></li><?php }else{ ?>
								<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>'><?php echo $projects['name']; ?></a></li><?php }
						}
						
						if($i===5){
							if($title==='projet THE Wild FORK'){ ?>
								<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>' class='current'><?php echo $projects['name']; ?></a></li><?php }else{ ?>
								<li><a href='<?php echo $adjust_url; ?>projects/<?php echo str_replace('.webp','.html',$projects['screen']); ?>'><?php echo $projects['name']; ?></a></li><?php }
						}
						$i++;
					}
							?>

					</ul>				
				</li>
					<li><a href='<?php echo $adjust_url; ?>collaboration.html' <?php if($title==="collaboration"){ ?>class='current'<?php } ?>>Collaboration</a></li>
					<li><a href='<?php echo $adjust_url; ?>contact.html' <?php if($title==="contact"){ ?>class='current'<?php } ?>>Contact</a></li>
					<li><a href='<?php echo $adjust_url; ?>partner.html' <?php if($title==="partenaire"){ ?>class='current'<?php } ?>>Partenaire</a></li>
				</ul>
				<img class='menu' src="<?php echo $adjust_url; ?>images/menu-burger.png" alt="ouvrir le menu" onclick="openMenu()">
			</nav>
		</header>
		<header class='title'>
			<h1><?php echo ucfirst($title); if($title!=='d&eacute;veloppeur web'){ ?> : d&eacute;veloppeur web <?php } ?></h1>
			<p>Bonjour et bienvenue</p>
			<picture style="display:flex;align-items: center;gap:1rem;"><a href='https://www.linkedin.com/in/hakim-azizi/' target='_blank'><img src="<?php echo $adjust_url; ?>images/linkedin.png" style="width:30px;height:30px;" alt='logo linkedin'></a><a href='https://github.com/hakim-azizi/' target='_blank'><img src="<?php echo $adjust_url; ?>images/github.png" style="width:40px;height:40px;" alt="logo github"></a></picture>
		</header>
