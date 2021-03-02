const links = document.querySelectorAll(".navbar a")

links.forEach(function (i) {
    i.addEventListener('click', clickHandler);

});

function clickHandler(e) {
    e.preventDefault();
    const href = this.getAttribute("href");
    const offsetTop = document.querySelector(href).offsetTop;
    scrollTo({
        top: offsetTop,
        behavior: "smooth"
    });

}
function heroGambarKecil() {
    let nav = document.querySelector('.navbar');
    let introPort = nav.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.5;

    if (introPort < screenPosition) {
        nav.classList.toggle("sticky");
    }

}
window.addEventListener('scroll', heroGambarKecil);


// on load

const content = document.querySelector(".content");


function codeAddress() {
    content.classList.add('contentMuncul');

}
window.onload = codeAddress;



// Scroll-Top

const scroll = document.querySelector('.scroll-top');

scroll.addEventListener('click', function () {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    });
});
