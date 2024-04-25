<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite - Golfcar Challenge</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/startseite.css" rel="stylesheet">

    <style>
        /* Alle Bilder in der Diashow auf 16:9 Format und 100% Breite */
        #imageCarousel .carousel-item img {
            width: 100%;
            height: auto;
            aspect-ratio: 16 / 9; /* Festlegen des Seitenverhältnisses 16:9 */
            object-fit: cover;
        }
    </style>
</head>
<body>

<header>
    <div class="fade-in">
        <h1 class="main-title">Golfcart Projekt 2024</h1>
    </div>
</header>

<!-- Bootstrap Carousel für Diashow -->
<section class="section fade-in">
    <div class="container">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000"> <!-- Wechselintervall in Millisekunden -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/gruppenbild.jpg" class="d-block w-100" alt="Gruppenbild">
                </div>
                <div class="carousel-item">
                    <img src="images/sponsor.jpg" class="d-block w-100" alt="Sponsor">
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

<!-- Bootstrap Bundle mit Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>

</body>
</html>
