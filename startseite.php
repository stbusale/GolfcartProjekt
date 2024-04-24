<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite - Golfcar Challenge</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/startseite.css" rel="stylesheet">
</head>
<body>

<header>
    <div class="container">
        <h1 class="main-title">Golfcart Projekt 2024</h1>
    </div>
</header>

<!-- Gruppenbild -->
<section class="section fade-in">
    <div class="container">
        <img src="images/gruppenbild.jpg" alt="Gruppenbild" class="img-fluid mb-4">
    </div>
</section>

<!-- Willkommensabschnitt -->
<section class="section fade-in">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="section-heading">Willkommen zur Golfcar Challenge</h2>
                <p class="section-content">Die Golfcar Challenge ist ein spannendes Projekt, bei dem Schülerinnen und Schüler autonome Fahrzeuge entwerfen und bauen, um verschiedene Herausforderungen zu meistern. Das Hauptziel besteht darin, einen Golfball mit dem Fahrzeug auf einem definierten Spielfeld zu finden, zu transportieren und in ein Zielfeld zu bringen. Dabei müssen die Fahrzeuge Hindernisse erkennen, umfahren und autonom navigieren.</p>
            </div>
        </div>
    </div>
</section>

<!-- Kontakt -->
<footer class="fade-in">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="section-heading">Kontakt</h2>
                <p class="section-content">Für weitere Informationen zur Golfcar Challenge 2024 stehen wir Ihnen gerne zur Verfügung.</p>
                <a href="kontakt.php" class="contact-btn">Kontaktieren Sie uns</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript für die Scroll-Animation -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const fadeIns = document.querySelectorAll('.fade-in');

    function checkPosition() {
        fadeIns.forEach(fadeIn => {
            const positionFromTop = fadeIn.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            // Trigger Animation, wenn das Element fast im sichtbaren Bereich ist
            if (positionFromTop - windowHeight < 0) {
                fadeIn.classList.add('active');
            }
        });
    }

    // Event Listener hinzufügen, um beim Scrollen die Position zu überprüfen
    window.addEventListener('scroll', checkPosition);
    
    // Überprüfe beim Laden der Seite die Position
    checkPosition();
});
</script>

</body>
</html>
