jQuery(document).ready(function($) {
    // Initialize Foundation
    $(document).foundation();

    // Handle off-canvas open/close events
    $(document)
        .on("opened.zf.offCanvas", function() {
            $(".hamburger--elastic").addClass("is-active").attr("aria-expanded", "true");
            $("#off-canvas").attr("aria-hidden", "false");
            // Focus on the close button when opened
            $("#off-canvas .close-button").focus();
        })
        .on("closed.zf.offCanvas", function() {
            $(".hamburger--elastic").removeClass("is-active").attr("aria-expanded", "false");
            $("#off-canvas").attr("aria-hidden", "true");
            // Return focus to hamburger when closed
            $(".hamburger--elastic").focus();
        });

    // Trap focus within off-canvas menu
    $("#off-canvas").on("keydown", function(event) {
        if (event.key === "Tab") {
            const focusableElements = $("#off-canvas").find("a, button, [tabindex]:not([tabindex='-1'])");
            const firstElement = focusableElements.first();
            const lastElement = focusableElements.last();

            if (event.shiftKey && document.activeElement === firstElement[0]) {
                event.preventDefault();
                lastElement.focus();
            } else if (!event.shiftKey && document.activeElement === lastElement[0]) {
                event.preventDefault();
                firstElement.focus();
            }
        } else if (event.key === "Escape") {
            event.preventDefault();
            $("#off-canvas").foundation("close");
        }
    });

    // Ensure keyboard accessibility for hamburger and close button
    $(".hamburger--elastic, .close-button").on("keydown", function(event) {
        if (event.key === "Enter" || event.key === " ") {
            event.preventDefault();
            if ($(this).hasClass("hamburger--elastic")) {
                $("#off-canvas").foundation("toggle");
            } else if ($(this).hasClass("close-button")) {
                $("#off-canvas").foundation("close");
            }
        }
    });
});

// Swiper slider (unchanged)
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.testimonial-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
            },
        },
    });
});