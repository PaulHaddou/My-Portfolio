<?php
    // Fill in all the information of the head tag
    $title = 'Paul Haddou - Projets';
    $metaname = '';
    $cssMain = 'styles/allProjectsPage/allProjectsPage.min.css';
    $cssNavbarMobile = 'styles/navbarMobile/navbarMobile.min.css';
    $cssSidebar = 'styles/sidebar/sidebar.min.css';
    
    // Include the head
    include 'includes/head.php';
?>
  <body>
  <!-------------- navbarMobile ---------------->
  <?php
    // Links In the Nav and Side bar
    $hrefProjects = '#';
    $hrefdevelopment = 'pages/development/index.php';
    $hrefDesign = 'pages/design/index.php';
    $hrefMotion = 'pages/motion/index.php';
    $hrefAbout = 'pages/about/index.php';

    // Allows you to correctly indicate in the sidebar which section you are in
    $activAbout = $activDev = $activDesign = $activMotion = '';
    $spanAbout = $spanDev = $spanDesign = $spanMotion = '';
    $activProjects = 'class="activ"';
    $spanProjects = '<span class="spanActiv" ></span>';

    // Includes
    //include 'includes/animation.php';
    include 'includes/navbarMobile.php';
    include 'includes/sidebar.php';
  ?>
  <!---------- CONTAINER --------->
    <span class="backSidebar"></span>
    <main class="main">
      <div class="container">
        <div>
          <a href="pages/site_haddou-dufourcq/">
            <img src="img/site_haddou-dufourcq/site_haddou-dufourcq.jpg">
          </a>
          <div class="projectText">
            <p>Site Haddou-Dufourcq</p>
            <p>Front-End / Webmaster</p>
          </div>
        </div>
        <div>
          <a href="pages/my_portfolio/">
            <img src="img/my_portfolio.jpg">
          </a>
          <div class="projectText">
            <p>Mon Portfolio</p>
            <p>Front-End / Webmaster / Designer</p>
          </div>
        </div>
        <div>
          <a href="pages/ui_improvisation/">
            <img src="img/ui_improvisation.jpg">
          </a>
          <div class="projectText">
            <p>Improvisation UI</p>
            <p>Designer UI</p>
          </div>
        </div>
        <div>
          <a href="pages/poster/">
            <img src="img/poster.jpg">
          </a>
          <div class="projectText">
            <p>Affiche Film</p>
            <p>Designer</p>
          </div>
        </div>
        <div>
          <a href="pages/yugioh/">
            <img src="img/yugioh.jpg">
          </a>
          <div class="projectText">
            <p>Trading Yu-Gi-Oh</p>
            <p>Front-End</p>
          </div>
        </div>
        <div>
          <a href="pages/le_bonbon/">
            <img src="img/le_bonbon.jpg">
          </a>
          <div class="projectText">
            <p>Le Bonbon</p>
            <p>Designer UI</p>
          </div>
        </div>
      </div>
    </main>
  <script src="scripts/navbarMobile.js"></script>
  <!--<script src="scripts/sidebar.js"></script>
  <script src="scripts/animation.js"></script>-->
  </body>
</html>
		