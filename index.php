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
require "template/header.php"; ?>
<div><figure>
<?php
for($i=0;$i<$number_picture;$i++){
?>
<a href='projects/<?php echo str_replace('.jpg','.html',$array_picture[$i]); ?>'><img src='photo/<?php echo $array_picture[$i]; ?>' alt=''></a>
<?php
}
?>
</figure></div>
            <main class='content'>
              <section>
                  <h2> Mon parcours vers le d&eacute;veloppement web</h2> 
                  <article>
                      <h3>Formation d&eacute;vellopeur web</h3>
                      <p>
                          J'ai suivi une formation Bootcamp, chez la Wild Code School, en tant que <strong>d&eacute;veloppeur
                          web</strong>.
                      </p>
                  </article>
                  <article>
                      <h3>Mon parcours vers le m&eacute;tier de d&eacute;vellopeur web</h3>
                      <p>
                          Il y a quelques ann&eacute;es de cela, j&apos;ai <strong>cod&eacute;</strong> en <em>autodidacte</em> un site de vente fonctionnel bien s&ucirc;r sans avoir suivi de formation, que
                          vous d&eacute;couvrirez sur la <a href='project.html'>page projet</a> ainsi que les <strong>projets r&eacute;alisés</strong>
                          au sein de la Wild.
                      </p>
                      <p>
                          Ayant eu un accident du travail, suivi d&apos;un licenciement pour inaptitude professionnel (titulaire
                          d&apos;une RQTH), et cette premi&egrave;re exp&eacute;rience m&apos;ont naturellement conduit vers une
                          reconversion vers le <em>d&eacute;veloppement web</em>.
                      </p>
                      <p>
                          Je suis donc actuellement &agrave; la recherche d&apos;un poste en alternance <strong>d&eacute;veloppeur web
                          fullstack</strong>, afin d&apos;affin&eacute; mes connaissances, et
                          d&apos;en acqu&eacute;rir d&apos;autres que je mettrais &agrave; votre service.
                      </p>
                  </article>
              </section>
              <section>
                <h2>Développeur Web</h2>
                <article>
                  <h3>Mon expertise en tant que développeur web</h3>
                  <p>
                    En tant que <em>développeur web</em>, j'ai acquis une solide expertise dans la <em>création de sites internet performants</em> et adaptés aux <em>besoins spécifiques des clients</em>. Chaque <strong>projet</strong> que je réalise en tant que <em>développeur web</em> est conçu pour être à la fois <em>ergonomique</em> et <strong>optimisé pour les moteurs de recherche</strong>.
                  </p>
                  <p>
                    <strong>Mon rôle de développeur web</strong> consiste à <em>créer des solutions</em> sur mesure en fonction des <em>objectifs de chaque client</em>. Je vous invite à découvrir quelques-unes de <strong>mes réalisations</strong> dans mon <strong><a href="/portefolio.html">portefolio</a></strong>, où vous trouverez des <em>projets variés</em>.
                  </p>
                  <p>
                    Que ce soit pour un <strong>site vitrine ou une boutique en ligne</strong>, chaque <em><a href="/projects.html">projet</a></em> que je <strong>réalise en tant que développeur web</strong> est pensé pour offrir la meilleure <strong>expérience utilisateur</strong>. Explorez mon <em>portefolio et mes projets</em> pour en savoir plus.
                  </p>
                </article>
              </section>
              <section>
                <h2><a href="/portefolio.html">Portefolio</a></h2>
                <article>
                  <h3>Découvrez mon portefolio de développeur web</h3>
                  <p>
                    Mon <em>portefolio</em> met en lumière <strong>mon expertise</strong> de <em>développeur web</em> à travers une variété de <em>projets</em>. Vous y découvrirez mes réalisations, conçues pour répondre <strong>aux besoins uniques de chaque client</strong> et <em>optimiser leur présence en ligne</em>.
                  </p>
                  <p>
                    Chaque <em>projet</em> contenu dans ce <strong>portefolio</strong> reflète mon engagement en tant que <strong>développeur web</strong> à fournir des <em>solutions techniques de qualité</em>. Je vous invite également à explorer la page dédiée à mes <strong><a href="/projects.html">projets</a></strong> pour voir comment j'aborde les différentes demandes.
                  </p>
                  <p>
                    Si vous souhaitez en savoir plus sur <em>mon parcours en tant que développeur web</em>, n'hésitez pas à visiter ma page dédiée à mon rôle de <strong><a href="./">développeur web</a></strong>, où j'explique en détail mes compétences et mon approche du <em>développement web</em>.
                  </p>
                </article>
              </section>
              <section>
                <h2><a href="/projects.html">Projets</a></h2>
                <article>
                  <h3>Mes projets en tant que développeur web</h3>
                  <p>
                    En tant que <strong>développeur web</strong>, chaque <em>projet</em> est une occasion de relever de <strong>nouveaux défis techniques</strong>. Je m'assure de toujours proposer des <em>solutions adaptées aux besoins des clients</em>, tout en garantissant des <strong>performances optimales</strong>.
                  </p>
                  <p>
                    Mon expertise dans le <em>développement web</em> se reflète à travers les différents <em><a href="/portefolio.html">projets présentés dans mon portefolio</a></em>. Vous pourrez y explorer mes réalisations.
                  </p>
                  <p>
                    Si vous souhaitez en savoir plus sur mes compétences de <strong><a href="./">développeur web</a></strong> et voir comment je peux vous aider à <em>mener à bien votre projet</em>, n'hésitez pas à consulter les autres sections de mon site.
                  </p>
                </article>
              </section>
        </main>
<?php require "template/footer.php"; ?>
	