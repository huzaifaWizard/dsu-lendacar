// function initialization
$(window).on("load", function () {
    $(window).scrollTop(0);
    preloader()
});

$(function () {
    $(window).scrollTop(0);
    gsap.registerPlugin(ScrollTrigger);
    $('[data-magnetic]').each(function () {
        new Magnetic(this);
    });
    allFunctionInit();
});

function allFunctionInit() {
    lenisSetup();
}

function lenisSetup() {
    const lenis = new Lenis({
        duration: 1.5,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
        smooth: true,
        mouseMultiplier: 1,
    })
    lenis.scrollTo(document.querySelector('#home'))

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf);
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            lenis.scrollTo(this.getAttribute("href"));
        });
    });
}

function preloader() {
    let loaderTl = gsap.timeline({defaults: {ease: 'Power2.out'}})

    loaderTl
        .to('.preloader svg', {
            scale: 0,
            delay: 1
        })
        .to('.preloader', {
            scaleY: 0
        })
        .from('.mainHeading', {
            y: 100,
            autoAlpha: 0
        })
        .from('.progressBarWrapper', {
            scale: 0
        })
        .from('.progressBarWrapper span', {
            x: -10,
            autoAlpha: 0,
            stagger: 0.1
        }, "-=0.25")
}