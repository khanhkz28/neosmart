let main = document.getElementsByTagName('main');
let navbar = document.getElementsByTagName('nav');
let navHeight = navbar[0].clientHeight;
const btnToggle = document.getElementsByClassName('navbar-toggler');
const menu = document.getElementsByClassName('nav-menu');
setHeight = () => {
    main[0].style.marginTop = navHeight + "px";
}

// btnToggle[0].addEventListener('click', () => {
//     let fullscreen = "100vh";
    
//     if (menu[0].style.height != fullscreen)
//         menu[0].style.height = "100vh";
//     else
//     menu[0].style.height = "45px";
// })

setHeight();

window.addEventListener('resize', () => {
    navHeight = navbar[0].clientHeight;
    setHeight();
});