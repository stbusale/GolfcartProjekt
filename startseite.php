<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite - Golfcar Challenge</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/startseite.css" rel="stylesheet">

    <style>
        /* Stile für das Video-Container */
        #videoContainer {
            margin-top: 50px; /* Abstand vom oberen Bereich */
        }
        #videoContainer video {
            width: 100%; /* Vollständige Breite des Containers */
            height: auto; /* Automatische Höhe basierend auf dem Seitenverhältnis */
            display: block; /* Anzeige als Blockelement */
        }
    </style>
</head>
<body>

<header>
    <div class="fade-in zoom">
        <h1 class="main-title">Golfcart Projekt 2024</h1>
    </div>
</header>

<!-- Bootstrap Carousel für Diashow -->
<section class="section fade-in zoom">
    <div class="container">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000"> <!-- Wechselintervall in Millisekunden -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/golfcart.jpg" class="d-block w-100" alt="Gruppenbild">
                </div>
                <div class="carousel-item">
                    <img src="images/clemens.jpg" class="d-block w-100" alt="Sponsor">
                </div>
                <!-- Weitere Bilder können hier hinzugefügt werden -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Vorheriges</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Nächstes</span>
            </button>
        </div>
    </div>
</section>

<!-- Willkommensabschnitt -->
<section class="section fade-in zoom">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="section-heading">Willkommen zur Golfcar Challenge</h2>
                <p class="section-content">Die Golfcar Challenge ist ein spannendes Projekt, bei dem Schülerinnen und Schüler autonome Fahrzeuge entwerfen und bauen, um verschiedene Herausforderungen zu meistern. Das Hauptziel besteht darin, einen Golfball mit dem Fahrzeug auf einem definierten Spielfeld zu finden, zu transportieren und in ein Zielfeld zu bringen. Dabei müssen die Fahrzeuge Hindernisse erkennen, umfahren und autonom navigieren.</p>
            </div>
        </div>
    </div>
</section>

<!-- Video-Abschnitt -->
<section id="videoContainer" class="section fade-in zoom">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <video id="mainVideo" controls loop muted>
                    <source src="videos/video.mp4" type="video/mp4">
                    <!-- Fallback für ältere Browser ohne HTML5-Video-Unterstützung -->
                    Ihr Browser unterstützt das Video-Tag nicht.
                </video>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap Bundle mit Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>

<script>
    // JavaScript für das Video-Autoplay und Ton beim Scrollen
    document.addEventListener('DOMContentLoaded', function() {
        var video = document.getElementById('mainVideo');
        var videoContainer = document.getElementById('videoContainer');

        // Intersection Observer, um die Sichtbarkeit des Videos zu überwachen
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.intersectionRatio > 0) {
                    video.play(); // Video abspielen, wenn es im Bild ist
                    video.muted = false; // Ton einschalten
                } else {
                    video.pause(); // Video anhalten, wenn es nicht im Bild ist
                    video.muted = true; // Ton ausschalten
                }
            });
        }, { threshold: 0.1 }); // Trigger, wenn mindestens 10% des Videos sichtbar sind

        observer.observe(videoContainer); // Video-Container überwachen
    });
</script>

<script>
    // JavaScript für den Zoom-Effekt beim Laden der Seite
    document.addEventListener('DOMContentLoaded', function() {
        var title = document.querySelector('.main-title');
        title.classList.add('zoom-in'); // Füge Klasse für Zoom-Effekt hinzu
    });
</script>

</body>
</html>
