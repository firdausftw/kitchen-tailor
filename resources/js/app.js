import 'bootstrap';
import $ from 'jquery';
import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';

$(document).ready(function(){

    setTimeout(function() {
        $('.kitchen-tailor-font-full-banner').addClass('text-reveal');
    }, 500);

    setTimeout(function() {
        $('#kitchen-tailor-full-banner').addClass('fade-out-now');
        
        // After the 1.5s transition finishes, move the z-index
        setTimeout(function() {
            $('#kitchen-tailor-full-banner').css('z-index', '-1');
        }, 1500); 
        
    }, 3000);
    
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
    
    $('.dropdown button').on('click', function() {
        const $parent = $(this).closest('.dropdown');
        
        // Toggle the 'show' class on the clicked dropdown
        $parent.toggleClass('show');

        // Optional: Close other dropdowns when opening a new one
        $('.dropdown').not($parent).removeClass('show');
    }); 
})