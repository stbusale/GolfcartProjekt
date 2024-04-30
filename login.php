<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="styles/startseite.css" rel="stylesheet">
    <!--
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
    </style>-->
</head>

<header class="mb-5">
    <div class="fade-in zoom">
        <div class="mt-3"></div> <!-- Platz über dem Logo -->
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1 class="main-title mt-3">Login</h1> <!-- Platz über der Überschrift -->
    </div>
</header>


<body>
<div class="fade-in zoom container">
    <form method="post" class="mt-4">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="username" class="form-label">Benutzername:</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="password" class="form-label">Passwort:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mx-auto">
                <button type="submit" class="btn btn-primary btn-block">Anmelden</button>
            </div>
        </div>
        <?php
        session_start();

        // Überprüfe, ob das Formular gesendet wurde
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Überprüfe Benutzername und Passwort
            if ($_POST['username'] === 'admin' && $_POST['password'] === 'Leumas5002') {
                // Benutzerdaten sind korrekt, starte die Session
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];

                // Weiterleitung zur Startseite oder einer anderen Seite
                header("Location: index.php?page=startseite.php"); // Passe die URL an
                exit; // Beende das Skript nach der Weiterleitung
            } else {
                // Falsche Anmeldedaten
                $error = "Falscher Benutzername oder Passwort. Bitte versuchen Sie es erneut.";
            }
        }
        ?>
        <?php if(isset($error)) { ?>
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="text-danger text-center"><?php echo $error; ?></div>
                </div>
            </div>
        <?php } ?>
    </form>
</div>


</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fadeIns = document.querySelectorAll('.fade-in');

        function checkPosition() {
            for (let i = 0; i < fadeIns.length; i++) {
                const fadeIn = fadeIns[i];
                const positionFromTop = fadeIn.getBoundingClientRect().top;

                // Trigger Animation, wenn das Element fast im sichtbaren Bereich ist
                if (positionFromTop - window.innerHeight < 0) {
                    fadeIn.classList.add('active');
                }
            }
        }

        // Event Listener hinzufügen, um beim Scrollen die Position zu überprüfen
        window.addEventListener('scroll', checkPosition);
        
        // Überprüfe beim Laden der Seite die Position
        checkPosition();
    });
</script>

</html>
