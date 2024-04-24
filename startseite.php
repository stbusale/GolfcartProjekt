<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite - Golfcar Challenge</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .main-title {
            font-size: 36px;
            /*font-weight: bold;*/
            margin-top: 10px;
            text-transform: uppercase;
        }
        .section {
            padding: 60px 0;
            text-align: center;
        }
        .section-heading {
            font-size: 36px;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        .section-content {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        .contact-btn {
            font-size: 18px;
            text-decoration: none;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .contact-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="container">
        <h1 class="main-title">Golfcart Projekt 2024</h1>
    </div>
</header>

<!-- Gruppenbild -->
<section class="section">
    <div class="container">
        <img src="images/gruppenbild.jpg" alt="Gruppenbild" class="img-fluid mb-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="section-heading">Willkommen zur Golfcar Challenge</h2>
                <p class="section-content">Die Golfcar Challenge ist ein spannendes Projekt, bei dem Schülerinnen und Schüler autonome Fahrzeuge entwerfen und bauen, um verschiedene Herausforderungen zu meistern. Das Hauptziel besteht darin, einen Golfball mit dem Fahrzeug auf einem definierten Spielfeld zu finden, zu transportieren und in ein Zielfeld zu bringen. Dabei müssen die Fahrzeuge Hindernisse erkennen, umfahren und autonom navigieren.</p>
            </div>
        </div>
    </div>
</section>

<!-- Kontakt -->
<footer>
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
</body>
</html>
