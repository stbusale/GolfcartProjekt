<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="style.css" rel="stylesheet">-->

    <style>
      body {
            font-family: Arial, sans-serif;
            /*background-color: #f0f0f0;*/
            background-color: #b26aff;
            padding: 0px;
        }
        .accordion-item {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white py-5">
    <div class="container text-center">
        <h1 class="display-4">Kontakt</h1>
        <p class="lead">Projektmanager:  Clemens Obkircher Ehrenmann</p>
    </div>
</header>

<!-- Kontaktformular -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="section-heading">Kontaktieren Sie uns</h2>
                <form action="mailto:stobkcle@bx.fallmerayer.it" method="post" enctype="text/plain">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Nachricht:</label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Senden</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h2 class="section-heading">Kontaktdaten</h2>
                <p class="lead">E-Mail: <a href="mailto:stobkcle@bx.fallmerayer.it">stobkcle@bx.fallmerayer.it</a></p>
                <p class="lead">Telefon: +393472607237</p>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
