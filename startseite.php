<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Fügen Sie hier Ihren benutzerdefinierten CSS-Code hinzu */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 0px;
        }
        .accordion-item {
            margin-bottom: 20px;
        }
        .section {
            padding: 60px 0;
            background-color: #f8f9fa;
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
    </style>
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white py-5">
    <div class="container">
        <h1 class="display-4">Team ZIB</h1>
        <p class="lead">Golfcart-Projekt 2024</p>
    </div>
    <a class="nav-link" href="index.php?page=steuerung.php">Steuerung</a>
</header>

<!-- Über uns -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="section-heading">Über Uns</h2>
                <p class="section-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, metus non efficitur viverra, ligula sapien dapibus enim, ac vestibulum libero lorem nec felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis porta sapien sed est volutpat sodales.</p>
            </div>
            <div class="col-lg-6">
                <img src="images/ueber_uns.jpg" alt="Über Uns" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Leistungen -->
<section class="section">
    <div class="container">
        <h2 class="section-heading text-center mb-5">Unsere Leistungen</h2>
        <div class="row">
            <div class="col-lg-4">
                <h3>Webdesign</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, metus non efficitur viverra.</p>
            </div>
            <div class="col-lg-4">
                <h3>Entwicklung</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, metus non efficitur viverra.</p>
            </div>
            <div class="col-lg-4">
                <h3>Marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, metus non efficitur viverra.</p>
            </div>
        </div>
    </div>
</section>

<!-- Kontakt -->
<section class="section">
    <div class="container">
        <h2 class="section-heading text-center mb-5">Kontakt</h2>
        <p class="section-content text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, metus non efficitur viverra.</p>
        <div class="text-center">
            <a href="kontakt.php" class="btn btn-primary">Kontaktieren Sie uns</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 2024 Meine Webseite. Alle Rechte vorbehalten.</p>
    </div>
</footer>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
