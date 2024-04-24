<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unser Team</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="styles/team.css" rel="stylesheet">
    <link href="styles/startseite.css" rel="stylesheet">
</head>

<header>
    <div class="fade-in">
        <h1 class="main-title">Unser Team</h1>
    </div>
</header>

<body>

<div class="container mt-5">

    <!-- Teammitglieder -->
    <div class="row">
        <?php
        $team_members = array(
            array(
                "name" => "Clemens Obkircher",
                "role" => "Nichts Macher",
                "image" => "images/Clemens.jpg",
                "description" => "Clemens ist zweifellos das Alpha-Männchen unserer Gruppe. Seine beeindruckenden Fähigkeiten und sein breites Wissen in allen Lebensbereichen machen ihn zu einem unverzichtbaren Teammitglied. Nicht nur kann er in kürzester Zeit Lösungen finden, die andere Stunden dauern würden, sondern er hat auch die einzigartige Gabe, anderen zu zeigen, wie sie ihre Arbeit verbessern können. Was andere in stundenlanger Arbeit versuchen, kann er in wenigen Minuten meistern. Clemens' Fähigkeit, das Potenzial in jedem von uns zu erkennen und zu fördern, macht ihn zu einem wertvollen Ankerpunkt in unserem Team – ohne ihn wäre unser gemeinsames Projekt nur halb so erfolgreich."
            ),
            array(
                "name" => "Simon Monfrecola",
                "role" => "Hardware-Auto",
                "image" => "images/Simon.jpg",
                "description" => "Simon hat sich als unverzichtbares Mitglied unseres Teams erwiesen, indem er das gesamte 3D-Modell entwickelt hat. Sowohl beim Löten als auch beim Zusammenbau des Autos hat er sein volles Engagement gezeigt. Trotz Herausforderungen wie einem nicht ausreichenden 3D-Drucker hat er alle Hindernisse überwunden und das Team zu internem Erfolg geführt. Sein Einsatz und seine Beharrlichkeit haben nicht nur zu einem erfolgreichen Projekt, sondern auch zu einem beeindruckenden Erscheinungsbild beigetragen."
            ),
            array(
                "name" => "Daniel Constantini",
                "role" => "Abfucker",
                "image" => "images/Dani.jpg",
                "description" => "Daniel war von entscheidender Bedeutung für das gesamte Projekt, insbesondere bei allen Coding-Aufgaben. Sein unermüdlicher Einsatz und sein Fachwissen erstreckten sich über den gesamten Zeitraum des Projekts. Ob es um die Entwicklung von Schaltungen, die Ballerkennung oder die Integration des Fotosensors ging, Daniel war stets präsent und spielte eine zentrale Rolle. Sein Engagement und seine Fähigkeiten haben das Projekt auf ein Top-Niveau gehoben und seinen Erfolg maßgeblich geprägt."
            ),
            array(
                "name" => "Alex Bussola",
                "role" => "Website Developer",
                "image" => "images/Alex.jpg",
                "description" => "Alex ist ein hochkompetenter Softwareentwickler, der sich sowohl um das Frontend-Design als auch um die Integration von Kameraverknüpfungen auf der Website verdient gemacht hat. Seine Expertise in verschiedenen Fachbereichen und seine Hilfsbereitschaft machen ihn zu einem unverzichtbaren Mitglied im Team. Mit seinem Beitrag trägt er maßgeblich zum Erfolg des gesamten Teams bei."
            ),
            array(
                "name" => "Samuel Gruber",
                "role" => "Website Developer",
                "image" => "images/Samu.jpg",
                "description" => "Samuel ist ein fähiger Website-Entwickler, der maßgeblich daran beteiligt war, die Website online zu bringen. Seine umfassenden Kenntnisse im Bereich Netzwerke haben dabei geholfen, eine reibungslose Funktionalität zu gewährleisten. Durch sein Engagement, einschließlich Überstunden, hat er sogar das Auto zum Laufen gebracht, was seine Hingabe und Fähigkeiten unterstreicht."
            ),
            array(
                "name" => "Ivan Kaser",
                "role" => "Steuerung-Auto",
                "image" => "images/Ivi.jpg",
                "description" => "Ivan ist von Anfang an ein leuchtendes Vorbild für unser Team, besonders in seiner Verantwortung für die Steuerung des Autos. Seine Begeisterung für das Projekt ist ansteckend und treibt uns alle an. Mit seinen herausragenden Coding-Fähigkeiten in Python, PHP, JavaScript und C++ sowie seinem fundierten Wissen über verschiedene Frameworks stellt er sicher, dass unsere Arbeit stets auf höchstem Niveau ist. Seine Expertise und sein Engagement sollten als Maßstab für kommende Klassen dienen, und sein Beitrag zum Projekt wird auch in Zukunft unvergessen bleiben."
            )
        );

        foreach ($team_members as $member) {
            echo '<div class="col-lg-4 team-member fade-in">';
            echo '<div class="member-image">';
            echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '" class="img-fluid">';
            echo '</div>';
            echo '<div class="team-member-details">';
            echo '<h2 class="h5">' . $member['name'] . '</h2>';
            echo '<p class="text-muted">' . $member['role'] . '</p>';
            echo '<p class="member-description">' . $member['description'] . '</p>';
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
