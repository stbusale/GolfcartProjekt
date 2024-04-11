<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite - Golfcar Challenge</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Benutzerdefiniertes CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 0px;
        }
        .section {
            padding: 60px 0;
            background-color: #343a40; /* Dunkler Hintergrund für Abschnitte */
            color: #fff; /* Weiße Textfarbe */
        }
        .section-heading {
            font-size: 36px;
            margin-bottom: 30px;
        }
        .section-content {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .bg-dark-custom {
            background-color: #343a40 !important; /* Dunkle Hintergrundfarbe für Header und Footer */
        }
        .text-white-custom {
            color: #fff !important; /* Weiße Textfarbe für Header und Footer */
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="bg-dark-custom text-white-custom py-5">
    <div class="container text-center">
        <h1 class="display-4">Willkommen zur Golfcar Challenge 2024</h1>
        <p class="lead">Ein aufregendes Projekt, bei dem autonome Fahrzeuge auf die Probe gestellt werden</p>
    </div>
</header>

<!-- Überblick -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h2 class="section-heading">Was ist die Golfcar Challenge?</h2>
                <p class="section-content">Die Golfcar Challenge ist ein spannendes Projekt, bei dem Schülerinnen und Schüler autonome Fahrzeuge entwerfen und bauen, um verschiedene Herausforderungen zu meistern. Das Hauptziel besteht darin, einen Golfball mit dem Fahrzeug auf einem definierten Spielfeld zu finden, zu transportieren und in ein Zielfeld zu bringen. Dabei müssen die Fahrzeuge Hindernisse erkennen und umfahren, sowie autonom navigieren.</p>
            </div>
        </div>
    </div>
</section>

<!-- Kontakt -->
<section class="section">
    <div class="container">
        <h2 class="section-heading text-center mb-5">Kontakt</h2>
        <p class="section-content text-center">Für weitere Informationen zur Golfcar Challenge 2024 stehen wir Ihnen gerne zur Verfügung.</p>
        <div class="text-center">
            <a href="kontakt.php" class="btn btn-primary">Kontaktieren Sie uns</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark-custom text-white-custom py-4">
    <div class="container text-center">
        <p>&copy; 2024 Golfcar Challenge. Alle Rechte vorbehalten.</p>
    </div>
</footer>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
