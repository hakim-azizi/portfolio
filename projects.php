<?php
include 'template/header.php'; ?>
<main>
<?php
if(!@$_GET['project']){ ?>

<section>
  <h2>Projets de Développement Web : Backend, Frontend et APIs</h2>
  <div  class='content'>
  <article>
    <h3>Développement d'une plateforme de gestion utilisateurs avec PHP et MySQL</h3>
    <figure class='alignment'><img src="photo/la-rose-de-l-orient.jpg" alt=""></figure>
    <p class='text'>J'ai&nbsp;développé&nbsp;une&nbsp;plateforme complète en PHP avec MySQL pour gérer des utilisateurs, leurs données et leurs actions. PHP gère les requêtes serveur et l'intégration des formulaires, tandis que MySQL stocke les informations dans une base relationnelle. J'ai mis en place des fonctionnalités comme la gestion d'authentification, les rôles utilisateurs et les interactions sécurisées, avec une gestion fluide des données.</p>
    </article>
    <article>
    <h3>Conception d'une API REST avec Express.js et MySQL pour manipuler des données</h3>
    <figure class='alignment'><img src="photo/afac974.jpg" alt=""></figure>
    <p class='text'>En&nbsp;utilisant&nbsp;Express.js&nbsp;et&nbsp;MySQL, j'ai développé une API REST qui permet aux utilisateurs d'interagir avec les données via des requêtes HTTP. Express.js gère la logique serveur et les routes, tandis que MySQL stocke et organise les informations. J'ai également implémenté des contrôles de validation des données et des mécanismes de sécurité pour protéger les échanges entre l'API et la base de données MySQL.</p>
  </article>
  <article>
    <h3>Création d'une interface web interactive avec HTML, CSS et JavaScript</h3>
    <figure class='alignment'><img src="photo/robe-et-vetement.jpg" alt=""></figure>
    <p class='text'>Avec&nbsp;HTML&nbsp;pour&nbsp;la&nbsp;structure, CSS pour la mise en forme, et JavaScript pour la logique dynamique, j'ai créé une interface utilisateur interactive et responsive. Les animations CSS ajoutent de la fluidité, tandis que JavaScript manipule le DOM pour rendre l'expérience plus dynamique, avec des fonctionnalités comme des menus interactifs, des sliders d'images, et des validations de formulaires en temps réel.</p>
  </article>
   <article>
    <h3>Développement d'une application web réactive et modulaire avec React</h3>
    <figure class='alignment'><img src="photo/faketory.jpg" alt=""></figure>
    <p class='text'>J'ai&nbsp;conçu&nbsp;une&nbsp;application dynamique basée sur des composants réutilisables. Grâce au système de gestion d'état de React, l'application peut mettre à jour l'interface en temps réel sans rechargement de page, offrant ainsi une expérience utilisateur fluide. Chaque composant est autonome, ce qui permet une maintenance plus facile et un développement rapide de nouvelles fonctionnalités.</p>
  </article>
  </div>
</section>
<?php
}else{ ?> <img src="../photo/<?php echo $screen; ?>" alt="<?php echo $alt; ?>">
<?php } ?>
</main>
<?php
include 'template/footer.php';
?>