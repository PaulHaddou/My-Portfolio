<?php
    // Fill in all the information of the head tag
    $title = 'Paul Haddou - Improvisation UI';
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
    $projectImg = '../../img/ui_improvisation.jpg';
    $projectImgAlt = "Image représentant une des maquette d'un projet d'improvisation d'UI";
    $projectTitle = 'Improvisation UI';
    $projectLinkHref = '';
    $projectLink = '';
    $projectYear = '2019';
    $projectRoles = 'Designer';
    $projectCategory = 'Design';
    $projectTechnos = '';
    $projectText1 = "Projet scolaire en design. Il fallait réaliser différentes pages avec seulement le texte et les images de fournies. De plus, seulement 2 couleurs différentes étaient autorisées. Il fallait aussi réaliser un travail sur la typo (choix, graisse, interligne,...).";
    $projectText2 = "J'ai donc fais le choix de partir sur du noir et du blanc pour coller au côté chic et sobre des images. Concernant la police choisie, c'est l'EB Garamond. Etant une police de la famille des Garaldes, la police collait bien au côté élégant des images.";
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
        </div>
      </div>
    </main>
  </body>
</html>