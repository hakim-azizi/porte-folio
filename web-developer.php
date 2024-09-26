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
                <h2>Développeur Web</h2>
                <div>
                <aside>
                        <figure>
                            <img src='images/df66c823-29fc-40a8-8402-3e4251a59660409.JPG' alt='d&eacute;veloppeur web hakim AZIZI' width='250px' height='auto'>
                        </figure>
                    </aside>
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
                </div>
              </section>              
            </main>
<?php
require 'template/footer.php';
?>