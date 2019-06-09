<?php
    // Fill in all the information of the head tag
    $title = 'Paul Haddou - A Propos';
    $metaname = '';
    $cssMain = '../../styles/about/about.min.css';
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
    $activProjects = $activDev = $activDesign = $activMotion = '';
    $spanProjects = $spanDev = $spanDesign = $spanMotion = '';
    $activAbout = 'class="activ"';
    $spanAbout = '<span></span>';

    // Includes
    include '../../includes/navbarMobile.php';
    include '../../includes/sidebar.php';
  ?>
  <!---------- CONTAINER --------->
    <span class="backSidebar"></span>
    <main>
      <div class="container">
        <div class="aboutInformations">
          <h2>Qui suis-je ?</h2>
          <div>
            <p>Je m’appelle Paul Haddou, j’ai 22 ans et je suis étudiant en deuxième année à HETIC, Paris. Je suis principalement développeur Front-end et designer UX/UI.</p>
            <p>J’ai choisi ces postes car j’aime créer quelque chose à partir de rien, d’une vague idée. C’est quelque chose que j’apprécie depuis mon enfance et je prends donc du plaisir à accomplir des tâches dans ce domaine.</p>
            <p>J’ai énormément appris ces 2 dernières année au sein de mon école et je souhaiterais pouvoir transposer mes connaissances et acquis dans un contexte professionnel, au sein d’une entreprise. C’est pourquoi je recherche un stage, dans le développement Front ou l’UX/UI, d’une durée de 3 mois du 1er juillet au 4 octobre.</p>
          </div>
        </div>
        <div class="aboutSkillsContact">
          <div class="aboutSkills">
            <h3>Mes compétences</h3>
            <div>
              <img src="../../img/about/photoshop.png" alt="">
              <img src="../../img/about/indesign.png" alt="">
              <img src="../../img/about/illustrator.png" alt="">
              <img src="../../img/about/premiere.png" alt="">
              <img src="../../img/about/after-effects.png" alt="">
              <img src="../../img/about/github.png" alt="">
              <img src="../../img/about/sass.png" alt="">
              <img src="../../img/about/html.png" alt="">
              <img src="../../img/about/css.png" alt="">
              <img src="../../img/about/php.png" alt="">
            </div>
          </div>
          <div class="aboutContact">
            <h3>Mes contacts</h3>
            <div>
              <a href="mailto:paul.haddou@gmail.com">
                <img src="../../img/about/mail.png" alt="">
              </a>
              <a href="https://www.linkedin.com/in/paul-haddou/">
                <img src="../../img/about/linkedin.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
		