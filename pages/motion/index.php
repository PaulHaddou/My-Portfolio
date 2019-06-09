<?php
    // Fill in all the information of the head tag
     $title = 'Paul Haddou - Motion';
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
    $hrefDesign = '../design/';
    $hrefMotion = '#';
    $hrefAbout = '../about/';

    // Allows you to correctly indicate in the sidebar which section you are in
    $activAbout = $activDesign = $activProjects = $activDev = '';
    $spanAbout = $spanDesign = $spanProjects = $spanDev = '';
    $activMotion = 'class="activ"';
    $spanMotion = '<span></span>';

    // Includes
    include '../../includes/navbarMobile.php';
    include '../../includes/sidebar.php';
  ?>
  <!---------- CONTAINER --------->
    <span class="backSidebar"></span>
    <main>
      <div class="container">
        <!-- NO projects yet -->
      </div>
    </main>
  </body>
</html>
		