<?php 
$picture = scandir('./photo');
$lenght_array = count($picture);
$number_picture=0;
$array_picture=[];
for($i=0;$i<$lenght_array;$i++){
	if(strstr($picture[$i],'.jpg')){
		$number_picture++;
		array_push($array_picture,$picture[$i]);
	}
}
$metat_description='';
require 'template/header.php'; ?>
<main>
<?php
if($valide===0){ ?>
<section>
                <div class='content'>
                <div>
                <h2><a href='/projects.html'>Projets</a></h2>
                    <aside>
                        <figure>
                            <img src='images/df66c823-29fc-40a8-8402-3e4251a59660409.webp' alt='d&eacute;veloppeur web hakim AZIZI' width='333px' height='auto'>
                        </figure>
                    </aside>
                <article>
                  <h3>Mes projets en tant que développeur web</h3>
                  <p>
                    En tant que <strong>développeur web</strong>, chaque <em>projet</em> est une occasion de relever de <strong>nouveaux défis techniques</strong>. Je m'assure de toujours proposer des <em>solutions adaptées aux besoins des clients</em>, tout en garantissant des <strong>performances optimales</strong>.
                  </p>
                  <p>
                    Mon expertise dans le <em>développement web</em> se reflète à travers les différents <em><a href="/portfolio.html">projets présentés dans mon portfolio</a></em>. Vous pourrez y explorer mes réalisations.
                  </p>
                  <p>
                    Si vous souhaitez en savoir plus sur mes compétences de <strong><a href="web-developer.html">développeur web</a></strong> et voir comment je peux vous aider à <em>mener à bien votre projet</em>, n'hésitez pas à consulter les autres sections de mon site.
                  </p>
                </article>
                </div></div>
            </section>
<section>
  <h2>Projets de Développement Web : Back-end,  front-end et APIs</h2>
  <div  class='content'>
    <?php 
    $data_project=mysqli_query($connectionbd,"SELECT * FROM portfolio WHERE title!='' ORDER BY RAND() LIMIT 4");
if(!$data_project){
    die("Erreur SQL : " . mysqli_error($connectionbd));
}
    while($project=mysqli_fetch_assoc($data_project)){ ?>
  <article>
    <h3><?php echo $project['title']; ?></h3>
    <figure class='alignment'><img src='photo/<?php echo $project['screen']; ?>' alt='<?php echo $project['alt']; ?>'></figure>
    <p class='text'><?php echo $project['description']; ?></p>
    <p class='text'><a href='<?php echo $project['url']; ?>'>Tester le site</a></p>
    <picture><a href='<?php echo $project['github']; ?>' target='_blank'><img src='../images/github.png' alt='logo GitHub'></a></picture>
    </article>
<?php } ?>
  </div>
</section>
<?php
}else{ ?> 
<section>
  <h2>Caractéristique technique:</h2>
  <article>
    <h3>Objectif, langage, framework, outils et technique utilisée :</h3>
    <figure class='screen'><a href="<?php echo $project['url']; ?>" target="_blank"><img src='../photo/<?php echo $project['screen']; ?>' alt='<?php echo $alt; ?>'></a></figure>
    <p class='text'><?php echo nl2br($project['description']); ?></p>
    <p><a href="<?php echo $project['url']; ?>" target="_blank">Tester le site</a></p>
    <picture><a href='<?php echo $project['github']; ?>' target='_blank'><img src='../images/github.png' alt='logo GitHub'></a></picture>
    </article>
    <div style='clear: both;'></div>
<?php } ?>
</main>
<?php
include 'template/footer.php';
?>