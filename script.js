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
        nav.classList.add("sticky");
    }

}
window.addEventListener('scroll', heroGambarKecil);

// navbar


// window.addEventListener('scroll', function () {
//     header1.classList.toggle("sticky", window.screenY > 0);


// });









































// crs.addEventListener('click', function () {
//     smootScroll(syarat, 3000);
// });
// syarat.addEventListener('click', function () {
//     smootScroll(crs, 3000);
// });

// // smootScroll(clickHandler, 2000);

// function smootScroll(target, duration) {
//     let target = document.querySelector(target);
//     // let links = document.querySelectorAll(".navbar a");
//     let targetPosition = links.getBoundingClientRect().top;
//     let startPosition = window.pageYOffset;
//     let distance = targetPosition - startPosition;
//     let startTime = null;

//     function animation(currentTime) {
//         if (startTime == null) startTime = currentTime;

//         let timeElapsed = currentTime - startTime;
//         let run = ease(timeElapsed, startPosition, distance, duration);
//         windiow.scrollTo(0, run);

//         if (timeElapsed < duration) requestAnimationFrame(animation);
//     }
//     function ease(t, b, c, d) {
//         t /= d / 2;
//         if (t < 1) return c / 2 * t * t * t * t * t + b;
//         t -= 2;
//         return c / 2 * (t * t * t * t * t + 2) + b;
//     }

//     requestAnimationFrame(animation);

// }
