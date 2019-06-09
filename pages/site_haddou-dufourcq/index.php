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
  <!---------- CONTAINER --------->
    <span class="backSidebar"></span>
    <main>
      <img src="../../img/site_haddou-dufourcq/site_haddou-dufourcq.jpg" alt="">
      <div class="container">
        <div class="projectTitle">
          <h3>Site Haddou-Dufourcq</h3>
          <a href="https://www.haddou-dufourcq.com">www.haddou-dufourcq.com</a>
        </div>
        <div class="infosProject">
          <ul>
            <li>2017 - 2018</li>
            <li>Webmaster / Front-End</li>
            <li>Dev / Design</li>
            <li>HTML - CSS - PHP</li>
          </ul>
        </div>
        <div class="descriptionProject">
          <p>Le projet consistait en la réalisation d'un site vitrine pour architectes d'intérieurs. Il s'agissait d'un devoir de développement pour le troisième trimestre de ma première année à HETIC. La v1 du site est sortie en juin 2018. Produite en 5h, elle était satisfaisante mais le code et la techno utilisés n'étaient pas vraiment au point avec les connaissances en a possession à ce moment là.</p>
          <p>J'ai donc décidé de reprendre le projet avec les clients en décembre dernier et retravaillé le site afin de l'améliorer et qu'il correspodde mieux à leurs attentes de professionnels: ajout de nouvelles pages, modification du l'UI, mise en place du HTTPS, … La v2 a donc pu être mise en ligne fin mai 2019. Avec du php, un .htacces et un robots.txt la techno a un peu évolué.Il me reste à revoir l'entièreté du code pour le rendre vraiment propre et ajouter notamment du scss.</p>
          <p>Durant ce projet j'ai été UI/UX en collaboration avec les clients, dev Front et webmaster. Ce projet a été très enrichissant car je m'en suis chargé de A à Z, je l'ai vu évoluer et il m'a permis de me mettre en situation réelle grâce aux échanges clients, que j'ai bien évidemment écoutés afin de répondre à leurs besoins mais que j'ai pu aussi conseiller, et réorienter lorsque cela me semblait nécessaire.</p>
        </div>
      </div>
    </main>
  </body>
</html>