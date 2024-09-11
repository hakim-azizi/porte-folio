<?php require "php/header.php"; ?>
	<main class='content'>
		<section class='content1'>
			<h2><a href='projet.html'>Projet</a> :</h2>
			<article>
				<h3><a href='projet-la-rose-de-l-oreint.html'>La Rose de l&apos;Orient</a> :</h3>
				<p>Vous d&eacute;couvrirez la page d&eacute;di&eacute;e au site que j&apos;ai con&ccedil;u avec quelque
					sp&eacute;cification technique ainsi, qu&apos;un screenshot de la page d&apos;accueil, les langages
					que j&apos;ai utilis&eacute; : HTML, CSS, JavaScript, Apache (Configuration du fichier php.ini,
					r&eacute;&eacute;criture d&apos;URL , et mise en place d&apos;une authentification de type apache),
					PHP, SQL.</p>
				<h3><a href='projet-robe-de-l-oreint.html'>Projet Robe de l&apos;Orient</a> :</h3>
				<p>Un petit projet en HTML, CSS, JavaScript, vous y trouverez &eacute;galement une page d&eacute;dier
					&agrave; ce petit projet.</p>
				<h3><a href='projet-the-wild-fork.html'>Projet The Wild Fork</a> :</h3>
				<p>Ce site est le premier projet de ma formation Bootcamp de 5 mois, sur cette page, vous y trouverez
					aussi un descriptif technique, mais aussi un screenshot de la page d&apos;accueil ce site a
					&eacute;t&eacute; r&eacute;alis&eacute; en HTML, CSS, JavaScript.</p>
				<h3><a href='projet-faketory.html'>Projet Faketory</a> :</h3>
				<p>Ce site est le deuxi&egrave;me projet de ma formation Bootcamp de 5 mois, sur cette page, vous y
					trouverez aussi un descriptif technique, mais aussi un screenshot de la page d&apos;accueil ce site
					a &eacute;t&eacute; r&eacute;alis&eacute; en React.js.</p>
			</article>
		</section>
		<section class='content3'>
			<h2><a href='Collaboration'>Collaboration</a> :</h2>
			<article>
				<h3>Création de site :</h3>
				<p>Vous souhaitez un site web personnel ou professionnel, et vous n&apos;avez pas les moyens, je vous
					propose de cr&eacute;er votre projet web gratuitement, une seule obligation me donner
					l&apos;autorisation de me servir de votre site pour agr&eacute;menter mon portfolio, ainsi que mon
					CV.</p>
			</article>
		</section>
		<section class='content4'>
			<h2>Contact :</h2>
			<article>
				<h3><a href='contact.html'>Me contacter</a> :</h3>
				<p>Sur cette page vous trouverez un formulaire utilsant dans sa page de traitement la fonction mail de
					PHP mais aussi mes coordonn&eacute;e compl&egrave;te.</p>
			</article>
		</section>
		<div class='content2'>
			<figure id='resize'>
				<img id='slide1' class='slide' src='photo/photo1.jpg' alt=''><img id='slide2' class='slide'
					src='photo/photo2.jpg' alt=''><img id='slide3' class='slide' src='photo/photo3.jpg' alt=''>
			</figure>
		</div>
</main>
<?php require "php/footer.php"; ?>
	<script>

		let value = 0.96;
		let valide = 0;
		let sliding = 0;

		const sizeImage = () => {

			// clearTimeout(this.timeoutID);

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

				console.log(sliding + ' => ' + contentSlide + ' => ' + valide);
				document.querySelector('#resize').style.marginLeft = sliding + 'px';

			}, 10);

		};

		onload = setTimeout(sizeImage, 1000);


	</script>
