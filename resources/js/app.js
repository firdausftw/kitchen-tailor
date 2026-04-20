import 'bootstrap';
import $ from 'jquery';
import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';

$(document).ready(function(){
    
    let index = 0;
    const slides = $(".fade-slider img");
    const total = slides.length;

    setInterval(() => {
        slides.eq(index).removeClass("active");
        index = (index + 1) % total;
        slides.eq(index).addClass("active");
    }, 4000);

    function openNav() {
        let nav = $("#kitchen-tailor-navigation");

        nav.stop(true, true).show();
        nav.addClass("nav-animate");

        nav.css({
            opacity: 0,
            transform: "translateX(-80px)"
        });

        requestAnimationFrame(() => {
            nav.css({
                opacity: 1,
                transform: "translateX(0)"
            });
        });
    }

    function closeNav() {
        let nav = $("#kitchen-tailor-navigation");

        nav.css({
            opacity: 0,
            transform: "translateX(-80px)"
        });

        setTimeout(() => {
            nav.hide();
        }, 300);
    }

    $("#open-nav-btn").on("click", openNav);
    $("#close-nav-btn").on("click", closeNav);
})