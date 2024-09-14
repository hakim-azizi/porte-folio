<?php 
$picture = scandir('./photo');
$lenght_array = count($picture);
$number_picture=-1;
$array_picture=[];
for($i=0;$i<$lenght_array;$i++){
	if(strstr($picture[$i],'.jpg')){
		$number_picture++;
		array_push($array_picture,$picture[$i]);
	}
}
require "template/header.php";
$id_photo1=1;
$id_photo2=1;
$id_photo3=1;

for ($i=0; $id_photo1==$id_photo2 OR $id_photo1==$id_photo3 OR $id_photo2==$id_photo3; $i++ ){

	$id_photo1=rand(0,$number_picture);
	$id_photo2=rand(0,$number_picture);
	$id_photo3=rand(0,$number_picture);

}
$url1=str_replace('.jpg','.html',$array_picture[$id_photo1]);
$url2=str_replace('.jpg','.html',$array_picture[$id_photo2]);
$url3=str_replace('.jpg','.html',$array_picture[$id_photo3]);
?>
		<main class='content'>
			<section class='content1'>
				<h2><a href='projects.html'>Projets</a> :</h2>
				<article>
					<h3><a href='projet-la-rose-de-l-orient.html'>La Rose de l&apos;Orient</a> :</h3>
					<p>Vous d&eacute;couvrirez la page d&eacute;di&eacute;e au site que j&apos;ai con&ccedil;u avec quelque
						sp&eacute;cification technique ainsi, qu&apos;un screenshot de la page d&apos;accueil, les langages
						que j&apos;ai utilis&eacute; : HTML, CSS, JavaScript, Apache (Configuration du fichier php.ini,
						r&eacute;&eacute;criture d&apos;URL , et mise en place d&apos;une authentification de type apache),
						PHP, SQL.</p>
				</article>
				<article>
					<h3><a href='projet-robe-et-vetement.html'>Projet Robe et V&ecirc;tement</a> :</h3>
					<p>Un petit projet en HTML, CSS, JavaScript, vous y trouverez &eacute;galement une page d&eacute;dier
						&agrave; ce petit projet.</p>
				</article>
				<article>
					<h3><a href='projet-the-wild-fork.html'>Projet The Wild Fork</a> :</h3>
					<p>Ce site est le premier projet de ma formation Bootcamp de 5 mois, sur cette page, vous y trouverez
						aussi un descriptif technique, mais aussi un screenshot de la page d&apos;accueil. Ce site codé en équipe de 4 a
						&eacute;t&eacute; r&eacute;alis&eacute; en HTML, CSS, JavaScript.</p>
				</article>
				<article>
					<h3><a href='projet-faketory.html'>Projet Faketory</a> :</h3>
					<p>Ce site est le deuxi&egrave;me projet codé en équipe de ma formation Bootcamp de 5 mois, sur cette page, vous y
						trouverez aussi un descriptif technique, mais aussi un screenshot de la page d&apos;accueil. Ce site codé en équipe
						 de 4 a &eacute;t&eacute; r&eacute;alis&eacute; en React.js.</p>
				</article>
				<article>
					<h3><a href='projet-afac974.html'>Projet AFAC974</a> :</h3>
					<p>Ce site est le dernier projet de ma formation Bootcamp de 5 mois, sur cette page, vous y
						trouverez aussi un descriptif technique, mais aussi un screenshot de la page d&apos;accueil. Ce site codé en autonomie 
						a &eacute;t&eacute; r&eacute;alis&eacute; en React.js, Express.js associer à node.js et une base de donnée SQL.</p>
				</article>
				<article>
					<h3><a href='projet-carte-postale.html'>Projet carte postale</a> :</h3>
					<p>Lors de ma formation nous devions réalisé en 2 jours un site de carte postale, en deux
						a &eacute;t&eacute; r&eacute;alis&eacute; en React.js, Express.js associer à node.js.</p>
				</article>
			</section>
			<div class='content2'>
				<figure id='resize'>
					<a href='projet-<?php echo $url1; ?>' class='slide'><img id='slide1' src='photo/<?php echo $array_picture[$id_photo1]; ?>' alt=''></a>
					<a href='projet-<?php echo $url2; ?>' class='slide'><img id='slide2' src='photo/<?php echo $array_picture[$id_photo2]; ?>' alt=''></a>
					<a href='projet-<?php echo $url3; ?>' class='slide'><img id='slide3' src='photo/<?php echo $array_picture[$id_photo3]; ?>' alt=''></a>
				</figure>
			</div>
			<section>
				<h2><a href='Collaboration'>Collaboration</a> :</h2>
				<article>
					<h3>Création de site :</h3>
					<p>Vous souhaitez un site web personnel ou professionnel, et vous n&apos;avez pas les moyens, je vous
					propose de cr&eacute;er votre projet web gratuitement.</p>
				</article>
			</section>
			<section>
					<h2>Contact :</h2>
					<article>
					<h3><a href='contact.html'>Me contacter</a> :</h3>
					<p>Sur cette page vous trouverez un formulaire utilsant dans sa page de traitement la fonction mail de
						PHP mais aussi mes coordonn&eacute;e compl&egrave;te.</p>
				</article>
			</section>
		</main>
		<script>

			let value = 0.96;
			let valide = 0;
			let sliding = 0;

			const sizeImage = () => {

				const x = setInterval(() => {

					const sizeBox = document.querySelector('.content2').scrollWidth;
					const sizePicture = document.querySelector('.slide').scrollWidth;
					const contentSlide = (sizeBox + sizePicture * 1.14) * -0.98;

					if (sliding > contentSlide && valide === 0) {
						valide = 0;
					} else {
						valide = 1;
					}

					if (sliding >= 10) { valide = 0; }

					if (valide === 0) {
						sliding = sliding - value;
					} else {
						sliding = sliding + value;
					}

					document.querySelector('#resize').style.marginLeft = sliding + 'px';

				}, 10);

			};

		onload = setTimeout(sizeImage, 1000);

		</script>
<?php require "template/footer.php"; ?>