document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll('.anim');

    function checkScroll() {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (sectionTop < windowHeight * 0.85) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
    }

    // Vérifiez le défilement lors du chargement de la page et lors du défilement
    checkScroll();
    window.addEventListener('scroll', checkScroll);
});

var div1 = document.getElementById("div1");
            var div2 = document.getElementById("div2");
            function ajustH() {div1.style.height = div2.clientHeight + "px";}
            ajustH();
            window.addEventListener("resize", ajustH);


