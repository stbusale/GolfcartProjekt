<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meine Seite mit Menüleiste und WASD Steuerung</title>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cv/X&Uivz" crossorigin="anonymous">
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
        border: 1px solid black;
        display: flex;
        flex-wrap: wrap;
        margin: auto; /* Center the game container */
        margin-top: 0px; /* Add space between menu and game */
    }
    .key {
        width: 33.33%; /* Each key takes one-third of the container width */
        height: 33.33%; /* Each key takes one-third of the container height */
        box-sizing: border-box;
        border: 1px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
    }
    .active {
        background: lightblue;
    }
</style>
</head>
<body>


<div id="game-container">
    <div class="key btn btn-primary" id="W" style="width: 100%;">W</div>
    <div class="key btn btn-primary" id="A">A</div>
    <div class="key btn btn-primary" id="S">S</div>
    <div class="key btn btn-primary" id="D">D</div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-GwEVjflRK1A8X2B+S0&FNYIv4uqABCI5s9zoWsYWddK+yQ6GLZ1czcG5vHQ+fgRJ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-YXy2ovjEe&/JqORn7IVlX4paC/nKYjBTz9aOb0lSMT5WT7rVsbrCqFNn6tbJFf6P" crossorigin="anonymous"></script>
<script>
    const keys = ['W', 'A', 'S', 'D'];
    let pressedKey = '';

    document.addEventListener('keydown', function(event) {
        if (keys.includes(event.key.toUpperCase())) {
            if (pressedKey !== '') {
                document.getElementById(pressedKey).classList.remove('active');
            }
            pressedKey = event.key.toUpperCase();
            document.getElementById(pressedKey).classList.add('active');
            sendData(pressedKey);
        }
    });

    document.addEventListener('keyup', function(event) {
        if (keys.includes(event.key.toUpperCase())) {
            pressedKey = '';
            document.getElementById(event.key.toUpperCase()).classList.remove('active');
            sendData('0');
        }
    });

    function sendData(key) {
        console.log('Sent data:', key); // Ausgabe der gesendeten Daten im Browser-Terminal
        fetch('http://10.10.30.126:3000/keypress', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ key })
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
