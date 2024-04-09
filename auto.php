<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt Komponenten</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000; /* Hintergrundfarbe auf Schwarz setzen */
            color: #fff; /* Textfarbe auf Weiß setzen */
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        .component {
            background-color: #222; /* Hintergrundfarbe für Komponenten */
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .component img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .component p {
            line-height: 1.6;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Komponenten</h1>
    <div class="container">

        <div class="component">
            <img src="imagesAuto/Servomotoren.png" alt="Servomotoren">
            <h2>Servomotoren</h2>
            <p>
                Diese hochwertigen Mikroservos mit Metallgetriebe eignen sich ideal für präzise Steuerungsaufgaben in Ihrem Projekt. Sie können für die Lenkung des Fahrzeugs oder andere aktive Bewegungen verwendet werden. Mit ihrem geringen Gewicht und ihrer kompakten Größe sind sie perfekt für den Einsatz in unserem Auto.
            </p>
        </div>

        <div class="component">
            <img src="imagesAuto/Rasperry.png" alt="Raspberry Pi 4">
            <h2>Raspberry Pi 4</h2>
            <p>
                Der Raspberry Pi 4 ist das Herzstück unseres Projekts. Mit seinem leistungsstarken ARM-Prozessor und 4 GB RAM bietet er ausreichend Rechenleistung für die Ausführung verschiedener Aufgaben, darunter Bildverarbeitung, Steuerungsalgorithmen und Kommunikation. Als Open-Source-Plattform mit Linux-Betriebssystem bietet der Raspberry Pi eine Vielzahl von Möglichkeiten für die Anpassung und Erweiterung.
            </p>
        </div>

        <div class="component">
            <img src="imagesAuto/Motoren.png" alt="Motoren">
            <h2>Motoren</h2>
            <p>
                Diese hochwertigen Getriebemotoren mit Metallgetriebe bieten die erforderliche Kraft und Drehmoment für die Bewegung Ihres Fahrzeugs. Ihr kompaktes Design und ihre Zuverlässigkeit, präzisen Geschwindigkeitsreduktion und hohe Effizienz machen sie ideal für den Einsatz in unserem Auto.
            </p>
        </div>

        <div class="component">
            <img src="imagesAuto/SSD.png" alt="SSD (32GB)">
            <h2>SSD (32GB)</h2>
            <p>
                Diese microSDHC-Speicherkarte bietet ausreichend Speicherplatz für das Betriebssystem und Anwendungssoftware Ihres Raspberry Pi. Mit einer hohen Übertragungsgeschwindigkeit von bis zu 120 MB/s und der A1-App-Performance-Klassifizierung eignet sie sich ideal für schnelle Datenübertragungen und die Ausführung von Anwendungen auf unserem Raspberry Pi.
            </p>
        </div>

        <div class="component">
            <img src="imagesAuto/Reifen.png" alt="Reifen">
            <h2>Reifen</h2>
            <p>
                Diese omnidirektionalen Räder ermöglichen es unserem Fahrzeug, sich in alle Richtungen zu bewegen, ohne die Ausrichtung ändern zu müssen. Jedes Rad verfügt über spezielle Rollen, die es dem Fahrzeug ermöglichen, seitwärts zu fahren, sich zu drehen und sich diagonal zu bewegen. Diese Räder sind ideal für autonome Fahrzeuge, die eine hohe Manövrierfähigkeit erfordern.
            </p>
        </div>

        <div class="component">
            <img src="imagesAuto/Step-Down_Modul.png" alt="Step-down Modul">
            <h2>Step-down Modul</h2>
            <p>
                Diese DC-DC-Wandler mit LED-Voltmeter ermöglichen es, die Spannung effizient von einer Quelle auf eine andere zu konvertieren. Mit ihrer einstellbaren Ausgangsspannung und einem maximalen Strom von 2A eignen sie sich ideal für die Stromversorgung verschiedener Komponenten in unserem Projekt, wie Motoren, Sensoren und Mikrocontroller. Das LED-Voltmeter bietet eine bequeme Möglichkeit, die Ausgangsspannung in Echtzeit zu überwachen und anzupassen.
            </p>
        </div>

        <div class="component">
            <img src="imagesAuto/Sensoren.png" alt="Ultraschallsensor">
            <h2>Ultraschallsensor</h2>
            <p>
                Der Ultraschallsensor ist ein wichtiger Bestandteil des Projekts. Er sendet Ultraschallwellen aus und misst die Zeit, die benötigt wird, bis die Wellen reflektiert und zurückkehren. Basierend auf dieser Zeitberechnung kann der Sensor Entfernungen zu Objekten in seiner Umgebung genau bestimmen. Diese Informationen werden verwendet, um Hindernisse zu erkennen und die Navigation des Fahrzeugs zu steuern, indem es Abstände zu Objekten ermittelt und entsprechend darauf reagiert.
            </p>
        </div>
    </div>
</body>
</html>
