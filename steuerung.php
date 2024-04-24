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
<link href="style.css" rel="stylesheet">

<style>
    body {
        margin: 0;
        padding: 0;
    }
    .menu {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }
    #game-container {
        width: 400px;
        height: 400px;
        display: flex;
        flex-wrap: wrap;
        margin: auto; /* Center the game container */
        margin-top: 10px; /* Add space between menu and game */
        padding: 10px;
        box-sizing: border-box; /* Include padding in width */
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
    .active {
        background: lightblue;
    }
    
    
    /* Manually add space to WASD */
    #W, #A, #S, #D {
        margin-bottom: 10px; /* Add margin to bottom */
    }
</style>
</head>
<body>

<div id="container-wrapper">
    <div id="game-container">
        <div class="key btn btn-primary" id="W" style="width: 100%;">Forward | W</div>
        <div class="key btn btn-primary" id="A">Left | A</div>
        <div class="key btn btn-primary" id="S">Backward | S</div>
        <div class="key btn btn-primary" id="D">Right | D</div>
        <div class="key btn btn-primary" id="onButton">Einschalten</div>
        <div class="key btn btn-primary" id="offButton">Ausschalten</div>
    </div>
    <div id="camera-container">
        <video id="camera-feed" autoplay controls>
            <!-- Hier sollte der Quellpfad des Videos sein -->
            <source src="http://10.10.30.137:8081" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
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
        sendSignal('on');
    });

    document.getElementById('offButton').addEventListener('click', function() {
        sendSignal('off');
    });

    function sendSignal(signal) {
        console.log('Sent signal:', signal);
        fetch('http://10.10.30.137:3000/signal', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ signal })
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
</script>
</body>
</html>
