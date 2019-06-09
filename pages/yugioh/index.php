<?php
    // Fill in all the information of the head tag
    $title = 'Paul Haddou - Trading Yo-Gi-Oh';
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
    $hrefdevelopment = '../pages/development/';
    $hrefDesign = '../pages/design/';
    $hrefMotion = '../pages/motion/';
    $hrefAbout = '../pages/about/';

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
    $projectImg = '../../img/yugioh.jpg';
    $projectImgAlt = 'Image représentant la home du site yugioh trading';
    $projectTitle = 'Site Trading Yu-Gi-Oh';
    $projectLinkHref = 'https://www.ygo-trading.com/';
    $projectLink = 'www.ygo-trading.com/';
    $projectYear = '2019';
    $projectRoles = 'Front-End';
    $projectCategory = 'Dev';
    $projectTechnos = 'HTML - CSS - PHP - MySql - API';
    $projectText1 = "Ce fût un projet scolaire de semaine intensive orientée principalement back. Nous avons réalisé à l'aide de plusieurs API un début de site de trading de carte. Avec un système de login, de distance par rapport aux différents autres utilisateurs, le nombre de cartes qui nous intéressent … Le projet été plutôt complet.";
    $projectLinkGithub = "https://github.com/Matthiasgdr/yugioh_trading"
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
        <div class="gitDiv">
          <a href="<?= $projectLinkGithub ?>">Lien Github du projet</a>
        </div>
      </div>
    </main>
  </body>
</html>