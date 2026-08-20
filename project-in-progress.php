<?php
$metat_description='';
require 'template/header.php';
?><p>Vous trouverez sur cette page les projets en cours</p>
<h2 style="padding:1em;">Projet Zenvya</h2>

<main>
    <section>
  <h3>Caractéristique technique:</h3>
  <article>
    <h4>Objectif, langage, framework, outils et technique utilisée :</h4>
    <figure class='screen'><a href="https://zenvya.vercel.app/" target="_blank"><img src='../photo/zenvya.jpg' alt="Visuel de la page d'accueil du projet Zenvya"></a></figure>
    <p class='text'>
        Ce projet vient d'une réflexion personnelle : <br>
        Qu'est-ce qui peut aider les gens à mieux vivre au quotidien ?<br>
        J'ai pensé qu'utiliser l'IA pourrait permettre à ceux qui le souhaitent de mieux vivre, que ce soit :
        <ul style="  list-style-position: inside; padding-left: 1em;">
            <li>dans leurs habitudes,</li>
            <li>le temps consacré à différentes activités,</li>
            <li>leur santé,</li>
            <li>les aider à gérer leur budget.</li>
        </ul>
        Chacun de ces sujets est accompagné de conseils personnalisés, mais aussi des conseils sur l'ensemble des sujets traités.<br>
        <br>
        J'ai commencé par le front-end en React TypeScript, car je pense que cette librairie est réellement adaptée au projet, et TypeScript, pour éviter tous les bugs liés au mauvais typage.<br>
        Et dans un second temps convertir ReactJS en React Native pour avoir une application web à une application mobile. qui utiliseront le même back-end<br>
        <br>
        Pour le back-end, j'ai hésité entre Python et Java. Après m'être longuement documenté, j'ai choisi Java, associé au framework Spring Boot, qui m'a semblé être la meilleure solution, et l'architecture sera Modèle-Vue-Contrôleur (MVC).<br>
        <br>
        Pour la base de données, j'ai trouvé que PostgreSQL était un bien meilleur choix que MySQL pour ce projet.<br>
        <br>
        Ce projet va me permettre de découvrir le langage Java, le framework Spring Boot et les bases de données PostgreSQL, mais aussi l'intégration de l'intelligence artificielle dans une application.
    </p>
    <p><a href="https://zenvya.vercel.app/" target="_blank">Tester le site</a></p>
    <picture><a href='https://github.com/hakim-azizi/zenvya' target='_blank'><img src='../images/github.png' alt='logo GitHub'></a></picture>
    </article>
    <div style='clear: both;'></div>
</main>
<?php
include 'template/footer.php';
?>