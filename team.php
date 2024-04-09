<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unser Team</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 0px;
        }
        .accordion-item {
            margin-bottom: 20px;
        }
        /* Fügen Sie hier Ihren benutzerdefinierten CSS-Code hinzu */
        .team-member {
            margin-bottom: 50px;
            display: flex;
            align-items: center;
        }
        .team-member img {
            width: 200px;
            height: auto;
            border-radius: 5px;
            object-fit: cover;
            margin-right: 20px;
        }
        .team-member-details {
            flex-grow: 1;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-5">Unser Team</h1>

    <!-- Teammitglieder -->
    <div class="row">
        <?php
        $team_members = array(
            array(
                "name" => "Alex Bussola",
                "role" => "Website Developer",
                "image" => "images/Alex.jpg",
                "description" => "Hier kann eine Beschreibung von Alex Bussola stehen."
            ),
            array(
                "name" => "Samuel Gruber",
                "role" => "Website Developer",
                "image" => "images/Samu.jpg",
                "description" => "Hier kann eine Beschreibung von Samuel Gruber stehen."
            ),
            array(
                "name" => "Clemens Obkircher",
                "role" => "Nichts Macher",
                "image" => "images/Clemens.jpg",
                "description" => "Clemens aka Tischler, Pilot, Stewardess, Lockführer, Kontrolleur, Koch, Grillmeister, der der am meisten sauft, der der am längsten wachbleibt, Reiseführer, Security, Vater, Onkel, Mutter, Opa, Rentner, Kellner, Taxi-Fahrer, Organisator, Fluglotse, Motivator, Animateur, der Beste, Ehrenmann, Frauenheld, der der die Frauen für die anderen klärt und den Ehrenmann macht, Mechaniker, Techniker, der Arzt, Apotheker, Friseur, Putzfrau, Butler, Fußballexperte, der Profi-Sportler (jede Sportart) der durch eine Verletzung gestoppt wurde, Elektriker, Abspüler, Müllmann, Fahrer, Schmuggler, Weinverkoster, der Reiche, Abfucker, Besserwisser, Fashion Experte, Kameramann, Fotograf, Historiker, Archeologe, Bodybuilder, Rennradfahrer, Allgemeinwissender, Chef"),
            array(
                "name" => "Daniel Constantini",
                "role" => "Abfucker",
                "image" => "images/Dani.jpg",
                "description" => "Hier kann eine Beschreibung von Daniel Constantini stehen."
            ),
            array(
                "name" => "Ivan Kaser",
                "role" => "Steuerung-Auto",
                "image" => "images/Ivi.jpg",
                "description" => "Ivan Interribile, der Steuerungsmeister, checkt so viel, wie die Haare eines Glatzkopfes."
            ),
            array(
                "name" => "Simon Monfrecola",
                "role" => "Hardware-Auto",
                "image" => "images/Simon.jpg",
                "description" => "Hier kann eine Beschreibung von Simon Monfrecola stehen."
            )
        );

        foreach ($team_members as $member) {
            echo '<div class="col-lg-12 team-member">';
            echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '" class="img-fluid mb-3">';
            echo '<div class="team-member-details">';
            echo '<h2 class="h5">' . $member['name'] . '</h2>';
            echo '<p class="text-muted">' . $member['role'] . '</p>';
            echo '<p>' . $member['description'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
