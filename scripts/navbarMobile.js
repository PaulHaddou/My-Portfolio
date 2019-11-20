let burger = document.querySelector('.burger--spans');
let navbarLinks = document.querySelector('.navbar--links');
let spanBurgerTop = document.querySelector('.burger--spans span:nth-child(1)');
let spanBurgerMid = document.querySelector('.burger--spans span:nth-child(2)');
let spanBurgerBottom = document.querySelector('.burger--spans span:nth-child(3)');
let linkBurgerFirst = document.querySelector('.navbar--links a:nth-child(1)');
let linkBurgerSecond = document.querySelector('.navbar--links a:nth-child(2)');
let linkBurgerThird = document.querySelector('.navbar--links a:nth-child(3)');
let linkBurgerFourth = document.querySelector('.navbar--links a:nth-child(4)');
let body_JS = document.querySelector('.navbar');
let click = "none";

burger.addEventListener( 'click', (e) =>
{
    if (click == "yes") {
        navbarLinks.style.height = "0vh";
        navbarLinks.style.transition = "all 2s ease";
        spanBurgerTop.style.transform = "rotate(0deg) ";
        spanBurgerTop.style.transition = "all 0.5s ease";
        spanBurgerMid.style.opacity = "1";
        spanBurgerMid.style.transition = "all 0.5s ease";
        spanBurgerBottom.style.transform = "rotate(0deg)";
        spanBurgerBottom.style.transition = "all 0.5s ease";
        linkBurgerFirst.style.opacity = "0";
        linkBurgerFirst.style.transition = "all 0.5s ease .6s";
        linkBurgerSecond.style.opacity = "0";
        linkBurgerSecond.style.transition = "all 0.5s ease .4s";
        linkBurgerThird.style.opacity = "0";
        linkBurgerThird.style.transition = "all 0.5s ease .2s";
        linkBurgerFourth.style.opacity = "0";
        linkBurgerFourth.style.transition = "all 0.5s ease 0s";
        click = "none";
    } else {
        navbarLinks.style.height = "60vh";
        navbarLinks.style.transition = "all 2s ease";
        spanBurgerTop.style.transform = "translateX(-5px) rotate(135deg) translateY(-8.5px)";
        spanBurgerTop.style.transition = "all 0.5s ease";
        spanBurgerMid.style.opacity = "0";
        spanBurgerMid.style.transition = "all 0.5s ease";
        spanBurgerBottom.style.transform = "translateX(-5px) rotate(-135deg) translateY(8.5px)";
        spanBurgerBottom.style.transition = "all 0.5s ease";
        linkBurgerFirst.style.opacity = "1";
        linkBurgerFirst.style.transition = "all 0.5s ease 0.5s";
        linkBurgerSecond.style.opacity = "1";
        linkBurgerSecond.style.transition = "all 0.5s ease .7s";
        linkBurgerThird.style.opacity = "1";
        linkBurgerThird.style.transition = "all 0.5s ease .9s";
        linkBurgerFourth.style.opacity = "1";
        linkBurgerFourth.style.transition = "all 0.5s ease 1.1s";
        click = "yes";        
    }
});

