<?php 
$metat_description='';
$keywords='';
require "template/header.php"; ?>
		<main class='content'>
		<section>
                <h2><a href="/portfolio.html">Portfolio</a></h2>
				<div>
                <aside>
                        <figure>
                            <img src='images/df66c823-29fc-40a8-8402-3e4251a59660409.webp' alt='d&eacute;veloppeur web hakim AZIZI' width='250px' height='auto'>
                        </figure>
                    </aside>
                <article>
                  <h3>Découvrez mon portfolio de développeur web</h3>
                  <p>
                    Mon <em>portfolio</em> met en lumière <strong>mon expertise</strong> de <em>développeur web</em> à travers une variété de <em>projets</em>. Vous y découvrirez mes réalisations, conçues pour répondre <strong>aux besoins uniques de chaque client</strong> et <em>optimiser leur présence en ligne</em>.
                  </p>
                  <p>
                    Chaque <em>projet</em> contenu dans ce <strong>portfolio</strong> reflète mon engagement en tant que <strong>développeur web</strong> à fournir des <em>solutions techniques de qualité</em>. Je vous invite également à explorer la page dédiée à mes <strong><a href="/projects.html">projets</a></strong> pour voir comment j'aborde les différentes demandes.
                  </p>
                  <p>
                    Si vous souhaitez en savoir plus sur <em>mon parcours en tant que développeur web</em>, n'hésitez pas à visiter ma page dédiée à mon rôle de <strong><a href="./">développeur web</a></strong>, où j'explique en détail mes compétences et mon approche du <em>développement web</em>.
                  </p>
                </article>
				</div>
              </section>
			<section class='content1'>
				<h2><a href='projects.html'>Projets</a> :</h2>
				<div class='content'>
					<?php
					$data_portfolio=mysqli_query($connectionbd,'SELECT * FROM portfolio ORDER BY RAND() LIMIT 4');
					while($portfolio=mysqli_fetch_assoc($data_portfolio)) {
					?>
				<article>
					<?php $url=str_replace('.jpg','.html',$portfolio['screen']); ?>
					<h3><a href='projects/<?php echo $url; ?>'><?php echo $portfolio['title']; ?></a></h3>
					<figure class="alignment"><img src="photo/<?php echo $portfolio['screen']; ?>" alt=""></figure>
					<p class="text"><?php echo $portfolio['description']; ?></p>
					<p><a href="<?php echo $portfolio['url']; ?>" target="_blank">Tester le site</a></p>
					<picture><a href='<?php echo $portfolio['github']; ?>' target='_blank'><img src='../images/github.png' alt='logo GitHub'></a></picture>
				</article><?php } ?>
				</div>
			</section>
		</main>
<?php require "template/footer.php"; ?>