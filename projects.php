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
require 'template/header.php'; ?>
<main>
<?php
if($valide===0){ ?>
<section>
                <div  class='content'>
                <div>
                <h2><a href='/projects.html'>Projets</a></h2>
                    <aside>
                        <figure>
                            <img src='images/df66c823-29fc-40a8-8402-3e4251a59660409.JPG' alt='d&eacute;veloppeur web hakim AZIZI' width='250px' height='auto'>
                        </figure>
                    </aside>
                <article>
                  <h3>Mes projets en tant que développeur web</h3>
                  <p>
                    En tant que <strong>développeur web</strong>, chaque <em>projet</em> est une occasion de relever de <strong>nouveaux défis techniques</strong>. Je m'assure de toujours proposer des <em>solutions adaptées aux besoins des clients</em>, tout en garantissant des <strong>performances optimales</strong>.
                  </p>
                  <p>
                    Mon expertise dans le <em>développement web</em> se reflète à travers les différents <em><a href="/portefolio.html">projets présentés dans mon portefolio</a></em>. Vous pourrez y explorer mes réalisations.
                  </p>
                  <p>
                    Si vous souhaitez en savoir plus sur mes compétences de <strong><a href="web-developer.html">développeur web</a></strong> et voir comment je peux vous aider à <em>mener à bien votre projet</em>, n'hésitez pas à consulter les autres sections de mon site.
                  </p>
                </article>
                </div></div>
            </section>
<section>
  <h2>Projets de Développement Web : Backend, Frontend et APIs</h2>
  <div  class='content'>
  <article>
    <h3>Développement d'une plateforme de gestion utilisateurs avec PHP et MySQL</h3>
    <figure class='alignment'><img src='photo/la-rose-de-l-orient.jpg' alt=''></figure>
    <p class='text'>J'ai&nbsp;développé&nbsp;une&nbsp;plateforme complète en PHP avec MySQL pour gérer des utilisateurs, leurs données et leurs actions. PHP gère les requêtes serveur et l'intégration des formulaires, tandis que MySQL stocke les informations dans une base relationnelle. J'ai mis en place des fonctionnalités comme la gestion d'authentification, les rôles utilisateurs et les interactions sécurisées, avec une gestion fluide des données.</p>
    </article>
    <article>
    <h3>Conception d'une API REST avec Express.js et MySQL pour manipuler des données</h3>
    <figure class='alignment'><img src='photo/afac974.jpg' alt=''></figure>
    <p class='text'>En&nbsp;utilisant&nbsp;Express.js&nbsp;et&nbsp;MySQL, j'ai développé une API REST qui permet aux utilisateurs d'interagir avec les données via des requêtes HTTP. Express.js gère la logique serveur et les routes, tandis que MySQL stocke et organise les informations. J'ai également implémenté des contrôles de validation des données et des mécanismes de sécurité pour protéger les échanges entre l'API et la base de données MySQL.</p>
  </article>
  <article>
    <h3>Création d'une interface web interactive avec HTML, CSS et JavaScript</h3>
    <figure class='alignment'><img src='photo/robe-et-vetement.jpg' alt=''></figure>
    <p class='text'>Avec&nbsp;HTML&nbsp;pour&nbsp;la&nbsp;structure, CSS pour la mise en forme, et JavaScript pour la logique dynamique, j'ai créé une interface utilisateur interactive et responsive. Les animations CSS ajoutent de la fluidité, tandis que JavaScript manipule le DOM pour rendre l'expérience plus dynamique, avec des fonctionnalités comme des menus interactifs, des sliders d'images, et des validations de formulaires en temps réel.</p>
  </article>
   <article>
    <h3>Développement d'une application web réactive et modulaire avec React</h3>
    <figure class='alignment'><img src='photo/faketory.jpg' alt=''></figure>
    <p class='text'>J'ai&nbsp;conçu&nbsp;une&nbsp;application dynamique basée sur des composants réutilisables. Grâce au système de gestion d'état de React, l'application peut mettre à jour l'interface en temps réel sans rechargement de page, offrant ainsi une expérience utilisateur fluide. Chaque composant est autonome, ce qui permet une maintenance plus facile et un développement rapide de nouvelles fonctionnalités.</p>
  </article>
  </div>
</section>
<?php
}else{ ?> 
<section>
  <h2><?php echo $h2; ?></h2>
  <article>
    <h3><?php echo $h3; ?></h3>
    <figure class='screen'><img src='../photo/<?php echo $screen; ?>' alt='<?php echo $alt; ?>'></figure>
    <p class='text'><?php echo $description; ?></p>
    </article>
    <div style='clear: both;'></div>
<?php } ?>
</main>
<?php
include 'template/footer.php';
?>