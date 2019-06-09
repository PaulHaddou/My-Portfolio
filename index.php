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
    $spanProjects = '<span></span>';

    // Includes
    include 'includes/navbarMobile.php';
    include 'includes/sidebar.php';
  ?>
  <!---------- CONTAINER --------->
    <span class="backSidebar"></span>
    <main>
      <div class="container">
        <div class="project1">
          <a href="pages/site_haddou-dufourcq/">
            <img src="img/site_haddou-dufourcq/site_haddou-dufourcq.jpg">
          </a>
          <div class="project1Text">
            <p>Site Haddou-Dufourcq</p>
            <p>Front-End / Webmaster</p>
          </div>
        </div>
        <div class="project1">
          <a href="#">
            <img src="img/site_haddou-dufourcq/site_haddou-dufourcq.jpg">
          </a>
          <div class="project1Text">
            <p>Site Haddou-Dufourcq</p>
            <p>Front-End / Webmaster</p>
          </div>
        </div>
        <div class="project1">
          <a href="#">
            <img src="img/site_haddou-dufourcq/site_haddou-dufourcq.jpg">
          </a>
          <div class="project1Text">
            <p>Site Haddou-Dufourcq</p>
            <p>Front-End / Webmaster</p>
          </div>
        </div>
        <div class="project1">
          <a href="#">
            <img src="img/site_haddou-dufourcq/site_haddou-dufourcq.jpg">
          </a>
          <div class="project1Text">
            <p>Site Haddou-Dufourcq</p>
            <p>Front-End / Webmaster</p>
          </div>
        </div>
        <div class="project1">
          <a href="#">
            <img src="img/site_haddou-dufourcq/site_haddou-dufourcq.jpg">
          </a>
          <div class="project1Text">
            <p>Site Haddou-Dufourcq</p>
            <p>Front-End / Webmaster</p>
          </div>
        </div>
        <div class="project1">
          <a href="#">
            <img src="img/site_haddou-dufourcq/site_haddou-dufourcq.jpg">
          </a>
          <div class="project1Text">
            <p>Site Haddou-Dufourcq</p>
            <p>Front-End / Webmaster</p>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
		