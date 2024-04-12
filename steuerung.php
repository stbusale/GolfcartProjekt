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
    #container-wrapper {
        display: flex;
        justify-content: space-between; /* Align content with space between */
        align-items: center; /* Center content vertically */
        height: 100vh; /* Set container height to full viewport height */
    }
    #game-container {
        width: 40%; /* Set game container width to 40% */
        height: 50%; /* Set game container height to 50% of the viewport height */
        display: flex;
        flex-wrap: wrap;
        padding: 10px;
        box-sizing: border-box; /* Include padding in width */
    }
    #camera-container {
        width: 60%; /* Set camera container width to 60% */
        height: 100%; /* Set camera container height to full height */
        position: relative;
        overflow: hidden;
    }
    #camera-feed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
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
            <source src="video_stream.php" type="video/mp4">
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
        D: 'right'
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
