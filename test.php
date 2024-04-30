<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meine Seite mit Menüleiste und WASD Steuerung</title>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/startseite.css" rel="stylesheet">
<link href="styles/steuerung.css" rel="stylesheet">

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