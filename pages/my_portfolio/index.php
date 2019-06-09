<?php
    // Fill in all the information of the head tag
    $title = 'Paul Haddou - Mon Portfolio';
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
    $projectImg = '../../img/my_portfolio.jpg';
    $projectImgAlt = 'Image représentant la home de mon site portfolio';
    $projectTitle = 'Mon portfolio';
    $projectLinkHref = 'https://www.paul-haddou.com';
    $projectLink = 'www.paul-haddou.com';
    $projectYear = '2019';
    $projectRoles = 'Webmaster / Front-End / Designer';
    $projectCategory = 'Dev / Design';
    $projectTechnos = 'HTML - CSS - PHP - SCSS';
    $projectText1 = "Mon portfolio en cours de réalisation, sur lequel vous êtes actuellement. Je suis donc Front-end sur ce projet, designer UI et webmaster. Pour les technos utilisées, j'ai utilisé les classiques html, scss et php. De plus j'ai utilisé git comme sytéme de versioning.";
    $projectLinkGithub = "https://github.com/PaulHaddou/My-Portfolio"
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