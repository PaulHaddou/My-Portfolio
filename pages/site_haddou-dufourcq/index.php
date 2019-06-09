<?php
    // Fill in all the information of the head tag
    $title = 'Paul Haddou - Site Haddou-Dufourcq';
    $metaname = '';
    $cssMain = '../../styles/projectPage/projectPage.min.css';
    $cssNavbarMobile = '../../styles/navbarMobile/navbarMobile.min.css';
    $cssSidebar = '../../styles/sidebar/sidebar.min.css';
    
    // Include the head
    include '../../includes/head.php';
?>
  <body>
  <!-------------- Nav And Sidebar ---------------->
  <?php
    // Links In the Nav and Side bar
    $hrefProjects = '../../';
    $hrefdevelopment = '../development/';
    $hrefDesign = '../design/';
    $hrefMotion = '../motion/';
    $hrefAbout = '../about/';

    // Allows you to correctly indicate in the sidebar which section you are in
    $activAbout = $activDev = $activDesign = $activMotion = '';
    $spanAbout = $spanDev = $spanDesign = $spanMotion = '';
    $activProjects = 'class="activ"';
    $spanProjects = '<span></span>';

    // Includes
    include '../../includes/navbarMobile.php';
    include '../../includes/sidebar.php';
  ?>
  <!-- All the informations for the project -->
  <?php
    $projectImg = '../../img/site_haddou-dufourcq/site_haddou-dufourcq.jpg';
    $projectImgAlt = 'Image représentant la home du site Haddou-Dufourcq.com';
    $projectTitle = 'Site Haddou-Dufourcq';
    $projectLinkHref = 'https://www.haddou-dufourcq.com';
    $projectLink = 'www.haddou-dufourcq.com';
    $projectYear = '2018 - 2019';
    $projectRoles = 'Webmaster / Front-End';
    $projectCategory = 'Dev / Design';
    $projectTechnos = 'HTML - CSS - PHP';
    $projectText1 = "Le projet consistait en la réalisation d'un site vitrine pour architectes d'intérieurs. Il s'agissait d'un devoir de développement pour le troisième trimestre de ma première année à HETIC. La v1 du site est sortie en juin 2018. Produite en 5h, elle était satisfaisante mais le code et la techno utilisés n'étaient pas vraiment au point avec les connaissances en a possession à ce moment là.";
    $projectText2 = "J'ai donc décidé de reprendre le projet avec les clients en décembre dernier et retravaillé le site afin de l'améliorer et qu'il correspodde mieux à leurs attentes de professionnels: ajout de nouvelles pages, modification du l'UI, mise en place du HTTPS, … La v2 a donc pu être mise en ligne fin mai 2019. Avec du php, un .htacces et un robots.txt la techno a un peu évolué.Il me reste à revoir l'entièreté du code pour le rendre vraiment propre et ajouter notamment du scss.";
    $projectText3 = "Durant ce projet j'ai été UI/UX en collaboration avec les clients, dev Front et webmaster. Ce projet a été très enrichissant car je m'en suis chargé de A à Z, je l'ai vu évoluer et il m'a permis de me mettre en situation réelle grâce aux échanges clients, que j'ai bien évidemment écoutés afin de répondre à leurs besoins mais que j'ai pu aussi conseiller, et réorienter lorsque cela me semblait nécessaire.";
    $projectLinkGithub = "https://github.com/PaulHaddou/Site_Haddou-Dufourcq"
  ?>
  <!---------- CONTAINER --------->
    <span class="backSidebar"></span>
    <main>
      <img src="<?= $projectImg ?>" alt="<?= $projectImgAlt ?>">
      <div class="container">
        <div class="projectTitle">
          <h3><?= $projectTitle ?></h3>
          <a href="<?= $projectLinkHref ?>"><?= $projectLink ?></a>
        </div>
        <div class="infosProject">
          <ul>
            <li><?= $projectYear ?></li>
            <li><?= $projectRoles ?></li>
            <li><?= $projectCategory ?></li>
            <li><?= $projectTechnos ?></li>
          </ul>
        </div>
        <div class="descriptionProject">
          <p><?= $projectText1 ?></p>
          <p><?= $projectText2 ?></p>
          <p><?= $projectText3 ?></p>
        </div>
        <div class="gitDiv">
          <a href="<?= $projectLinkGithub ?>">Lien Github du projet</a>
        </div>
      </div>
    </main>
  </body>
</html>