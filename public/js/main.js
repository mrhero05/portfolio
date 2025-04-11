// Main Custom JS

// Get the button
document.addEventListener("DOMContentLoaded", function () {
    const scrollToTopBtn = document.getElementById("scroll_top");

    // Function to show or hide the button based on scroll position
    window.onscroll = function() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
    };

    // Function to smoothly scroll back to the top
    scrollToTopBtn.addEventListener("click", function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
    });
});
