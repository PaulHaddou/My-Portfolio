<?php
    // Fill in all the information of the head tag
    $title = 'Paul Haddou - Affiche de Film';
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
    $projectImg = '../../img/poster.jpg';
    $projectImgAlt = "Image représentant l'affiche de film à réaliser";
    $projectTitle = 'Affiche de Film';
    $projectLinkHref = '';
    $projectLink = '';
    $projectYear = '2019';
    $projectRoles = 'Designer';
    $projectCategory = 'Design';
    $projectTechnos = '';
    $projectText1 = "Projet de design scolaire où il fallait réaliser un affiche de film.";
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
        </div>
      </div>
    </main>
  </body>
</html>