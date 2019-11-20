let responsive = window.innerWidth; // Launch the animation adapted to the device
let navbarMobile = document.querySelector('.navbar');


if (performance.navigation.type == 0) // Block the animation if the page has been refreshed  
{
  // No animation
  navbarMobile.style.opacity = "1";
} 
else 
{
  /////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////
  /////////////////Landing Page Animation//////////////////
  /////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////

  ////////////////////////Variables////////////////////////

  let lineUpLeft_JS = document.querySelector('.lineUpLeft');
  let textIam_JS = document.querySelector('.textIam');
  let lineUpRight_JS = document.querySelector('.lineUpRight');
  let textName_JS = document.querySelector('.textName');
  let lineBottomLeft_JS = document.querySelector('.lineBottomLeft');
  let lineBottomRight_JS = document.querySelector('.lineBottomRight');
  let paul = document.querySelector('.paul');
  let haddou = document.querySelector('.haddou');
  let up_JS = document.querySelector('.up');
  let down_JS = document.querySelector('.down');
  let sidebar_JS = document.querySelector('.animation-sidebar');
  let container_JS = document.querySelector('.animation-container');
  let main = document.querySelector('.main');
  let sidebar_CSS = document.querySelector('.sidebar');
  let backSidebar_CSS = document.querySelector('.backSidebar');
  

  if ( responsive > 901)  //      Desktop      //
  {
    // Desktop - Start of the animation : Lines appears, "I'am" and finally "Paul haddou"


    window.setTimeout(() =>
    {
      main.style.display = "none";
      sidebar_CSS.style.display = "none";
      backSidebar_CSS.style.display = "none";
      lineUpLeft_JS.style.width = "39%";
      lineUpRight_JS.style.width = "39%";
      lineUpLeft_JS.style.transition = "all 2s ease";
      lineUpRight_JS.style.transition = "all 2s ease";
      textIam_JS.style.opacity = "1";
      textIam_JS.style.transition = "all 2s ease";
      lineBottomLeft_JS.style.width = "51%";
      lineBottomRight_JS.style.width = "50%";
      lineBottomLeft_JS.style.transition = "all 2s ease";
      lineBottomRight_JS.style.transition = "all 2s ease";
      textName_JS.style.opacity = "1";
      textName_JS.style.transition = "all 2s ease 3s";

    },0)




    // Desktop - "I'am" disepears


    window.setTimeout(() =>
    {

      textIam_JS.style.opacity = "0";
      textIam_JS.style.transition = "all 2s ease";

    },4000)

    window.setTimeout(() =>
    {

      textIam_JS.style.display = "none";

    },6000)




    // Desktop - The Lines on the top grows to taking the place of the "I'am"


    window.setTimeout(() =>
    {

      lineUpLeft_JS.style.width = "51%";
      lineUpRight_JS.style.width = "50%";
      lineUpLeft_JS.style.transition = "all 2s ease 2s";
      lineUpRight_JS.style.transition = "all 2s ease 2s";

    },4000)




    // Desktop - Disparition of the letters on the name


    window.setTimeout(() =>
    {

      let i = 4;
      let transi = 0;
      while (1 < i && i < 5) 
      {

        let letterI = document.querySelector('.paul :nth-child('+ i +')');
        transi += 0.5;
        letterI.style.opacity = "0";
        letterI.style.transition = "all 1.5s ease "+ transi +"s";
        i--;

      } 

    },5000)

    window.setTimeout(() =>
    {

      let i = 6;
      let transi = 0;
      while (1 < i && i < 7) {
        let letterI = document.querySelector('.haddou :nth-child('+ i +')');
        transi += 0.3;
        letterI.style.opacity = "0";
        letterI.style.transition = "all 1.5s ease "+ transi +"s";
        i--;

      }

    },5000)




    // Desktop - Letters who are disepears previously will be delete (Display none)


    window.setTimeout(() =>
    {

      let i = 4;
      while (1 < i && i < 5) {
        let letterI = document.querySelector('.paul :nth-child('+ i +')');
        letterI.style.display = "none";
        i--;
      }

    },9000)

    window.setTimeout(() =>
    {

      let i = 6;
      while (1 < i && i < 7) {
        let letterI = document.querySelector('.haddou :nth-child('+ i +')');
        letterI.style.display = "none";
        i--;

      }

    },9000)




    // Desktop - H and P who moves


    window.setTimeout(() =>
    {

      haddou.style.width = "5vw";
      haddou.style.transition = "all 1.6s ease";
      paul.style.width = "5vw";
      paul.style.margin = "0";
      paul.style.transition = "all 2s ease";
      paul.style.transform = "translateX(calc(84%))";
      haddou.style.transform = "translateX(calc(-78%))";

    },8000)




    // Desktop - All Lines disepears


    window.setTimeout(() =>
    {

      lineUpLeft_JS.style.width = "0%";
      lineUpRight_JS.style.width = "0%";
      lineUpLeft_JS.style.transition = "all 2s ease";
      lineUpRight_JS.style.transition = "all 2s ease";
      lineBottomLeft_JS.style.width = "0%";
      lineBottomRight_JS.style.width = "0%";
      lineBottomLeft_JS.style.transition = "all 2s ease";
      lineBottomRight_JS.style.transition = "all 2s ease";
      up_JS.style.justifyContent = "center";
      down_JS.style.justifyContent = "center";

    },10000)




    // Desktop - HP moves to the left


    window.setTimeout(() =>
    {

      sidebar_JS.style.width = "24vw";
      container_JS.style.width = "24vw";
      sidebar_JS.style.transition = "all 2s ease";
      container_JS.style.transition = "all 2s ease";

    },12000)




    // Desktop - HP moves To the top and he disepears


    window.setTimeout(() =>
    {

      sidebar_JS.style.height = "22.5%";
      sidebar_JS.style.transition = "all 2s ease";
      container_JS.style.opacity = "0";
      container_JS.style.transition = "all 2s linear 2s";

    },15000)




    // Desktop - HP display none


    window.setTimeout(() =>
    {

      container_JS.style.display = "none";
      main.style.display = "flex";
      sidebar_CSS.style.display = "block";
      backSidebar_CSS.style.display = "flex";


    },19000)


  } 
  else ////////////////////  MOBILE ////////////////////
  {
    // Mobile - Start of the animation : Lines appears, "I'am" and finally "Paul haddou
    window.setTimeout(() =>
    {

      lineUpLeft_JS.style.width = "39%";
      lineUpRight_JS.style.width = "39%";
      lineUpLeft_JS.style.transition = "all 2s ease";
      lineUpRight_JS.style.transition = "all 2s ease";
      textIam_JS.style.opacity = "1";
      textIam_JS.style.transition = "all 2s ease";
      lineBottomLeft_JS.style.width = "51%";
      lineBottomRight_JS.style.width = "50%";
      lineBottomLeft_JS.style.transition = "all 2s ease";
      lineBottomRight_JS.style.transition = "all 2s ease";
      textName_JS.style.opacity = "1";
      textName_JS.style.transition = "all 2s ease 3s";

    },0)




    // Mobile - "I'am" disepears


    window.setTimeout(() =>
    {

      textIam_JS.style.opacity = "0";
      textIam_JS.style.transition = "all 2s ease";

    },4000)

    window.setTimeout(() =>
    {

      textIam_JS.style.display = "none";

    },6000)




    // Mobile - The Lines on the top grows to taking the place of the "I'am"


    window.setTimeout(() =>
    {

      lineUpLeft_JS.style.width = "51%";
      lineUpRight_JS.style.width = "50%";
      lineUpLeft_JS.style.transition = "all 2s ease 2s";
      lineUpRight_JS.style.transition = "all 2s ease 2s";

    },4000)




    // Mobile - Disparition of the letters on the name


    window.setTimeout(() =>
    {

      let i = 4;
      let transi = 0;
      while (1 < i && i < 5) 
      {

        let letterI = document.querySelector('.paul :nth-child('+ i +')');
        transi += 0.5;
        letterI.style.opacity = "0";
        letterI.style.transition = "all 1.5s ease "+ transi +"s";
        i--;

      } 

    },5000)

    window.setTimeout(() =>
    {

      let i = 6;
      let transi = 0;
      while (1 < i && i < 7) {
        let letterI = document.querySelector('.haddou :nth-child('+ i +')');
        transi += 0.3;
        letterI.style.opacity = "0";
        letterI.style.transition = "all 1.5s ease "+ transi +"s";
        i--;

      }

    },5000)




    // Mobile - Letters who are disepears previously will be delete (Display none)


    window.setTimeout(() =>
    {

      let i = 4;
      while (1 < i && i < 5) {
        let letterI = document.querySelector('.paul :nth-child('+ i +')');
        letterI.style.display = "none";
        i--;
      }

    },9000)

    window.setTimeout(() =>
    {

      let i = 6;
      while (1 < i && i < 7) {
        let letterI = document.querySelector('.haddou :nth-child('+ i +')');
        letterI.style.display = "none";
        i--;

      }

    },9000)




    // Mobile - H and P who moves


    window.setTimeout(() =>
    {

      haddou.style.width = "5vw";
      haddou.style.transition = "all 1.6s ease";
      paul.style.width = "5vw";
      paul.style.margin = "0";
      paul.style.transition = "all 2s ease";
      paul.style.transform = "translateX(calc(84%))";
      haddou.style.transform = "translateX(calc(-78%))";

    },8000)




    // Mobile - All Lines disepears


    window.setTimeout(() =>
    {

      lineUpLeft_JS.style.width = "0%";
      lineUpRight_JS.style.width = "0%";
      lineUpLeft_JS.style.transition = "all 2s ease";
      lineUpRight_JS.style.transition = "all 2s ease";
      lineBottomLeft_JS.style.width = "0%";
      lineBottomRight_JS.style.width = "0%";
      lineBottomLeft_JS.style.transition = "all 2s ease";
      lineBottomRight_JS.style.transition = "all 2s ease";
      up_JS.style.justifyContent = "center";
      down_JS.style.justifyContent = "center";

    },10000)




    // Mobile - HP moves to the top


    window.setTimeout(() =>
    {
      up_JS.style.display = "none";
      down_JS.style.display = "none";
      sidebar_JS.style.height = "15vh";
      container_JS.style.height = "15vh";
      sidebar_JS.style.transition = "all 2s ease";
      container_JS.style.transition = "all 2s ease";

    },12000)




    // Mobile - HP disepears


    window.setTimeout(() =>
    {

      container_JS.style.opacity = "0";
      container_JS.style.transition = "all 2s linear 2s";
      navbarMobile.style.opacity = "1";


    },13000)




    // Mobile - HP display none


    window.setTimeout(() =>
    {

      container_JS.style.display = "none";

    },18000)
  }
}




