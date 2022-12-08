const navList = document.querySelector('.header-nav-list');
const button = document.querySelector('.header-nav-menu');

button.onclick = () => {
    navList.classList.toggle('active');

    if (button.classList.toggle('active')) {
        button.src = "/img/layout/header/nav-close.svg";
    } else {
        button.src = "/img/layout/header/nav-open.svg";
    }
}