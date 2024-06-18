document.addEventListener('DOMContentLoaded', function () {
    function generateStars() {
        const numStars = 1000;
        const headers = document.getElementsByClassName('logoSupport');
        const forbiddenZoneRadius = 150; // straal van de verboden zone (cirkel met straal 150px)

        function createStar() {
            var star = document.createElement('div');
            star.classList.add('star');
            const headerHeight = headers[0].offsetHeight;
            const maxX = window.innerWidth; // Maximale x-positie (scherm breedte)
            const maxY = (window.innerHeight - headerHeight) * 2.2; // Maximale y-positie (scherm hoogte - hoogte van de header)

            let x, y;
            do {
                x = Math.random() * maxX;
                y = Math.random() * maxY;
            } while (
                // Controleer of de ster binnen de verboden zone valt
                (Math.pow(x - maxX / 2, 2) + Math.pow(y - maxY / 2, 2) < Math.pow(forbiddenZoneRadius, 2))
            );

            star.style.left = x + 'px';
            star.style.top = y + 'px';
            star.style.animationDuration = Math.random() * 2 + 1 + 's';
            return star;
        }

        for (let j = 0; j < headers.length; j++) {
            const header = headers[j];
            for (let i = 0; i < numStars; i++) {
                var starHeader = createStar();
                header.appendChild(starHeader);
            }
        }
    }

    window.addEventListener('load', function () {
        if (document.querySelector('header')) {
            generateStars();
        }
    });
});
