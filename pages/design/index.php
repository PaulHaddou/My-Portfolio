<?php
    // Fill in all the information of the head tag
    $title = 'Paul Haddou - Design';
    $metaname = '';
    $cssMain = '../../styles/allProjectsPage/allProjectsPage.min.css';
    $cssNavbarMobile = '../../styles/navbarMobile/navbarMobile.min.css';
    $cssSidebar = '../../styles/sidebar/sidebar.min.css';
    
    // Include the head
    include '../../includes/head.php';
?>
  <body>
  <!-------------- navbarMobile ---------------->
  <?php
    // Links In the Nav and Side bar
    $hrefProjects = '../../';
    $hrefdevelopment = '../development/';
    $hrefDesign = '#';
    $hrefMotion = '../motion/';
    $hrefAbout = '../about/';

    // Allows you to correctly indicate in the sidebar which section you are in
    $activAbout = $activDev = $activProjects = $activMotion = '';
    $spanAbout = $spanDev = $spanProjects = $spanMotion = '';
    $activDesign = 'class="activ"';
    $spanDesign = '<span></span>';

    // Includes
    include '../../includes/navbarMobile.php';
    include '../../includes/sidebar.php';
  ?>
  <!---------- CONTAINER --------->
    <span class="backSidebar"></span>
    <main>
      <div class="container">
        <div>
          <a href="../site_haddou-dufourcq/">
            <img src="../../img/site_haddou-dufourcq/site_haddou-dufourcq.jpg">
          </a>
          <div class="projectText">
            <p>Site Haddou-Dufourcq</p>
            <p>Front-End / Webmaster</p>
          </div>
        </div>
        <div>
          <a href="../my_portfolio/">
            <img src="../../img/my_portfolio.jpg">
          </a>
          <div class="projectText">
            <p>Mon Portfolio</p>
            <p>Front-End / Webmaster / Designer</p>
          </div>
        </div>
        <div>
          <a href="../ui_improvisation/">
            <img src="../../img/ui_improvisation.jpg">
          </a>
          <div class="projectText">
            <p>Improvisation UI</p>
            <p>Designer UI</p>
          </div>
        </div>
        <div>
          <a href="../poster/">
            <img src="../../img/poster.jpg">
          </a>
          <div class="projectText">
            <p>Affiche Film</p>
            <p>Designer</p>
          </div>
        </div>
        <div>
          <a href="../le_bonbon/">
            <img src="../../img/le_bonbon.jpg">
          </a>
          <div class="projectText">
            <p>Le Bonbon</p>
            <p>Designer UI</p>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
		