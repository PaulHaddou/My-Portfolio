<?php
    // Fill in all the information of the head tag
    $title = 'Paul Haddou - Développement';
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
    $hrefdevelopment = '#';
    $hrefDesign = '../design/';
    $hrefMotion = '../motion/';
    $hrefAbout = '../about/';

    // Allows you to correctly indicate in the sidebar which section you are in
    $activAbout = $activDesign = $activProjects = $activMotion = '';
    $spanAbout = $spanDesign = $spanProjects = $spanMotion = '';
    $activDev = 'class="activ"';
    $spanDev = '<span></span>';

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
          <a href="../pages/yugioh/">
            <img src="../../img/yugioh.jpg">
          </a>
          <div class="projectText">
            <p>Trading Yu-Gi-Oh</p>
            <p>Front-End</p>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
		