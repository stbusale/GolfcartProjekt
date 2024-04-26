<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/startseite.css" rel="stylesheet">

</head>

<header>
    <div class="fade-in zoom">
        <h1 class="main-title">Kontakt</h1>
    </div>
</header>

<body>


<!-- Kontaktformular -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="fade-in zoom col-lg-6">
                <h2 class="section-heading">Kontaktieren Sie uns</h2>
                <form action="process_form.php" method="post">
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
                    <button type="submit" class="btn btn-secondary" style="background-color: #333; color: #fff;">Senden</button>
                </form>
            </div>
            <div class="fade-in zoom col-lg-6">
                <h2 class="section-heading">Kontaktdaten</h2>
                <p class="lead">E-Mail: Clemens Obkircher</a></p>
                <p class="lead">E-Mail: <a href="mailto:stobkcle@bx.fallmerayer.it">stobkcle@bx.fallmerayer.it</a></p>
                <p class="lead">Telefon: +393472607237</p>
                <p class="lead">39040 Seis am Schlern</p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        fetch('process_form.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.text())
        .then(result => {
            if (result === 'success') {
                alert('Vielen Dank für Ihre Mitteilung! Wir werden uns innerhalb 48h bei Ihnen melden!');
                form.reset(); // Optional: Das Formular zurücksetzen
            } else {
                alert('Fehler beim Speichern der Daten.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Fehler beim Speichern der Daten.');
        });
    });
});
</script>


<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
