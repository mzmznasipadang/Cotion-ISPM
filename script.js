window.addEventListener('scroll', function() {
    var scroll = window.pageYOffset;
    // Adjust the number at the end to control the speed of zooming. Larger is slower.
    var zoom = 1 + (scroll / 3000);
    document.getElementById('hero-card').style.transform = `scale(${zoom})`;
});
