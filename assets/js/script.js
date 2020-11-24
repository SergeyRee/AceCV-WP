/* Responsive Menu */
const burgerIcon = document.querySelector('#menu-toggle');
const menu = document.querySelector('#mobile-nav');
const body = document.querySelector('body');

burgerIcon.onclick = function () {
    menu.classList.toggle('mobile-nav-active');
    body.classList.toggle('modal-open');
};

/* /Responsive Menu */

const header = document.querySelector(".header");

function checkScroll() {
    let scrollPos = window.scrollY;

    if (scrollPos > 300) {
        header.classList.add("scroll");
        header.classList.remove("no-scroll");
    } else {
        header.classList.add("no-scroll");
        header.classList.remove("scroll");
    }
}

window.addEventListener("scroll", checkScroll);
document.addEventListener("DOMContentLoaded", checkScroll);


/* Active MEnu Items*/
window.addEventListener('scroll', () => {
    let scrollDistance = window.scrollY;

    console.log(scrollDistance);

    document.querySelectorAll('section').forEach((el, i) => {
        if (el.offsetTop - document.querySelector('.header').clientHeight <= scrollDistance) {
            document.querySelectorAll('nav a').forEach((el) => {
                if (el.classList.contains('nav__link-active')) {
                    el.classList.remove('nav__link-active');
                }
            });

            document.querySelectorAll('nav li')[i].querySelector('a').classList.add('nav__link-active')
        }
    });
});
/* /Active MEnu Items*/