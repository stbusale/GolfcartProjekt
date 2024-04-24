// scripts/projektkomponenten.js
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.component img');

    function checkScroll() {
        images.forEach(image => {
            if (isElementInViewport(image) && !image.classList.contains('fade-in')) {
                image.classList.add('fade-in');
            }
        });
    }

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Initialer Check beim Laden der Seite
    checkScroll();

    // Check bei Scroll-Ereignis
    window.addEventListener('scroll', checkScroll);
});
