<?php
// Prüfen, ob eine Sitzung noch nicht gestartet wurde
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Überprüfen, ob der Benutzer angemeldet ist
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    // Benutzer ist nicht angemeldet oder hat nicht die erforderlichen Berechtigungen
    // Hier können Sie eine Weiterleitung zur Anmeldeseite oder eine Fehlermeldung einfügen
    header("Location: index.php"); // Beispiel für eine Weiterleitung zur Index-Seite
    exit; // Beenden der weiteren Ausführung des Skripts
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meine Seite mit Menüleiste und WASD Steuerung</title>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/startseite.css" rel="stylesheet">

<style>
    /* Ihre vorhandenen CSS-Stile */
   

    #game-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .key {
        width: calc(33.33% - 20px); /* Each key takes one-third of the container width minus margin */
        height: calc(33.33% - 20px); /* Each key takes one-third of the container height minus margin */
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        margin: 5px; /* Add margin to all keys */
    }

    /* Manually add space to WASD */
    #W, #A, #S, #D {
        margin-bottom: 10px; /* Add margin to bottom */
    }

    #embedded-site {
        width: 80%; /* Breite des eingebetteten Bereichs */
        height: 60vh; /* Höhe des eingebetteten Bereichs */
        border: none; /* Kein Rahmen */
    }

    .hidden {
        display: none; /* Verstecke das iframe */
    }

    .buttons {
        margin-top: 20px; /* Abstand zwischen iframe und Buttons */
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .key.btn {
        flex: 0 0 calc(33.33% - 20px); /* Each key takes one-third of the container width minus margin */
        height: 100px; /* Set height of buttons */
        margin: 5px; /* Add margin to all keys */
    }
</style>
</head>
<body>

<div id="container-wrapper">
    <!-- Hier fügen Sie den Container für die Buttons ein -->
    <div class="buttons">
        <div id="game-container">
            <div class="key btn" id="W">FORWARD | W</div>
            <div class="key btn" id="A">LEFT | A</div>
            <div class="key btn" id="S">BACK | S</div>
            <div class="key btn" id="D">RIGHT | D</div>
            <div class="key btn" id="onButton">ON</div>
            <div class="key btn" id="offButton">OFF</div>
        </div>
    </div>

    <!-- Hier fügen Sie das iframe für die eingebettete Website ein -->
    <iframe id="embedded-site" src="" class="hidden"></iframe>
</div>

<!-- Bootstrap 5 JS --> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    const commands = {
        W: 'forward',
        A: 'left',
        S: 'backward',
        D: 'right',
    };

    let lastKeyPressed = '';

    document.addEventListener('keydown', function(event) {
        if (!lastKeyPressed) {
            const key = event.key.toUpperCase();
            if (Object.keys(commands).includes(key)) {
                lastKeyPressed = key;
                document.getElementById(key).classList.add('active');
                sendData(commands[key]);
            }
        }
    });

    document.addEventListener('keyup', function(event) {
        const key = event.key.toUpperCase();
        if (lastKeyPressed === key) {
            lastKeyPressed = '';
            document.getElementById(key).classList.remove('active');
            sendData('stop');
        }
    });

    function sendData(command) {
        console.log('Sent command:', command);
        fetch('http://10.10.30.137:3000/keypress', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ command })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('There was a problem with your fetch operation:', error);
        });
    }

    // Funktionen zum Ein- und Ausschalten
    document.getElementById('onButton').addEventListener('click', function() {
        document.getElementById('embedded-site').classList.remove('hidden');
        document.getElementById('container-wrapper').style.backgroundColor = '#f0f0f0'; // Zurücksetzen der Hintergrundfarbe
        document.getElementById('embedded-site').src = 'http://10.10.30.161:5000'; // Setzen der Quelle auf die Website
    });

    document.getElementById('offButton').addEventListener('click', function() {
        document.getElementById('embedded-site').classList.add('hidden');
        document.getElementById('container-wrapper').style.backgroundColor = '#000'; // Ändern der Hintergrundfarbe auf Schwarz
    });
</script>
</body>
</html>
