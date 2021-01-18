var tabs = document.querySelectorAll(".tab-details ul li");
var tabs_warp = document.querySelectorAll(".tap-warp");

tabs.forEach(function(tab, tab_index) {
    tab.addEventListener("click", function() {
        tabs.forEach(function(tab) {
            tab.classList.remove("active");
        })
        tab.classList.add("active");

        tabs_warp.forEach(function(content, content_index) {
            if (content_index == tab_index) {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        })
    })
});

// // --------- scrolled ------------- //
window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

// --------- Jquery Test ------------- //
// Jquery back on top
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 40) {
            $("#topBtn").fadeIn();
        } else {
            $("#topBtn").fadeOut();
        }
    });

    $('#topBtn').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });

    $('.carousel_club').flickity({
        // options
        cellAlign: 'left',
        freeScroll: true,
        wrapAround: true,
        autoPlay: 1500,
        pageDots: false
    });
});

// Jquery
$(function() {
    $('[data-toggle="popover-hover"]').popover({
        trigger: 'hover',
    })
});
// Carousel