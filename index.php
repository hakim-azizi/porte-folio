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
<aside class="headband"><figure>
<?php
for($i=0;$i<$number_picture;$i++){
?>
<a href='projects/<?php echo str_replace('.jpg','.html',$array_picture[$i]); ?>'><img src='photo/<?php echo $array_picture[$i]; ?>' alt=''></a>
<?php
}
?>
</figure></aside>
            <main class='content'>
                <section>
                  <h2> Mon parcours vers le d&eacute;veloppement web</h2>
                  <div>
                    <aside>
                        <figure>
                            <img src='images/df66c823-29fc-40a8-8402-3e4251a59660409.JPG' alt='d&eacute;veloppeur web hakim AZIZI' width='250px' height='auto'>
                        </figure>
                    </aside>
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
                          vous d&eacute;couvrirez sur la <a href='projects.html'>page projet</a> ainsi que les <strong>projets r&eacute;alisés</strong>
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
                  </div>
              </section>
        </main>
<?php require "template/footer.php"; ?>
	